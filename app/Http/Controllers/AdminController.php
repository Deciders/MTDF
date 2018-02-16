<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DeviceType;
use App\Http\Controllers\DeviceTypeController;
use App\Models\Device;
use Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\NewDeviceType;

class AdminController extends DeviceTypeController
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    	public function index(){

        $allItems= DeviceType::all();

         return view('Admin.home',compact('allItems'));
       // return response()->json(['allitem'=>$allItems],200);

    }

    public function create()

    {		 return view('Admin.create');
        	//app('App\Http\Controllers\PrintReportController')->getPrintReport();

      }


      public function store(Request $request)
    {
           $item = new DeviceType();
          $item->name = $request->input('name');
          $item->ram = $request->input('ram');
          $item->version = $request->input('version');
          $item->memory = $request->input('memory');
          $item->	screen_resolution = $request->input('screen_resolution');
          $item->	description = $request->input('description');
          $item->	os = $request->input('os');
        $item->	imgurl = $request->input('imgurl');
          $item->save();
           $thisDevice = DeviceType::findOrFail($item->id);
           $this->sendEmail($thisDevice);

           return redirect('admin/admin/create');
    }

  // Sent Email When Device type Is Created

    public function sendEmail($thisDevice){
        $Uemails = DB::table('users')->pluck('email');

        Mail::to($Uemails)->send(new NewDeviceType($thisDevice));

    }

    public function storedevice(Request $request)
    {


        $dtype = Device::create([
            'device_type_id'=>$request->input('device_type_id'),
            'id'=>$request->input('id'),
            'added_date' => $request->input('date'),
            'state' => $request->input('state'),
            'name' => $request->input('name'),
            'macAddres' => $request->input('macAddres'),
            'availability' => 1,


        ]);

        return redirect('admin');
    }



        public function destroy($id)
    {
        $item = DeviceType::find($id);
        $item->delete();
        session()->flash('message','Delete Successfully'); 
        return redirect('/admin');
    }

    
     
     
}
