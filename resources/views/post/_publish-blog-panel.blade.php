@extends('layouts.app')

@section('content')
<form action="{{ route('home.store') }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="title" value="" id="title" placeholder="title">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="subtitle" value="" id="subtitle"
               placeholder="subtitle">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Post Image</label>
        <input type="file" name="image" class="form-control-file" id="image">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="body" value="" id="body" rows="10"
                  placeholder="post your blog..."></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
