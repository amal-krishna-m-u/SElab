<?php
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Log\Logger;
//$log = service('logger');



class Admin extends Model
{
    protected $table = 'admindetails';
    protected $primaryKey = 'id'; // Replace 'id' with the primary key field of your table
    protected $allowedFields = ['name','email', 'status', 'password']; // Replace with the field names of your table that you want to allow for updates
    


    //save is to save the user details to the database
    public function saveDetails($data)
    {
        $builder = $this->db->table('admindetails');
        $builder->insert($data);
        return true;
    }
    public function checkadmin($email, $password)
    {
        $log = service('logger');
        $db =mysqli_connect("localhost","root","","review_system");
        if(!$db)
        {
        return false;
        }
           $sql = "SELECT * FROM admindetails WHERE email='$email' AND password='$password'AND status='1'";
            $result = mysqli_query($db,$sql);

    
        $log->debug('SQL Query: '.$sql);
    
        $admin = $result->fetch_assoc();
    
    
        if (!empty($admin)) {
            $session = session();
            //destory session and values stored in it 
            //$session->destroy();
            //set the session with the user id

            $session->set('admin', $admin['id']);
            $log = service('logger');    $log->debug(sprintf("query result: %s", json_encode($result)));
            return true;
        } else {
            $log->error('admin account does not exist', ['email' => $email, 'password' => $password ]);
            return false;
        }
    }
    
//create a function to check whether the session is set or not if not redirect to the login page  use isset() function to check whether the session is set or not
    public function checkSession()
    {
        $session = session();
    
        if(!$session->get('admin'))
        {       
            return redirect()->to('/admin/login');
        }
    }
    public function getDetails($id)
    {   
    
        $builder = $this->db->table('admindetails');
        $builder->where('id', $id);
        $query = $builder->get();
        $result = $query->getResult();
    


    return $result;
    }
}