<?php

namespace App\Controllers\Application;

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
        
        return view('/application/select_category');
    /*    $appModel = new \App\Models\Application();
        $data=$appModel->listCategory($id);
    
        if(!empty($data))
        {
        
            $log = service('logger');
            $log->debug(sprintf("Data passed to categorylist view: %s", json_encode($data)));
        
            foreach ($data as $data) {
                $cat['catid']=$data->catid;
                $cat['catname']=$data->catname;
            }
            
            return view('/application/select_category',$cat);
    
        }
        else
        {
            $log = service('logger');
            $log->debug(sprintf("Data not passed becasue it's empty: %s", json_encode($data)));
        }
        $data['catid'] = $data[0]->catid;
        $data['catname'] = $data[0]->catname;

        return view('/application/select_category',$data);
    }
    */
    }
}
