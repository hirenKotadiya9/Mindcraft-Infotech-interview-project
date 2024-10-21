<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\country_master;
use App\Models\state_master;
use App\Models\city_master;

class AjaxController extends Controller
{
    public function index(){
        $country = country_master::all();
        return view('ajax/ajax',array('country'=>$country));
    }

    public function getState(Request $request){
        $country_id = $request->post("country_id");
        $state = state_master::where('country_id', $country_id)->get();

        echo "<option value=''>-Select</option>";
        foreach($state as $v){
            echo "<option value='$v->id'>$v->state_name</option>";
        }
    }

    public function getCity(Request $request){
        $state_id = $request->post("state_id");
        $city = city_master::where('state_id', $state_id)->get();

        echo "<option value=''>-Select</option>";
        foreach($city as $v){
            echo "<option value='$v->id'>$v->city_name</option>";
        }
    }
}
