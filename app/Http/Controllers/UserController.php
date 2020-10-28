<?php

namespace App\Http\Controllers;

use App\Models\Follow;
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
        return view('profile.profiles', [
            'profiles' => User::all(),
        ]);
    }

    public function create()
    {
        return view('auth.profile');
    }

    public function createImage()
    {
        return view('auth.profileImage');
    }

    public function updateProfile(Request $request)
    {
        // Form validation
        $request->validate([
            'name'              =>  'required',
            'company' => 'required',
            'location' => 'required',
            'story' => 'required',
        ]);

        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        // Set user name
        $user->name = $request->input('name');

        // $user->image = $imagePath;
        $user->company = $request->company;
        $user->location = $request->location;
        $user->story = $request->story;
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return redirect('home');
    }

    public function updateProfileImage(Request $request)
    {
        // Form validation
        $request->validate([
            'image'=> ['required', 'image']
        ]);


        $imagePath = request('image')->store('uploads', 'public');

//        dd($imagePath);

        // Get current user
        $user = User::findOrFail(auth()->user()->id);

        $user->image = $imagePath;

        $user->save();

        // Return user back and show a flash message
        return redirect('home');
    }

    public function show(User $user)
    {
        return view('profile.profile', compact('user'));
    }
}
