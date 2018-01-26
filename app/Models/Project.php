<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';


    //many to one relationship with Project
    public function leaders()
    {
        return $this->belongsTo('App\Models\Leader');
    }

    //many to many relationship with Noneleader
    public function noneleaders()
    {
        return $this->belongsToMany('App\Models\Noneleader', 'project_noneleaders', 'noneleader_id','project_id')->withTimestamps();
    }

    // one to many relationship with Testcase
    public function testcases()
    {
        return $this->hasMany('App\Models\Testcase');
    }
}
