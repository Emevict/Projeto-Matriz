<?php

namespace App\Http\Controllers;


class ProfileController extends Controller
{
    public function guideProfile()
    {
        return view('guides.profile');
    }
}
