<?php

namespace App\Http\Services;

use App\Models\Profile;


class ProfileServices
{
    public static function addProfile($params)
    {
        $profile = Profile::create([
            'description' => $params->name,
            'permissions' => json_encode($params->permissions)
        ]);

        if (!$profile) {
            return false;
        }
        return true;
    }

    public static function getProfiles()
    {
        return Profile::all();
    }

    public static function updateProfile($params)
    {
        $profile = Profile::where('id', $params->idModal)->first();
        $profile->description = $params->nameModal;
        $profile->permissions = json_encode($params->permissionsModal);
        $profile->save();
        return true;
    }

    public static function deleteProfile($id)
    {
        $profile = Profile::where('id', $id)->first();
        $profile->delete();
        return true;
    }
}

?>