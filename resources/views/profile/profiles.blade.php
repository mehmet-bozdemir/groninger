@extends('layouts.app')

@section('content')
    <div class="d-flex row flex-wrap">
        @foreach($profiles as $user)
            <div class=" d-flex card shadow p-3 m-3 bg-white rounded">
                <div class="row no-gutters">
                    <div class="col-3 d-flex">
                        <a href="{{route('profile', $user)}}">
                            <img
                                src="/{{$user->image}}"
                                class="card-img-top mx-auto rounded-circle"
                                style="width:200px; height:200px"
                                alt="..."
                            />
                        </a>
                    </div>
                    <div class="card-body col-9 text-center">
                        <h3 class="card-title">{{$user->name}}</h3>
                        <span class="badge badge-dark font-italic">Company</span>
                        <h3 class="card-text">{{$user->company}}</h3>
                        <span class="badge badge-dark">Location</span>
                        <p class="card-text">{{$user->location}}</p>
                        <span class="badge badge-dark">Story</span>
                        <p class="card-text">{{$user->story}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection


