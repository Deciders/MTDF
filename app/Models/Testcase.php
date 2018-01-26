<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testcase extends Model
{
    protected $table = 'testcases';


    // many to one relationship with Devices
    public function projects()
    {
        return $this->belongsTo('App\Models\Project');
    }

    // one to one relationship with Testresult
    public function testResult()
    {
        return $this->hasOne('App\Models\Testresult');
    }
}
