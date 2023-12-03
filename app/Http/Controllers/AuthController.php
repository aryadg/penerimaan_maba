<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSend;

class AuthController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['login']]);
    // }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    //register user
    public function register(Request $request)
    {
        // validate request
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'Failed', 'state' => '100', 'message' => $validator->errors()]);
        }
        $name = $request->first_name . " " . $request->last_name;
        $email = $request->email;
        $password = $request->password;
        $rand_string = Str::random(20);

        // create new user
        try {
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->password = Hash::make($password);
            $user->verify_key = $rand_string;
            if ($user->save()) {
                $credentials = request(['email', 'password']);

                if (Auth::attempt($credentials)) {
                    $details = [
                        'username' => $name,
                        'website' => 'www.bhaktisemesta.ac.id',
                        'datetime' => date('Y-m-d H:i:s'),
                        'url' => request()->getHttpHost() . '/register/verify/' . $rand_string
                    ];
                    Mail::to($request->email)->send(new MailSend($details));
                    return redirect()->route("bd-dashboard");
                } else {
                    return response()->json(['error' => 'Unauthorized'], 401);
                }

                // call function to get verif email
                // event(new Registered($user));
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
    // login
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), ['email' => 'required|exists:users,email']);
        if ($validator->fails()) {
            return response()->json(['status' => 'Failed', 'state' => '100', 'message' => $validator->errors()]);
        }
        $credentials = request(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect()->route("bd-dashboard");
        } else {
            return response()->json(['error' => 'Unauthorized, Wrong password'], 401);
        }
    }

    public function me(Request $request)
    {
        $user = auth('api')->user();
        $user->role;
        // return response()->json($user);
        return response()->json($user);
    }

    // public function logout()
    // {
    //     auth('api')->logout();

    //     return response()->json(['message' => 'Successfully logged out']);
    // }

    // public function refresh()
    // {
    //     return response()->json($this->respondWithToken(auth('api')->refresh()));
    // }

    // protected function respondWithToken($token)
    // {
    //     return [
    //         'access_token' => $token,
    //         'token_type' => 'bearer',
    //         'expires_in' => auth('api')->factory()->setTTL(1000000)->getTTL()
    //     ];
    // }

    // request forgot password
    public function requestForgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        // Requesting A Password Reset Link
        $status = Password::sendResetLink(
            $request->only('email')
        );
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
    // get token to reset password
    public function getToken(Request $request, $token)
    {
        return view("pages.edit.reset-password-token", ["email" => $request->input("email"), "token" => $token]);
    }

    public function resetPasswordTokenProccess(Request $request)
    {

        try {
            $user = User::where('email', $request->token)->firstOrFail();
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route("bd-dashboard");
        } catch (\Throwable $th) {
            return response()->json(['status' => 'Failed', 'state' => '403', "message" => $th->getMessage()], 500);
        }
    }
    // udpate password
    public function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);


        // validate the password has been changed
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? $this->login($request)
            : back()->withErrors(['email' => [__($status)]]);
    }

    // public function resetPasswordByAdmin(ResetPassByAdmin $request)
    // {
    //     try {
    //         $user = User::find($request->user_id);
    //         $user->update(["password" => Hash::make($request->password)]);
    //         return response()->json(["status" => "Success", "state" => 200, "message" => "Password changed successfully"]);
    //     } catch (\Throwable $th) {
    //         return response()->json(['status' => 'Failed', 'state' => '403', "message" => $th->getMessage()], 500);
    //     }
    // }

    public function resetPasswordByUser(Request $request)
    {
        try {
            $user = User::find(Auth::id());
            $validator = Validator::make($request->all(), [
                'old_password' => 'required|min:6',
                "password" => "required|min:6|confirmed"
            ]);
            if ($validator->fails()) {
                return response()->json(['status' => 'Failed', 'state' => '100', 'message' => $validator->errors()]);
            }
            if (!Hash::check($request->old_password, $user->password)) {
                return response()->json(['error' => 'Unauthorized, Wrong password'], 401);
            }
            $user->update(["password" => Hash::make($request->password)]);
            return response()->json(["status" => "Success", "state" => 200, "message" => "Password changed successfully"]);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'Failed', 'state' => '403', "message" => $th->getMessage()], 500);
        }
    }
}
