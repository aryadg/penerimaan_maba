<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'Failed', 'state' => '100', 'message' => $validator->errors()]);
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $rand_string = Str::random(20);

        try {
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->password = Hash::make($password);
            $user->verify_key = $rand_string;
        
            // Simpan user ke dalam database
            $user->save();
        
            // Otomatis verifikasi user
            $user->markEmailAsVerified();
        
            // Redirect atau berikan respons sesuai kebutuhan
            return redirect()->route("bd-dashboard");
        } catch (\Exception $e) {
            // Handle exception jika terjadi kesalahan saat menyimpan user
            return response()->json(['status' => 'Failed', 'state' => '101', 'message' => $e->getMessage()]);
        }
        
    }
}
