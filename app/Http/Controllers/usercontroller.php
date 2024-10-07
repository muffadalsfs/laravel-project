<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class usercontroller extends Controller
{
    
    
//  if ($request->input('username') === 'anil' && $request->input('password') === '1234567') {
//         // Store username in session
//         $request->session()->put('username', $request->input('username'));

//         // Redirect to profile page
//         return redirect('profile'); // Ensure this matches your route to the profile page
//     } else {
//         // If username or password is incorrect
//         return back()->withErrors(['login_error' => 'Invalid username or password']);
//     }
function login(Request $request){
    $request ->session()->put('user',$request->input('user'));
    return redirect ('profile');
}
 
}
