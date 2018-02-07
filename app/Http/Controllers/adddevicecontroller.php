<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\device;

class adddevicecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = device::all();
        return view('Admin.home',compact('devices'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.create'); 
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $device = new device;
           $this->validate($request,[
            'version'=>'required',
             'type'=>'required',
              'os'=>'required',
               'ram'=>'required',
                'memory'=>'required',
                 'resalution'=>'required',
                  'description'=>'required',
                  // 'date'=>'required',
              ]);
           $device->version = $request->version;
           $device->type = $request->type;
           $device->os = $request->os;
           $device->ram = $request->ram;
           $device->memory = $request->memory;
           $device->resalution = $request->resalution;
           $device->description = $request->description;
           $device->date = $request->date;
           $device->save();
           return redirect('admin');
       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Admin.addAdmin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // 
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        $item = device::find($id);
        $item->delete();
        session()->flash('message','Delete Successfully'); 
        return redirect('/admin');
    }
}
