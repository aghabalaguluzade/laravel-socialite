<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function LoginGoogleController() {
        return Socialite::driver('google')->redirect();
    }

    public function LoginGoogleHandleController() {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'google_id' => $googleUser->id
        ],[
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'google_token' => $googleUser->token,
            'google_refresh_token' => $googleUser->refreshToken,
            'google_picture' => $googleUser->avatar
        ]);

        Auth::login($user);
        return to_route('dashboard');

    }
}
