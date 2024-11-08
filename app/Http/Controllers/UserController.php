<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function guideLogin()
    {
        return view('guides.login'); 
    }

    public function guideCreateLogin()
    {
        return view('guides.createLogin'); 
    }

    public function createLogin(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        ]);
    
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('home')->with('success', 'Usuário criado com sucesso!');
    }

    public function authLogin(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home')->with('success', 'Login realizado com sucesso!');
        }

        return back()->with(['error' => 'Credenciais inválidas.']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('guideLogin')->with('success', 'Você foi desconectado com sucesso!');
    }

    public static function createLoginSocial($params)
    {
        $user = User::updateOrCreate(
            ['email' => $params->email],
            [
                'name' => $params->name,
                'id_social' => $params->id,
                'password' => Hash::make($params->id)
            ]
        );
    
        return $user;
    }

    public static function authLoginSocial($params)
    {
        $user = self::createLoginSocial($params);
        Auth::login($user);
        return true;
    }
}