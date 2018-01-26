<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    //there is a disjoint with User . we implement as a one to one relationship
    public function user()
    {
        return $this->belongsTo('App\Models\Admin');
    }
}
