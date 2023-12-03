<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exists();

        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
                ->update([
                    'email_verified_at' => now()
                ]);

            return "Verifikasi Berhasil. Akun Anda sudah aktif.";
        } else {
            return "Key tidak valid!";
        }
    }

    public function show(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view('verification.notice', [
                'pageTitle' => __('Account Verification')
            ]);
    }
}
