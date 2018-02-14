<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;
use App\User;
use Mail;
use App\Mail\reservationStart;


class sentNotification extends Controller
{
    public function CronReservation(Request $request){
           $allReservation= Reservation::all();
           $arrlength =count($allReservation);
          // return response()->json(['allitem'=>$allReservation,'Count'=>$arrlength],200);

        for($i=0;$i<$arrlength;$i++){
           //get one start date of reservation
           $start_date = $allReservation[$i]->	start_date;
           $explodearr =explode('-',$start_date);
           $std= $explodearr[1].'-'.$explodearr[2];
          //return response()->json(['date'=> $std],200);

          //get today date

           $today = date("Y-m-d");
           $tdArray = explode('-', $today);
           $td = $tdArray[1] . '-' . $tdArray[2];
           //return response()->json(['allitem'=>$allReservation,'date'=> $td],200);

           // get tomorrow date n month
           $tw_date = date('Y-m-d', strtotime($today .' +1 day'));
           $ndArray = explode('-', $tw_date);
           $nd = $ndArray[1] . '-' . $ndArray[2];
           //return response()->json(['date'=> $nd],200);

       if($std==$nd){


           $res_user = DB::select("SELECT id,user_id FROM `reservations` WHERE start_date='" .  $start_date . "'");
           $id =  $res_user[$i-1]->id;

           $thisReservation = Reservation::find($id);

           $this->sendEmail($thisReservation);
          //return response()->json(['email'=> $thisReservation],200);

       }



       }



    }

    public function sendEmail($thisReservation){
           //$id=  $thisReservation[0]->user_id;
        $user_email = User::find($thisReservation->user_id)->email;

        Mail::to( $user_email)->send(new reservationStart($thisReservation));

    }



}
