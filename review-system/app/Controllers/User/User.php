<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function loginview()
    {
        return view('/user/login');
    }

    public function registerview()
    {
        return view('/user/register');
    }
}
