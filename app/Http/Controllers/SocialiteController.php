<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\UserController;

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
                return redirect()->route('home')->with('success', 'Usuário logado com sucesso');
            }
        } catch (\Exception $e) {
            info($e->getMessage());
            return redirect()->route('guideLogin')->with('error', 'Erro ao autenticar');
        }
    }
}