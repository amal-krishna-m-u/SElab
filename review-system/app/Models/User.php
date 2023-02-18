<?php
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Log\Logger;
//$log = service('logger');


class User extends Model
{
    protected $table = 'userdetails';
    protected $primaryKey = 'id'; // Replace 'id' with the primary key field of your table
    protected $allowedFields = ['name','email', 'dob', 'password']; // Replace with the field names of your table that you want to allow for updates



    //save is to save the user details to the database
    public function saveDetails($data)
    {
        $builder = $this->db->table('userdetails');
        $builder->insert($data);
        return true;
    }
    public function checkuser($email, $password)
    {
        $log = service('logger');
        $builder = $this->db->table('userdetails');
        $builder->where('email', $email);
        $builder->where('password', $password);
    
        $sql = $builder->getCompiledSelect();
        $log->debug('SQL Query: '.$sql);
    
        $result = $builder->get()->getResult();
    
        if (!empty($result)) {
            $user = $result[0];
            $session = session();
            $session->set('user', $user->id);
            $msg=$user->id;
            $log->debug('User id passed to check user', ['email' => $email, 'password' => $password, 'user_id' => $user->id ]);
            return true;
        } else {
            $log->error('User account does not exist', ['email' => $email, 'password' => $password ]);
            return false;
        }
    }
    
//create a function to check whether the session is set or not if not redirect to the login page  use isset() function to check whether the session is set or not
    public function checkSession()
    {
        $session = session();
    
        if(!$session->get('user'))
        {       
            return redirect()->to('/user/login');
        }
    }
    public function getDetails($id)
    {   
    
        $builder = $this->db->table('userdetails');
        $builder->where('id', $id);
        $query = $builder->get();
        $result = $query->getResult();
    
  

    return $result;
    }


    public function updateDetails($id,$data)
    {
        $builder = $this->db->table('userdetails');
        $builder->where('id', $id);
        $builder->update($data);
        return true;
    }


    //delete user to delete the user record form the database
    public function deleteUser($id)
    {

        $builder = $this->db->table('userdetails');
        $builder->where('id', $id);
        $builder->delete();
        return true;
    }








}





?>