<?php

namespace App\Controllers\User;
use CodeIgniter\Log\Logger;

use App\Controllers\BaseController;

class User extends BaseController
{
    //for viewing the login page
    public function loginview()
    {//start session
        $session = session();
    //if session is alredy set then distroy it and start a new session
        if($session->get('user'))
        {
            $session->destroy();
            $session->start();
        }
        return view('/user/login');
    }


    //for viewing the register page
    public function registerview()
    {
        return view('/user/register');
    }
    


    //for viewing the edit details page
    public function editDetailsView()
    {
        $userModel = new \App\Models\User();
        $userModel->checkSession();
        return view('/user/edit_details');
    }




    //for viewing the dashboard page
    public function dashboardview()
    {
        $userModel = new \App\Models\User();
        $userModel->checkSession();

        $session = session();
        //check whether session is set for user or not if not don't allow to access the dashboard
        if($session->get('user'))
        {
            $id = $session->get('user');
            $data = $userModel->getDetails($id);

            
        
        if(!empty($data))
                {     $log = service('logger');
                    $log->debug(sprintf("Data passed to dashboard view: %s", json_encode($data)));
                    //need to do this before passing to view as the data is an array of objects and the view is expecting a single object
                    $data['email'] = $data[0]->email;
                    $data['name'] = $data[0]->name;
                    $data['dob'] = $data[0]->dob;
                    $data['password'] = $data[0]->password;
                    return view('/user/dashboard', $data);
                }
                else
                {    $log = service('logger');
                    $log->debug(sprintf("Data is empty passed to dashboard view: %s", json_encode($data)));
                    return view('/user/dashboard');
                }
            


            //return view('/user/dashboard',$data);
        }
        else
        {
            return redirect()->to('/User/login');
        }

    }






    //for editing details of user .action for edit details page 
    public function editDetails()
    {
 
        $userModel = new \App\Models\User();
        $userModel->checkSession();
        $session = session();

        $id = $session->get('user');
    
        //use log message to store the id of the user and the data that are 
        $data = [
            'name' => $this->request->getVar('name'),
            'dob' => $this->request->getVar('dob'),
            'password' => $this->request->getVar('password'),
        ];
        
        $log = service('logger');
        $log->debug(sprintf("Data passed to editing  : %s", json_encode($data)));
    
        $userModel = new \App\Models\User();
        $userModel->updateDetails($id,$data);
        return redirect()->to('/User/dashboard');

    }




    //actions for registeration page
    public function register()
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'dob' => $this->request->getVar('dob'),
            'password' => $this->request->getVar('password'),
        ];
        $userModel = new \App\Models\User();
        $userModel->saveDetails($data);
        return redirect()->to('/User/login');
    }



    //action for login page
    public function login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $userModel = new \App\Models\User();
        if($userModel->checkuser($email,$password))
        {


            return redirect()->to('/User/dashboard');

            
        }
        else
        {
            
            return redirect()->to('/User/login');
        }

    }




    public function listOfUsersView()
    {
        $userModel = new \App\Models\User();
        $userModel->checkSession();
        $session = session();
        $data['users'] = json_decode(json_encode($userModel->getAllUsers()), true);
        return view('/admin/list_of_users',$data);
    }
    



}

