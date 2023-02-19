<?php

namespace App\Controllers\Application;
use CodeIgniter\Log\Logger;

use App\Controllers\BaseController;

class Application extends BaseController
{
    /**
     * Function for redirecting to the admin login page
     */
    public function listapplicationview()
    {
        return view('/application/listApplication');
    }

    /**
     * Function for redirecting to the admin register page
     */
    public function registerview()
    {
        return view('/admin/register');
    }

    /**
     * Function for redirecting to the admin dashboard page
     */
    public function selectCategory()
    {
        $userModel = new \App\Models\User();
        $userModel->checkSession();
        //take id value from the user session 
        $session = session();
        $id = $session->get('user');
        //fetch the data from the form select_category.php ,values includes the catid
        $data = $_POST['catid'];
        //insert values to the database from the form ,insert into usercat ,insert the catid and userid 

        $log = service('logger');
        $log->debug(sprintf("Data passed to the usercat to insert data recived  : %s", json_encode($data,$id)));

        $db = \Config\Database::connect();

        foreach($data as $dat)
        {
            $db->table('usercat')->insert(['userid' => $id, 'catid' => $dat]);
        }
        
        $db->table('tempcat')->truncate();

        return redirect()->to('/User/dashboard');
    }

    public function applicationLeaderboard()
    {
        $userModel = new \App\Models\User();
        $userModel->checkSession();
        //take id value from the user session 
        $session = session();
        $id = $session->get('user');
    
       
    
        $data = $this->request->getVar('category');
    
        $db = db_connect();
        $builder = $db->table('application');
        
        $builder->select('application.url,application.rating,application.name,application.platform,application.appid');
        $builder->join('applicationcat', 'application.appid = applicationcat.appid');
        $builder->where('applicationcat.catid', $data);
  
        // add search query to the query builder
      
            
   
    
        $builder->orderBy('application.rating DESC');
    
        // set limit and offset for pagination
     
    
        $query = $builder->get();
        $data = $query->getResultArray();
      
    
        if ($this->request->isAJAX()) {
            // load the view for infinite scrolling
            return view('application/load_more_apps', ['data' => $data]);
        } else {
            // load the view for normal page load
            return view('application/leaderboard', ['data' => $data]);
        }
    }
    public function leaderboardSearch(){
        
        $userModel = new \App\Models\User();
        $userModel->checkSession();
        //take id value from the user session 
        $session = session();
        $id = $session->get('user');
    
        $db = db_connect();
        $builder = $db->table('application');

        $search = $this->request->getVar('search');

        $builder->select('application.url,application.rating,application.name,application.platform,application.appid');
            
        $builder->like('application.name', $search);
        $builder->orderBy('application.rating DESC');
        $query = $builder->get();
        $data = $query->getResultArray();
        return view('application/leaderboard', ['data' => $data]);
    }

    public function selectCategoryView()
    {
        $userModel = new \App\Models\User();
        $userModel->checkSession();
        //take id value from the user session 

        return view('/application/select_category');
    }

    







}
