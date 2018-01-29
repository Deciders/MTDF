<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeviceType;

class DeviceTypeController extends Controller
{
    public function createDeviceType(Request $request)
    {

      $item = new DeviceType();
        $item->name = $request->input('name');
        $item->ram = $request->input('ram');
        $item->version = $request->input('version');
        $item->memory = $request->input('memory');
        $item->	screen_resolution = $request->input('screen_resolution');
        $item->	description = $request->input('description');
        $item->	os = $request->input('os');
        $item->save();

        return redirect('admin');
        //return response()->json(['message'=>$item],201);
    }

     public function getDeviceType(){
       
        $allItems= DeviceType::all();
        return view('Admin.home',compact('allItems'));
       // return response()->json(['allitem'=>$allItems],200);

    }

    public function findDeviceType($id)
    {
        $item= DeviceType::find($id);
        if(!$item){
            return response()->json(['msg'=>"Item not found"],404);
        }else{
            $Item= DeviceType::find($id);
            return response()->json(['allitem'=>$Item],200);
        }
    }
    public function deleteDeviceType($id)
    {  
        $item = DeviceType::find($id);

        if(!$item){
            return response()->json(['msg'=>"Item not found"],404);
        }
        
        if(!$item){
            return response()->json(['msg'=>"Item not found"],404);
        }else{

            $item->delete();
            session()->flash('message','Delete Successfully'); 
            return redirect('admin/create');

        }



        //$item= DeviceType::find($id);
        
        //$item->delete();
        return response()->json(['msg'=>"Item Deleted"],201);
    }

    public function editDeviceType(Request $request,$id){

        $item= DeviceType::find($id);
        if(!$item){
            return response()->json(['msg'=>"Item not found"],404);
        }
        $item->name = $request->input('name');
        $item->ram = $request->input('ram');
        $item->version = $request->input('version');
        $item->memory = $request->input('memory');
        $item->	screen_resolution = $request->input('screen_resolution');
        $item->	description = $request->input('description');
        $item->	os = $request->input('os');
        $item->save();
        return response()->json(['message'=>$item],200);


    }


}




