<?php

namespace App\Controllers\User;

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


    public function editDetails()
    {

        $session = session();
        $id = $session->get('user');
        //use log message to store the id of the user and the data that are modified
        $this->logMessage($id,"Id passed to edit details ");
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

