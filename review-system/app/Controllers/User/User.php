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
        $data = [
            'name' => $this->request->getVar('name'),
            'dob' => $this->request->getVar('dob'),
            'password' => $this->request->getVar('password'),
        ];
        $userModel = new \App\Models\User();
        $userModel->updateDetails($id,$data);
        return redirect()->to('/user/dashboard');

    }

}

