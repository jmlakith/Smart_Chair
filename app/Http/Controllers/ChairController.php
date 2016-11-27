<?php

namespace App\Http\Controllers;

use App\Chair;
use App\PostureRecord;
use App\Rule;
use Illuminate\Http\Request;

class ChairController extends Controller
{
    public function captureSensorDetails(Request $req)
    {
       // $sensorData=$req->get("sensorString");
        $sensorData="5,14,14,30,45,45,45,12,chair-16";

        $dataArray=explode(",",$sensorData);


        $sonar=$dataArray[0];
        $sharpIRLeft=$dataArray[1];
        $sharpIRRight=$dataArray[2];

        $loadCell1=$dataArray[3];
        $loadCell2=$dataArray[4];
        $loadCell3=$dataArray[5];
        $loadCell4=$dataArray[6];
        $loadCell5=$dataArray[7];

        $chairId=$dataArray[8];



        //for now just use direct values from sensor, later calculate overall percentage for a sensor.

        $rules = Rule::all();

        foreach($rules as $rule){


            echo "Sonar ".$sonar."<br> >>> min :- ".$rule->min_sonar."<.> max :- ".$rule->max_sonar."<br>";


            if(!($sonar>$rule->min_sonar && $sonar<=$rule->max_sonar)){
                            continue;
            }

            if(!($loadCell1>$rule->min_load_cell1 && $loadCell1<=$rule->max_load_cell1)){
                            continue;
            }

            echo "The correct Rule is ".$rule->ruleName;


            //Save fields;
            $postureRecord = new PostureRecord();
            $postureRecord->chairId = $chairId;
            $postureRecord->idRule = $rule->id;
            $postureRecord->save();


        }


    }


}
