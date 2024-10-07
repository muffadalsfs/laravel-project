<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student ;

class StudentController extends Controller
{
    //
    function retrun (Request $request){
        {
   
    
            $student = new Student();
            $student->name = $request->name;
            $student->age = $request->age;
            $student->email = $request->email;
            $student->city = $request->city;
            $student->country = $request->country;
    
            // Handle file upload
            if ($request->hasFile('path')) {
                $imagePath = $request->file('path')->store('images', 'public');
                $student->path = $imagePath;
            }
            
    
            $student->save();
    
            return redirect('list')->with('success', 'Student created successfully.');
        }
   
    }
    function list (Request $request){
        $list = Student::all();

        // Return the view with the list of students
        return view('home', ['students' => $list]);

    }
    function delete($id){
        $isDeleted =Student::destroy($id);
        if($isDeleted){
            return redirect('list');
        }
    }
    function edit($id){
        $student =Student::find($id);
    return view('edit',['student'=>$student]);
    }
    function update(Request $request, $id) {
        // Validate the input data
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'age' => 'nullable|integer',
        //     'email' => 'required|string|email|max:255|unique:students,email,' . $id,
        //     'city' => 'nullable|string|max:255',
        //     'country' => 'nullable|string|max:255',
        //     'path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        // Find the student by ID
        $student = Student::find($id);

        // Update student data
        $student->name = $request->name;
        $student->age = $request->age;
        $student->email = $request->email;
        $student->city = $request->city;
        $student->country = $request->country;

        // Handle the file upload if there's a new image
        if ($request->hasFile('path')) {
            $imagePath = $request->file('path')->store('images', 'public');
            $student->path = $imagePath;
        }

        // Save the updated student
        if($student->save()){

        // Redirect with a success message
        return redirect('list');
    }else{
        return 'sorry';
    }
    }
}
