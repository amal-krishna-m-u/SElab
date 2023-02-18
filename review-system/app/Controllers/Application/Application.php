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
    public function selectCategoryView()
    {


        $userModel = new \App\Models\User();
        $userModel->checkSession();
        //take id value from the user session 
        $id = $session->get('user');
        $appModel = new \App\Models\Application();
        $data=$appModel->listCategory($id);
        $data['catid'] = $data[0]->catid;
        $data['catname'] = $data[0]->catname;



        return view('/application/select_category',$data);
    }
    


    

}
