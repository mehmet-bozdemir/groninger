@extends('layouts.app')

@section('content')
    <div class="d-flex row flex-wrap justify-content-between">
        @foreach($profiles as $user)
            <div class="d-flex card shadow p-3  my-3 bg-white rounded align-items-center justify-content-center">

                <div class="d-flex">
                    <a href="{{route('profile', $user)}}">
                        <img
                            src="/{{$user->image}}"
                            class="card-img-top mx-auto rounded-circle"
                            style="width:200px; height:200px"
                            alt="..."
                        />
                    </a>
                </div>
                <div class="card-body text-center align-items-center justify-content-center">
                    <h3 class="card-title">{{$user->name}}</h3>
                    <h6 class="font-italic">Joined {{$user->created_at->diffForHumans()}}</h6>
                    <span class="badge badge-dark font-italic">Company</span>
                    <h3 class="card-text">{{$user->company}}</h3>
                    <span class="badge badge-dark">Location</span>
                    <p class="card-text">{{$user->location}}</p>
                    <div>
                        <a href="{{route('profile', $user)}}" class="btn btn-sm btn-outline-secondary m-1">VIEW
                            PROFILE</a>
                        @if(auth()->user() == $user)
                            <a href="" class="btn btn-sm btn-outline-danger m-1"><i class="far fa-trash-alt fa-lg"></i></a>
                        @endif
                    </div>
                    <div class="d-flex justify-content-around border-top mx-0 mt-3 pt-3 text-muted font-italic">
                        <h6 class="mr-2">333 posts</h6>
                        <h6 class="mx-1">334 followers</h6>
                        <h6 class="ml-2">144 following</h6>
                    </div>
                    @if(auth()->user() != $user)
                        <div class="d-flex align-items-center justify-content-center">
                            <form method="POST" action="/profiles/{{$user->id}}/follow">
                                @csrf
{{--                                @if($user->follows()->following_id)--}}
                                <i class="far fa-check-circle fa-lg text-success"></i>
{{--                                @endif--}}
                                <button type="submit" href="" class="btn btn-sm btn-outline-secondary m-1">FOLLOW
                                </button>
                            </form>
                            <form>
                                @csrf
                                <button href="" class="btn btn-sm btn-outline-secondary m-1">UNFOLLOW
                                </button>
                            </form>
                        </div>
                    @endif
                </div>

            </div>
        @endforeach
    </div>
@endsection


