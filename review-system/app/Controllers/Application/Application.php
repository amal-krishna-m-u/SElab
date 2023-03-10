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

    public function rateView(){
        //take app id value form the link   
        $name = $_GET['name'];
        $userModel = new \App\Models\User();
        $userModel->checkSession();
        //take id value from the user session 
        $session = session();
        $id = $session->get('user');
    //redirect to the review page
        return view('/application/rate',['name' => $name]);
        

    }
    Public function rate(){
        $userModel = new \App\Models\User();
        $userModel->checkSession();
        //take id value from the user session 
        $session = session();
        $id = $session->get('user');
        //fetch the data from the form select_category.php ,values includes the catid
        $data = $_POST['rating'];
        $appid = $_POST['appid'];
        $reviews="No reviews";
        //insert values to the database from the form ,insert into usercat ,insert the catid and userid 

        $rating = new \App\Models\Rating();
 $out = $rating->inputRating($id, $appid, $rating, $review);
  
if($out == 1)
        return redirect()->to('/User/dashboard');

    }


    public function reviewView()
    {
        //take app id value form the link
        $name = $_GET['name'];
        $userModel = new \App\Models\User();
        $userModel->checkSession();
        //take id value from the user session 
        $session = session();
        $id = $session->get('user');
    //redirect to the review page
        
        return view('/application/review',['name' => $name]);



    }
    public function review(){
        $userModel = new \App\Models\User();
        $userModel->checkSession();
        //take id value from the user session 
        $session = session();
        $id = $session->get('user');
        //fetch the data from the form select_category.php ,values includes the catid
        $data = $_POST['review'];
        $appid = $_POST['appid'];
        $rating=0;
        //insert values to the database from the form ,insert into usercat ,insert the catid and userid 
 $rating = new \App\Models\Rating();
 $out = $rating->inputRating($id, $appid, $rating, $review);
  
if($out == 1)
        return redirect()->to('/User/dashboard');

    }




    public function moreInfoView()
{
    //take app id value form the link
    $appid = $_GET['appid'];
    $userModel = new \App\Models\User();
    $userModel->checkSession();
    //take id value from the user session 
    $session = session();
    $id = $session->get('user');

    $applicationModel = new \App\Models\Application();

    $application = $applicationModel->where('appid', $appid)->first();

    //retrieve reviews and ratings for the specific application
    $reviews = $applicationModel->getReviewsAndRatings($appid);

    return view('/application/moreinfo', [
        'application' => $application,
        'reviews' => $reviews
    ]);
}

    public function moreInfo(){
        $userModel = new \App\Models\User();
        $userModel->checkSession();
        //take id value from the user session 
        $session = session();
        $id = $session->get('user');
        //fetch the data from the form select_category.php ,values includes the catid
        $data = $_POST['review'];
        $appid = $_POST['appid'];
        //insert values to the database from the form ,insert into usercat ,insert the catid and userid 

        $log = service('logger');
        $log->debug(sprintf("Data passed to the usercat to insert data recived  : %s", json_encode($data,$id)));

        $db = \Config\Database::connect();

        $db->table('application')->where('appid', $appid)->update(['review' => $data]);
        
        $db->table('tempcat')->truncate();

        return redirect()->to('/User/dashboard');
    }






}
