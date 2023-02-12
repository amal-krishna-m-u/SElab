<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    /**
     * Function for redirecting to the admin login page
     *
     * @return void
     */
    public function loginview()
    {
        return view('/admin/login');
    }

    /**
     * Function for redirecting to the admin register page
     *
     * @return void
     */
    public function registerview()
    {
        return view('/admin/register');
    }

    /**
     * Function for redirecting to the admin dashboard page
     *
     * @return void
     */
    public function dashboardview()
    {
        return view('/admin/dashboard');
    }
    

}
