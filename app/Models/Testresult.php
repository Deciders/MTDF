<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testresult extends Model
{
    protected $table = 'testresults';

    // one to one relationship with Testcase
    public function projects()
    {
        return $this->belongsTo('App\Models\Testcase');
    }
}
