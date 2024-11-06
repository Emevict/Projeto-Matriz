<?php

namespace App\Http\Services;

use App\Models\User;

class UserService
{
    public static function treatmentName($name)
    {
        $name = strtolower($name);
        $name = explode(' ', $name);
        $completedName = '';
        for($i = 0; $i < count($name); $i++) {
            $completedName .= " " . ucfirst($name[$i]);
        }

        return $completedName;
    }

    public static function getUsers()
    {
        $users = User::all();
        return $users;
    }

    public static function findUser($user_id)
    {   
        return User::find($user_id);
    }
}

?>