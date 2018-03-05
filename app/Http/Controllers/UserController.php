<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use App\Models\DeviceType;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showDevice(){
        $allItems= DeviceType::all();

        return view('user.viewdevice',['devietypes' => $allItems]);
    }




    public function reservation(){
        return view('user.reservation');
    }

    public function book($id)
    {

        $allItems= Device::where('device_type_id', $id)->get();
         // return response()->json(['allitem'=>$allItems],200);
       return view('user.partials.book',['devices'=>$allItems]);

    }
}
