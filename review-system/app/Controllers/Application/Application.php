<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Application extends BaseController
{
    /**
     * Function for redirecting to the admin login page
     *
     * 
     */
    public function listapplicationview()
    {
        return view('/application/listApplication');
    }

    /**
     * Function for redirecting to the admin register page
     *
     * 
     */
    public function registerview()
    {
        return view('/admin/register');
    }

    /**
     * Function for redirecting to the admin dashboard page
     *
     * 
     */
    public function dashboardview()
    {
        return view('/admin/dashboard');
    }
    


    

}
