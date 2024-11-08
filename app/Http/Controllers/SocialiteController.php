<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function googleLogin()
    {
       return Socialite::driver('google')->redirect();
    }

    public function googleAuth()
    {
        $user = Socialite::driver('google')->user();

        $return = UserController::authLoginGoogle($user);

        if($return){
            return redirect()->route('home')->with('success', 'Usuário criado com sucesso!');
        }

        return false;
       
    }
}