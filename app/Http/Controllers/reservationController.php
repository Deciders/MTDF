<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Reservation;
use\App\Models\Device;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;
use Illuminate\Support\Facades\DB;


class reservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       // $user = Auth::id();
      //  return response()->json(['allitem'=>$user],200);


     $item= Reservation::all();
     return response()->json(['allitem'=>$item],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


                $dtype = Reservation::create([

                    'start_date'=>$request->input('start_date'),
                    'end_date'=>$request->input('end_date'),
                    'device_id' => $request->input('device_id'),
                    'user_id'=>  Auth::id(),
                    // $user = DB::table('devices')->where('device_type_id',$request->input('device_id') )->first(),

                    $item= Device::find($request->input('device_id')),
                    $item->availability =0,
                    $item->save()
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
    {
        //
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
        //
    }
}
