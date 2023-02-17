<?php

namespace App\Controllers\User;
use CodeIgniter\Log\Logger;

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
    
    public function editDetailsView()
    {
        return view('/user/edit_details');
    }
    public function dashboardview()
    {
        $session = session();
        //check whether session is set for user or not if not don't allow to access the dashboard
        if($session->get('user'))
        {
            $id = $session->get('user');
            $userModel = new \App\Models\User();
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


    public function editDetails()
    {

        $session = session();
        $id = $session->get('user');
        //use log message to store the id of the user and the data that are modified
    
        $data = [
            'name' => $this->request->getVar('name'),
            'dob' => $this->request->getVar('dob'),
            'password' => $this->request->getVar('password'),
        ];
        $this->logMessage($data,"data passed to edit details ");
        $userModel = new \App\Models\User();
        $userModel->updateDetails($id,$data);
        return redirect()->to('/user/dashboard');

    }


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

}

