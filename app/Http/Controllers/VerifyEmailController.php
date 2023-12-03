<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Verified;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;

class VerifyEmailController extends Controller
{

    public function send(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        // $request->user()->sendEmailVerificationNotification();
        return response()->json(['message' => 'link for email verification has been sent']);
    }

    public function show(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view('verification.notice', [
                'pageTitle' => __('Account Verification')
            ]);
    }

    public function __invoke(Request $request)
    {
        $user = User::find($request->route('id'));

        if ($user->hasVerifiedEmail()) {
            // return redirect('/');
            return redirect()->route('general-dashboard');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }
        // return redirect('/');
        return redirect()->route('general-dashboard');
    }
}
