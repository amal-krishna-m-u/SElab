<?php

namespace App\Controllers\Admin;
use CodeIgniter\Log\Logger;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    //for viewing the login page
    public function loginview()
    {//start session
        $session = session();
    //if session is alredy set then distroy it and start a new session
        if($session->get('admin'))
        {
            $session->destroy();
            $session->start();
        }
        return view('/admin/login');
    }


    //for viewing the register page
    public function registerview()
    {
        return view('/admin/register');
    }
    


    //for viewing the edit details page
    public function editDetailsView()
    {
        $adminModel = new \App\Models\Admin();
        $adminModel->checkSession();
        return view('/admin/edit_details');
    }




    //for viewing the dashboard page
    public function dashboardview()
    {
        $adminModel = new \App\Models\Admin();
        $adminModel->checkSession();

        $session = session();
        //check whether session is set for admin or not if not don't allow to access the dashboard
        if($session->get('admin'))
        {
            $id = $session->get('admin');
            $data = $adminModel->getDetails($id);

            
        
        if(!empty($data))
                {     $log = service('logger');
                    $log->debug(sprintf("Data passed to dashboard view: %s", json_encode($data)));
                    //need to do this before passing to view as the data is an array of objects and the view is expecting a single object
                    $data['email'] = $data[0]->email;
                    $data['name'] = $data[0]->name;
                    $data['status'] = 0;
                    $data['password'] = $data[0]->password;
                    return view('/admin/dashboard', $data);
                }
                else
                {    $log = service('logger');
                    $log->debug(sprintf("Data is empty passed to dashboard view: %s", json_encode($data)));
                    return view('/admin/dashboard');
                }
            


            //return view('/admin/dashboard',$data);
        }
        else
        {
            return redirect()->to('/Admin/login');
        }

    }






    //for editing details of admin .action for edit details page 
    public function editDetails()
    {
 
        $adminModel = new \App\Models\Admin();
        $adminModel->checkSession();
        $session = session();
    
        //use log message to store the id of the user and the data that are 
        $data = [
            
            'status' => $this->request->getVar('status'),
        ];
        $id =[ 'id' => $id,];
        
        $log = service('logger');
        $log->debug(sprintf("Data passed to editing  : %s", json_encode($id,$data)));
    
        $adminModel = new \App\Models\Admin();
        $adminModel->updateDetails($id,$data);
        return redirect()->to('/Admin/dashboard');

    }




    //actions for registeration page
    public function register()
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'status' => $this->request->getVar('status'),
            'password' => $this->request->getVar('password'),
        ];
        $adminModel = new \App\Models\Admin();
        $adminModel->saveDetails($data);
        return redirect()->to('/Admin/login');
    }



    //action for login page
    public function login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $adminModel = new \App\Models\Admin();
        if($adminModel->checkadmin($email,$password))
        {


            return redirect()->to('/Admin/dashboard');

            
        }
        else
        {
            
            return redirect()->to('/Admin/login');
        }
    
    }

}