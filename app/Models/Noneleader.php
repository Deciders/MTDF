<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noneleader extends Model
{
    protected $table = 'noneleaders';

    //there is a disjoint with User . we implement as a one to one relationship
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //many to many relationship with Project
    public function projects()
    {
        return $this->belongsToMany('App\Models\Project', 'project_noneleaders', 'project_id','noneleader_id')->withTimestamps();
    }

}
