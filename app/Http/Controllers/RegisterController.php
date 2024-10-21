<?php

namespace App\Http\Controllers;
use App\Models\Register;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function insert(Request $request){
        if($request->post("addrecord")){
            $register = new register;

            $register->firstname = $request->post("firstname");
            $register->lastname = $request->post("lastname");
            $register->email = $request->post("email");
            $register->password = $request->post("password");
            $register->gender = $request->post("gender");
            $register->address = $request->post("address");
            $register->city = $request->post("city");
            $register->hobbies = implode(",",$request->post("hobbies"));

            $photo = $request->file('photo');
            $newname = time().".".$photo->extension(); // get extension (.JPG,.PNG)
            
            if($photo->move("uploads",$newname)){ // Upload file
                $register->photo = $newname;
            }
            $register->save(); // Insert Record

            return redirect("/register/display")->with('status','Register Successfully');
        }
    }

    public function display(){
        $register = register::all();
        return view('form/display',array('register'=>$register));
    }

    public function delete($id){
        register::find($id)->delete();
        return redirect("/register/display")->with('status','Record Deleted Successfully');
    }

    public function edit($id){
        $city = array("Ahmedabad","Anand","Mahesana","Nadiyad","Rajkot","Surat","Vadodara");
        $register = register::find($id);
        return view('form/edit',['row'=>$register,'city'=>$city]);
    }

    public function update(Request $request){
        if($request->post("editrecord")){
            $id = $request->post("id");

            $register = register::find($id);

            $register->firstname = $request->post("firstname");
            $register->lastname = $request->post("lastname");
            $register->email = $request->post("email");
            $register->password = $request->post("password");
            $register->gender = $request->post("gender");
            $register->address = $request->post("address");
            $register->city = $request->post("city");
            $register->hobbies = implode(",",$request->post("hobbies"));

            if($request->file('photo')){
                $photo = $request->file('photo');
                $newname = time().".".$photo->extension(); // get extension (.JPG,.PNG)
                
                if($photo->move("uploads",$newname)){ // Upload file
                    $register->photo = $newname;
                }
            }
            $register->save(); // Update Record

            return redirect("/register/display")->with('status','Update Record Successfully');
        }
    }

    public function getRecord(){
        $register = register::where('firstname', 'Flight')->where('lastname','Z')->get();

        echo "<pre>";
        echo "\nTotal Records : ".$register->count();

        foreach($register as $row){
            echo "\n".$row->firstname;
            echo "\n".$row->lastname;   
        }

        echo "</pre>";
        die;
    }
}
