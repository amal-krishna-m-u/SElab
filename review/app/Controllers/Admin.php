<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class Admin extends Controller
{
   

    public function logout()
    {  
        if(session('id') == NULL){
            return redirect()->to(base_url('admin/'));
        }
        session()->start();
    
        // destroy the session data for the current admin
        session_destroy();

        // redirect the admin back to the login page
       return redirect()->to(base_url('admin/'));
    }
    public function update()
    {
        $user_id = session('id');
        if(empty($user_id)){
            return redirect()->to(base_url('admin/'));
        }
        if ($this->request->getMethod() == 'post') {
            $model = new AdminModel();
            $id = $this->request->getPost('id');
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            if (!empty($username) && !empty($password)) {
                $data = [
                    'id' => $id,
                    'username' => $username,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                ];
                log_message('debug', 'id: '.$id.' username: '.$username.' password: '.$password);
                $model->update($data, ['id' => $user_id]);
                return redirect()->to(base_url('admin/dashboard'));
            }
        }
    }
    
    
    public function up()
    { 
        if(session('id') == NULL){
            return redirect()->to(base_url('admin/'));
        }
        return view('admin/update');

    }



    public function delete($id = null)
    {
        if(session('id') == NULL){
            return redirect()->to(base_url('admin/'));
        }
        $model = new AdminModel();
        $data['admin'] = $model->where('id', $id)->delete();
        return redirect()->to(base_url('admin/dashboard'));
    }
    public function edit($id = null)
    {
        $model = new AdminModel();
        $data['admin'] = $model->where('id', $id)->first();
        return view('admin/edit', $data);
    }
    public function dashboard()
    {
        if(session('id') == NULL){
            return redirect()->to(base_url('admin/'));
        }
        $model = new AdminModel();
        $data['admins'] = $model->findAll();
        return view('admin/dashboard', $data);
    }



    public function index()
    {
        return view('admin/login');
    }

    public function login()
    {
        session()->start();
        //username cannot be empty and password cannot be empty
        if (!$this->validate([
            'username' => 'required',
            'password' => 'required'
        ])) {
            return view('admin/login', [
                'error' => 'Invalid username or password'
            ]);
        }
        
        $model = new AdminModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $admin = $model->where('username', $username)->first();

        if (!$admin) {
            return view('admin/login', [
                'error' => 'Invalid username or password'
            ]);
        }

        if (!password_verify($password, $admin['password'])) {
            return view('admin/login', [
                'error' => 'Invalid username or password'
            ]);
        }
       
        session()->set([
            'id' => $admin['id'],
            'username' => $admin['username']
        ]);

        return redirect()->to(base_url('admin/dashboard'));
    }

    public function add()
    {
        if(session('id') == NULL){
            return redirect()->to(base_url('admin/'));
        }
        return view('admin/add');
    }




    public function insert()
    {

        $model = new AdminModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];
        $model->insert($data);
        return redirect()->to(base_url('admin/dashboard'));
    }

  
}
