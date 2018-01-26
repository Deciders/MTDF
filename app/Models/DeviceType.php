<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceType extends Model
{
    protected $table = 'device_type';

    protected $fillable= ['name'];


    // one to many relationship with Devices
    public function devices()
    {
        return $this->hasMany('App\Models\Device');
    }
}
