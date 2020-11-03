<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
//        dd(auth()->user());
        $profiles = User::all();
        return $profiles;
    }

    public function updateProfile(Request $request)
    {
        // Form validation
//        $request->validate([
//            'name'              =>  'required',
//            'company' => 'required',
//            'location' => 'required',
//            'story' => 'required',
//        ]);

        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        // Set user name
//        $user->name = $request->name;

        // $user->image = $imagePath;
//        $user->company = $request->company;
        $user->location = $request->location;
//        $user->story = $request->story;
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return $user;
    }

    public function show(User $user)
    {
        $profile = User::findOrFail($user->id);
        return $profile;
    }

}
