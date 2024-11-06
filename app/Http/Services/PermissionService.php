<?php

namespace App\Http\Services;

use App\Http\Services\UserService;

class PermissionService
{
    public static function updateAdmin($user_id, $is_admin)
    {   
        $user = UserService::findUser($user_id);
        $user->is_admin = $is_admin ? 0 : 1;
        $user->save();
        return $user;
    }

    public static function isAdmin($user_id)
    {
        $user = UserService::findUser($user_id);
        return $user->is_admin;
    }
}
