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
        $db =mysqli_connect("localhost","root","","review_system");
        if(!$db)
        {
        return false;
        }
           $sql = "SELECT * FROM userdetails WHERE email='$email' AND password='$password'";
            $result = mysqli_query($db,$sql);
    
        $log->debug('SQL Query: '.$sql);
    
        $user = $result->fetch_assoc();
    
    
        if (!empty($user)) {
            $session = session();
            //destory session and values stored in it 
            //$session->destroy();
            //set the session with the user id

            $session->set('user', $user['id']);
            $log = service('logger');    $log->debug(sprintf("query result: %s", json_encode($result)));
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
        $builder->where('id',$id);
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

        $log = service('logger');
        $log->debug('deleteUser() called'.$id);
    $db = mysqli_connect("localhost","root","","review_system");
    $sql = "DELETE FROM userdetails WHERE id='$id'";
    $result = mysqli_query($db,$sql);
    if($result){ 
    return true;
}
else{ 
        //log the sql query
        $log = service('logger');
        $log->debug('SQL Query: '.$builder->getCompiledDelete());
    }
}




public function getAllUsers()
{
    $builder = $this->db->table('userdetails');
    $query = $builder->get();
    $result = $query->getResult();
    return $result;
}






}






?>