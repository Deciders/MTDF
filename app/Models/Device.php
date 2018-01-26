<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = 'devices';

    protected $fillable = ['state','added_date','macAddres','availability', 'device_type_id'];

    //many to one relationship with DataType
    public function deviceType()
    {
        return $this->belongsTo('App\Models\DeviceType');
    }
}
