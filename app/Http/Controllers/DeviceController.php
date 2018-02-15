<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\DB;
class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item= Device::all();
        return response()->json(['allitem'=>$item],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        return response()->json(['message'=>'success'],201);

    }






    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {      $item = DB::table('devices')->where('device_type_id', $id)->get();

           if($item==null){
               return response()->json(['msg'=>'item not founr'],200);
           }
           return response()->json(['allitem'=>$item],200);


//        $item= Device::find($id);
//        if(!$item){
//            return response()->json(['msg'=>"Item not found"],404);
//        }else{
//            $Item= Device::find($id);
//            return response()->json(['allitem'=>$Item],200);
//        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item= Device::find($id);
        if(!$item){
            return response()->json(['msg'=>"Item not found"],404);
        }else{
            $item->device_type_id = $request->input('device_type_id');
            $item->added_date = $request->input('added_date');
            $item->state = $request->input('state');
            $item->id = $request->input('id');
            $item->	macAddres = $request->input('macAddres');
            $item->	availability = $request->input('availability');
            $item->save();
            return response()->json(['message'=>$item],200);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item= Device::find($id);
        if(!$item){
            return response()->json(['msg'=>"Item not found"],404);
        }
        $item->delete();
        return response()->json(['msg'=>"Item Deleted"],201);
    }
}
