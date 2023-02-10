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


    //funtion to register admin and store data in the database
    public function register()
    {
      
    } 
}
