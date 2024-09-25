<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;

class StudentController
{
    //
    function use(Request $request){
          $bike=new Bike();
          $bike->name=$request->name;
          $bike->email=$request->email;
          $bike->phone=$request->phone;
          $bike->city=$request->city;
          $bike->save();
        return "return world";
    }
    function list(){
        $studentdata= Bike::all();
        return view('liststudent',['bikes'=>$studentdata]);
    }
    function delete ($id){
        echo $isDeleted=Bike::destroy($id);
        if($isDeleted){
            return redirect('list');
        }
    }
}
