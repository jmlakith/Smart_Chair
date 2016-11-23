<?php

namespace App\Http\Controllers;

use App\Chair;
use Illuminate\Http\Request;

class ChairController extends Controller
{
    public function captureSensorDetails(Request $req)
    {
        $sensorData=$req->get("sensorString");

        $dataArray=explode(",",$sensorData);

        $chair = new Chair();
        $chair->cell1=$dataArray[0];



        if( $chair->save()){

            return true;

        }


    }

    public function retriveRule()
    {

    }
}
