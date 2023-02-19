<?php
namespace App\Models;
//this class is for managing the application categories

use CodeIgniter\Model;

class Applicationcat extends Model
{
    protected $table = 'applicationcat';
    protected $primaryKey = 'id'; // Primary key of the applicationcat table
    protected $allowedFields = ['appid', 'catid'];

    public function __construct()
    {
        parent::__construct();
        $this->appModel = new Application();
        $this->catModel = new Category();
    }

    // Example function to get application details along with category name
    public function getApplicationDetails($id)
    {
        $appDetails = $this->appModel->find($id);
        $category = $this->catModel->find($appDetails['catid']);

        $result = [
            'appname' => $appDetails['name'],
            'category' => $category['catname'],
            'url' => $appDetails['url'],
            'rating' => $appDetails['rating'],
            'platform' => $appDetails['platform'],
            'description' => $appDetails['description']
        ];

        return $result;
    }

    // Add additional methods for the Applicationcat model here
}
