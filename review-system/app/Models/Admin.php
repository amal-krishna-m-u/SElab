<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Log\Logger;

class Admin extends Model
{
    protected $table = 'admindetails';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'status', 'password'];


    public function checkadmin($email, $password)
    {
        $query = $this->where('email', $email)
                      ->where('password', $password)
                      ->where('status', '1')
                      ->get();

        $log = service('logger');
        $log->debug('SQL Query: ' . $this->getLastQuery());

        $admin = $query->getRow();

        if (!empty($admin)) {
            $session = session();
            $session->set('admin', $admin->id);

            $log->debug('Query result: ' . json_encode($admin));

            return true;
        } else {
            $log->error('Admin account does not exist', ['email' => $email, 'password' => $password]);
            return false;
        }
    }

    public function checkSession()
    {
        $session = session();
        if (!$session->get('admin')) {
            return redirect()->to('/admin/login');
        }
    }

    public function saveDetails($data)
    {
        // Make sure 'password' field is not null
        if (!isset($data['password']) || $data['password'] === null) {
            return false;
        }
    
        $builder = $this->db->table('admindetails');
        $builder->insert($data);
        return true;
    }




    
    public function getDetails($id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);
        $query = $builder->get();

        return $query->getResult();
    }




    
}
