<?php

namespace App\Http\Controllers;

use App\Http\Services\PermissionService;
use App\Http\Services\UserService;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function guidePermission()
    {
        return view('guides.permissions');
    }

    public function updateAdminStatus($user_id, $is_admin)
    {
        $return = PermissionService::updateAdmin($user_id, $is_admin);
        if ($return) {
            return redirect()->route('guidePermission');
        }
    }
}
