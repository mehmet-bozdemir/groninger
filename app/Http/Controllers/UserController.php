<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;




class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('auth.profile');
    }

    public function updateProfile(Request $request)
    {
        // Form validation
        $request->validate([
            'name'              =>  'required',
//            'image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:20000',
            'image'=> ['required', 'image']
        ]);


        $imagePath = request('image')->store('uploads', 'public');

//        dd($imagePath);

        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        // Set user name
        $user->name = $request->input('name');

        // Check if a profile image has been uploaded
//        if ($request->hasFile('image')) {
//            $extension = $request->image->extension();
////            $path = $request->image->path();
//
//           $path = $request->image->storeAs('images', $user->id.'.'.$extension);
//        }


        $user->image = $imagePath;
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return redirect('home');
    }
}
