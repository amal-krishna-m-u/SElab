<?php 
//this is the controller for the admin login page 
namespace App\Controllers;

use App\Models\AdminModel;


class Admin extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|min_length[3]|max_length[20]',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[username,password]',
            ];
           
            
            $errors = [
                'password' => [
                    'validateUser' => 'Username or Password don\'t match'
                ]
            ];
        }
        return view('admin', $data);
    }
     //validate user is not a rule make it a rule 
    protected function validateUser(string $str, string $fields, array $data)
    {
        $model = new AdminModel();
        $user = $model->where('username', $data['username'])
            ->first();
        if (!$user) {
            return false;
        }
        return password_verify($data['password'], $user['password']);
    }


    private function setUserSession($user)
    {
        
        $data = [
            'id' => $user['id'],
            'username' => $user['username'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }
    public function dashboard()
    {
        $data = [];
        if (session()->get('isLoggedIn')) {
            return view('dashboard', $data);
        }
        return redirect()->to('/Admin');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/Admin');
    }
    public function insert()
    {
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|min_length[3]|max_length[20]',
                'password' => 'required|min_length[8]|max_length[255]',
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new AdminModel();
                $newData = [
                    'username' => $this->request->getVar('username'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successfully Inserted');
                return redirect()->to('/Admin/dashboard');
            }
        }
        return view('insert', $data);
    }

    public function update()
    {
        $data = [];
        helper(['form']);
        $model = new AdminModel();
        $id = $this->request->getVar('id');
        $data['admin'] = $model->where('id', $id)->first();
        if ($this->request->getMethod() == 'post') {
            $input = $this->request->getVar();
            $rules = [
                'username' => 'required|min_length[3]|max_length[20]',
                'password' => 'required|min_length[8]|max_length[255]',
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new AdminModel();
                $newData = [
                    'id' => $id,
                    'username' => $this->request->getVar('username'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successfully Updated');
                return redirect()->to('/admin/dashboard');
            }
        }
        return view('update', $data);
    }
}

//this is the model for admin page ,for storing details in the db


// Path: review\app\Models\AdminModel.php

