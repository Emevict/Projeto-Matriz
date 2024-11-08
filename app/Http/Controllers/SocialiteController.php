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
        $userDb = User::where('id_google', $user->id)->first();

        if($userDb){
            if(UserController::authLoginGoogle($userDb)){
                return redirect()->route('home')->with('success', 'Usuário autenticado com sucesso!');
            };
        }

        UserController::createLoginGoogle($user);
        return redirect()->route('home')->with('success', 'Usuário criado com sucesso!');
    }
}