<?php
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Log\Logger;
//$log = service('logger');

class Application extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'catid'; // Replace 'id' with the primary key field of your table
    protected $allowedFields = ['catname']; // Replace with the field names of your table that you want to allow for updates
    
      



























    public function listCategory($id)
    {//not in use now 
        /*
        $conn = mysqli_connect("localhost","root","","review_system");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            // Get the ids of the interests that the user has
            $sql = "SELECT catid FROM usercat WHERE userid=$id";
            $result = mysqli_query($conn,$sql);
            if($result){
                foreach($result as $cat){ 
                    $i= $cat['catid'];
                    $temp="INSERT INTO tempcat ( usercatid) VALUES ($i)";
                    $run=mysqli_query($conn,$temp);
                    if(!$run) echo"error";
                }
            } else {
                //log and warning log here 
                $log=service('logger');
                $log->error('Error in fetching cat id from usercat table');
            }



            $db = db_connect();
            $builder = $db->table('category');
            $sql_interest = "SELECT * FROM category WHERE catid NOT IN (SELECT usercatid FROM tempcat)";
            $result = $db->query($sql_interest)->getResult();
            $data = array(
                'result' => $result
            );






            // Get the interests that the user does not have
           // $sql_interest1 = "SELECT * FROM category WHERE catid NOT IN (SELECT usercatid FROM tempcat)";
            //$result = mysqli_query($conn,$sql_interest1);
            //$sql_interest = "SELECT * FROM cat EXCEPT ".$sql_interest1."";
            //completed here line number 86

            //$result = mysqli_query($conn,$sql_interest);
            if($result)
            {
               
                return $result;
            } else {
                //log and warning log here 
                $log=service('logger');
                $log->error('Error in fetching cat id from usercat table');
            }
        }
    }
    */


    }


}