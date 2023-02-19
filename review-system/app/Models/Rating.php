<?php
namespace App\Models;
//this model class is for managing ratings

use CodeIgniter\Model;

class Rating extends Model
{
    protected $table = 'rating';
    protected $primaryKey = 'ratingid';
    protected $allowedFields = ['userid', 'appid', 'rating', 'review'];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }

    // Define the relationship with the Application model
    public function application()
    {
        return $this->belongsTo(Application::class, 'appid');
    }

    // Fetch all the ratings and reviews for a given user
    public function getRatingsByUser($userId)
    {
        return $this->select('*')->where('userid', $userId)->findAll();
    }

    // Calculate the average rating for all the listed applications and update the rating column
    public function updateAverageRatings()
    {
        $applications = (new Application())->findAll();

        foreach ($applications as $application) {
            $ratings = $this->select('AVG(rating) as avg_rating')->where('appid', $application['appid'])->get()->getRowArray();

            $applicationModel = new Application();
            $applicationModel->update($application['appid'], ['rating' => $ratings['avg_rating']]);
        }
    }


    public function inputRating($userId, $appId, $rating, $review)
    {
        $data = [
            'userid' => $userId,
            'appid' => $appId,
            'rating' => $rating,
            'review' => $review
        ];

        $this->insert($data);
    }
}
