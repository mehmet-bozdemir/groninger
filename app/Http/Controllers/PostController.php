<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
//        dd(request()->all());
        // Form validation
        $data = request()->validate([
//            'user_id'=>'required',
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
            'image'=> ['required', 'image']
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $data['title'],
            'subtitle' => $data['subtitle'],
            'body' => $data['body'],
            'image' => $imagePath
        ]);
//        $post= new Post;
//
//        $post->user_id=auth()->user()->id;
//        $post->title=$request->title;
//        $post->subtitle=$request->subtitle;
//        $post->body=$request->body;
//
//        if ($request->hasFile('image')) {
//            $extension = $request->image->extension();
//
//            $path = $request->image->storeAs('images', $post->id.'post'.'.'.$extension);
//        }
//
//        $post->image = $path;
//
//        Post::create([
//            'user_id' =>$this->user_id,
//            'title' =>$this->title,
//            'subtitle'=>$this->subtitle,
//            'image' =>$this->image,
//            'body' => $this->body
//        ]);

//        session()->flash('success','Operation succeed');
        return redirect('home');





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}


//
//        $image=$request->file('image');
//        $filename=$image->getClientOriginalName();
//
//        Storage::disk('public')->put('/imagesPost/'.$filename,file_get_contents($request->file('image')->getRealPath()));
//
//        $post->image=$filename;
//
//        $post->save();
//


//        if ($request->hasFile('image')) {
//            $extension = $request->image->extension();
////            $path = $request->image->path();
//
//            $path = $request->image->storeAs('images', $post->id.'.'.$extension);
//        }


//$post= new Post;
//
//$post->user_id=auth()->user()->id;
//$post->title=$request->title;
//$post->subtitle=$request->subtitle;
//$post->body=$request->body;
//
//if ($request->hasFile('image')) {
//    $extension = $request->image->extension();
//
//    $path = $request->image->storeAs('images', $post->id.'post'.'.'.$extension);
//}
//
//$post->image = $path;
//$post->save();
//
////        session()->flash('success','Operation succeed');
//return redirect('home');
