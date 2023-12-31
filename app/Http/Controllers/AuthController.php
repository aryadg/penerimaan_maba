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
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function register(Request $request)
    {
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
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

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

    // public function createuser(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users|max:255',
    //         'phone' => 'required|string|max:15',
    //         'password' => 'required|string',
    //     ]);

    //     $user = new User([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'phone' => $request->input('phone'),
    //         'password' => Hash::make($request->input('password')),
    //     ]);

    //     $user->save();
    //     \Log::info('User created successfully: ' . $user);
    // }

    public function me(Request $request)
    {
        $user = auth('api')->user();
        $user->role;
        return response()->json($user);
    }

    // ... other methods ...

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
