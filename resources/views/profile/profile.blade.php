@extends('layouts.app')

@section('content')
    <div class="d-flex row flex-wrap">
            <div class=" d-flex card shadow p-3 m-3 bg-white rounded">
                <div class="row no-gutters">
                    <div class="col-3 d-flex">
                        <img
                            src="/{{$user->image}}"
                            class="card-img-top mx-auto rounded-circle"
                            style="width:200px; height:200px"
                            alt="..."
                        />
                    </div>
                    <div class="card-body col-9 text-center">
                        <h1 class="card-title">{{$user->name}}</h1>
                        <span class="badge badge-dark"><h2>Story</h2></span>
                        <p class="card-text">{{$user->story}}</p>
                    </div>
                </div>
            </div>
    </div>
@endsection

