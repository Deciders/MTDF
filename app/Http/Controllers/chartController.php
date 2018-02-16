<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\devices;
use App\users;
use DB;

class chartController extends Controller
{
    public function showChart(){

    	$devices = devices::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))

    				->get();

        $chart = Charts::database($devices, 'bar', 'morris')

			      ->title("Total Deices in Same Type")

			      ->elementLabel("Total Devices")

			      ->dimensions(350, 400)

			      ->responsive(false)

                  //->setColors(['#bbdefb' , '#0d47a1'])

			      ->groupByMonth(date('Y'), true);


                  // $users = users::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))

                  //   ->get();

                  // $chart1 = Charts::database($users, 'donut', 'morris')

                  // ->title("Total User Rgistation")

                  // ->elementLabel("Total Users")

                  // ->dimensions(350, 400)

                  // ->responsive(false)

                  // //->setColors(['#bbdefb' , '#0d47a1'])

                  // ->groupByMonth(date('Y'), true);

                  

        return view('chart',compact('chart'));
        // return view('chart',compact('chart1'));

    }
}
