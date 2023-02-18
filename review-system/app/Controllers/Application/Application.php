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
        public function selectCategory()
        {
            $userModel = new \App\Models\User();
            $userModel->checkSession();
            //take id value from the user session 
            $session = session();
        $id = $session->get('user');
            //fetch the data from the form select_category.php ,values includes the catid
            $data = $_POST['catid'];
            //insert values to the database from the form ,insert into usercat ,insert the catid and userid 

            $log = service('logger');
            $log->debug(sprintf("Data passed to the usercat to insert data recived  : %s", json_encode($data,$id)));
            $db=mysqli_connect("localhost","root","","review_system");

            if(!$db)
            {
                $log = service('logger');
                $log->debug(sprintf("Data not inserted to the usercat data used  : %s", json_encode($data)));
                return redirect()->to('/application/selectCategoryView');
            }
            foreach($data as $dat)
            {
                $sql="INSERT INTO usercat (userid,catid) VALUES ('$id','$dat')";
                $status = mysqli_query($db,$sql);
            }
        
        
            if($status)
            {
                $rm="DELETE FROM tempcat WHERE 1 ";
mysqli_query($db,$rm);
if($rm){ 
                $log = service('logger');
                $log->debug(sprintf("Data inserted to the usercat data recieved : %s", json_encode($status)));
                return redirect()->to('/User/dashboard');
}   }
            else
            {
                $log = service('logger');
                $log->debug(sprintf("Data not inserted to the usercat data used  : %s", json_encode($data)));
                return redirect()->to('/application/selectCategoryView');
            }
        





        }
























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
