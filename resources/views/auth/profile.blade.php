@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Profile</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="col-12">
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>
                                                    {{ $error }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('profileUpdate') }}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" type="text" class="form-control" name="name"
                                               value="{{ old('name', auth()->user()->name) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="company">Company</label>
                                        <input id="company" type="text" class="form-control" name="company"
                                               value="{{ old('name', auth()->user()->company) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="Location">Location</label>
                                        <input id="city" type="text" class="form-control" name="location"
                                               value="{{ old('name', auth()->user()->location) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="story">Story</label>
                                        <input id="story" type="text" class="form-control" name="story"
                                               value="{{ old('name', auth()->user()->story) }}">
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label for="image">Profile Image</label>--}}
{{--                                        <input id="image" type="file" class="form-control-file" name="image">--}}
{{--                                        @if (auth()->user()->image)--}}
{{--                                            <code>{{ auth()->user()->image }}</code>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
                                    <div class="form-group row mb-0 mt-5">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
