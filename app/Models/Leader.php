<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $table = 'leaders';
    protected $fillable = ['gname','users_id'];
    //there is a disjoint with User . we implement as a one to one relationship
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // one to many relationship with Leader
    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }
}
