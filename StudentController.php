<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\bike;


// class StudentController extends Controller
// {
//     //
//     // function student (Request $request){
//     //     // return $request->input();
//     //     //  $Student= new user();
//     //     // $Student->name=$request->name;
//     //     // $Student->email=$request->email;
//     //     // $Student->phone=$request->phone;
//     //     // $Student->city=$request->city;
//     //     // $Student->save();
//     //     $name = new Bike();
//     //     $name->name = $request->name;
//     //     $name->email = $request->email;
//     //     $name->phone = $request->phone;
//     //     $name->city = $request->city;
//     //     // $name->password = ($request->password);  // Hashing the password
//     //     $name->save();






//         return 'hello user';
//     }
// }
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        // Validate and process the form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|',
            'phone' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:100',
        ]);

        // Normally, you would save this to the database. Here we skip that.

        // Store name and city in session to be shown later
        session([
            'name' => $request->name,
            'city' => $request->city
        ]);

        // Redirect to the home page with a success message
        return redirect()->route('home')->with('success', 'Student added successfully!');
    }

    public function home()
    {
        // Display the home page
        return view('home');
    }

    public function showData()
    {
        // Display name and city from the session
        return view('home')->with([
            'name' => session('name'),
            'city' => session('city')
        ]);
    }
}
