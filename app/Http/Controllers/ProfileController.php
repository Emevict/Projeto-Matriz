<?php

namespace App\Http\Controllers;

use App\Http\Services\ProfileServices;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function guideProfile()
    {
        return view('guides.profile');
    }

    public function addProfile(Request $request)
    {
        try{
            if(ProfileServices::addProfile($request)){
                return redirect()->route('guideProfile')->with('success', 'Perfil criado com sucesso!');
            };
        } catch (\Exception $e) {
            info($e->getMessage());
            return redirect()->route('guideProfile')->with('error', 'Erro ao criar perfil');
        }
    }

    public function updateProfile(Request $request)
    {
        try{
            if(ProfileServices::updateProfile($request)){
                return redirect()->route('guideProfile')->with('success', 'Perfil atualizado com sucesso!');
            };
        } catch (\Exception $e) {
            info($e->getMessage());
            return redirect()->route('guideProfile')->with('error', 'Erro ao atualizar perfil');
        }
    }

    public function deleteProfile($profile_id)
    {
        try{
            if(ProfileServices::deleteProfile($profile_id)){
                return redirect()->route('guideProfile')->with('success', 'Perfil deletado com sucesso!');
            };
        } catch (\Exception $e) {
            info($e->getMessage());
            return redirect()->route('guideProfile')->with('error', 'Erro ao deletar perfil');
        }
    }
}
