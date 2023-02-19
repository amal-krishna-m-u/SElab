<?php

namespace App\Models;

use CodeIgniter\Model;

class Usercat extends Model
{
    protected $table = 'usercat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['userid', 'catid'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'userid');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'catid');
    }

    public function categories()
{
    return $this->belongsToMany('App\Models\Category', 'usercat');
}

public function addCategory($category_id)
{
    $this->categories()->attach($category_id);
}

public function removeCategory($category_id)
{
    $this->categories()->detach($category_id);
}




}

