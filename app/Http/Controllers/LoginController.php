<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function LoginGithub() {
        return Socialite::driver('github')->redirect();
    }

    public function LoginGithubHandle(Request $request) {
            
    }
}
