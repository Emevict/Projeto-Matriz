<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

use function Laravel\Prompts\error;

class SocialiteController extends Controller
{
    public function authProviderRedirect($provider)
    {
        if($provider){
            return Socialite::driver($provider)->redirect();
        }
        abort(404);
    }

    public function socialAuth($provider)
    {
        try{
            $user = Socialite::driver($provider)->user();
            $return = UserController::authLoginSocial($user);
    
            if($return){
                return redirect()->route('home')->with('success', 'Usuário criado com sucesso!');
            }
        } catch (\Exception $e) {
            info($e->getMessage());
            return redirect()->route('home');
        }
    }
}