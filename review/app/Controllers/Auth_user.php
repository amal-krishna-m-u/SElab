<?php
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
//this is th controller for the user login and registration.In this we have to check whether there is an existing user or not.while 
//registering the user we have to check whether the user is already registered or not.if the user is already registered then we have to
//redirect the user to the login page.Inn login page we have to check whether the user is registered or not.if the user is not registered
//then we have to redirect the user to the registration page.if the user is registered then we have to check whether the password is correct
//or not.if the password is correct then we have to redirect the user to the dashboard page.
//if the password is incorrect then we have to redirect the user to the login page.
//we need to create methods for login,register,logout.while registering user need to input username and password,email id and dob ,
//and in the second step user need to select the category under which he need to view the leaderboard of the applications and these
//categories are stored in the database and admin can add or delete categories.when showing categories we have to show the categories
//in the form of checkbox and user can select the categories in which he need to view the leaderboard of the applications.
//we have to show categories which are not selected by the user in the form of checkbox and user can select the categories in which he
//need to view the leaderboard of the applications.
//while login we have to check whether the user is registered or not.if the user is not registered then we have to redirect the user to
//the registration page.if the user is registered then we have to check whether the password is correct or not.if the password is correct
//we have compare user email and password ,user email is unique for each and every user in the system and we have to check whether the
//user is registered or not.if the user is not registered then we have to redirect the user to the registration page.if the user is


// now it's the time to create the methods for login,register,logout.
//we have to maintain the session for the user .no user can access the dashboard page without login.

class Auth_user extends BaseController
{
    public function login()
    {
        
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id' => $data['id'],
                    'email' => $data['email'],
                    'logged_in' => TRUE
                ];
                session()->set($ses_data);
                return redirect()->to(base_url('user/dashboard'));
            } else {
                session()->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url('/1'));
            }
        } else {
            session()->setFlashdata('msg', 'Email not Found');
            return redirect()->to(base_url('/1'));
        }
    }
    public function register()
    {
        $model = new UserModel();
        $id = $this->request->getVar('id');
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
       
        $data = $model->where('email', $email)->first();
        if ($data) {
            session()->setFlashdata('msg', 'Email already registered');
            return redirect()->to(base_url('/1'));
        } else {
            $newData = [
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
              
            ];
            $model->save($newData);
            session()->setFlashdata('msg', 'Successfully Registered');
            return redirect()->to(base_url('/1'));
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/1'));
    }

    public function index()
    {
      
        
        return view('/auth_user/loginpage');
    }

}

// Path: review\app\Controllers\Auth_user

