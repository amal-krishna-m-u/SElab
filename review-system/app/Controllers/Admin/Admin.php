<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Admin extends BaseController
{
    //funtion for redirecting to the admin login page
    public function loginview()
    {
        return view('/admin/login');
    }

    //funtion for redirecting to the admin register page
    public function registerview()
    {
        return view('/admin/register');
    }


    //funtion for redirecting to the admin dashboard page
    public function dashboardview()
    {
        return view('/admin/dashboard');
    }


    
}
