<?php
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Log\Logger;
//$log = service('logger');

class Application extends Model
{
    protected $table = 'application';
    protected $primaryKey = 'appid'; // Replace 'id' with the primary key field of your table
    protected $allowedFields = ['name','url','rating','platform','description']; // Replace with the field names of your table that you want to allow for updates
    
      

    public function getReviewsAndRatings($appid)
    {
        $db = db_connect();
        $builder = $db->table('rating');
        $builder->select('rating.rating, rating.review, userdetails.name');
        $builder->join('userdetails', 'rating.userid = userdetails.id');
        $builder->where('rating.appid', $appid);
        $query = $builder->get();
    
        return $query->getResultArray();
    }
    
    public function getApplications() {
        $db = db_connect();
        $builder = $db->table('application');
        $query = $builder->get();
    
        return $query->getResultArray();
    }
    public function addApplication($data)
    {
        $db = db_connect();
        $builder = $db->table('application');
        $builder->insert($data);
        return $db->insertID();
        
    }
    




























}