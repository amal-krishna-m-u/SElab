<?php


namespace App\Models;

use CodeIgniter\Model;

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
    //checkuser is to check whether a user exists or not for login purpose and if a user exits manage session variables
    public function chechuser($email,$password)
    {
        $builder = $this->db->table('userdetails');
        $builder->where('email', $email);
        $builder->where('password', $password);
        $query = $builder->get();
        //pass a session variable if user exits create a session user variable and pass the user id 
        if($query->getResult())
        {
            $session = session();
            $session->set('user', $query->getResult()[0]->id);
            return true;
        }
        else
        {
            return false;
        }
        
    }

    public function getDetails($id)
    {   
    
        $builder = $this->db->table('userdetails');
        $builder->where('id', $id);
        $query = $builder->get();
        return $query->getResult();
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