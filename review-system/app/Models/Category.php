<?php 
namespace App\Models;
//this is the model for the category table
use CodeIgniter\Model;
use CodeIgniter\Log\Logger;
//$log = service('logger');



class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'catid'; // Replace 'id' with the primary key field of your table
    protected $allowedFields = ['catname']; // Replace with the field names of your table that you want to allow for updates
    





}

?>