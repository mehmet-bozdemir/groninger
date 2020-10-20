@extends('layouts.app')

@section('content')
    <div class="d-flex col-12 justify-content-between p-0">
        <div class="col-1 pl-0">
            @include('_sidebar-links')
        </div>
        <div class="col-10">
            <div class="d-flex justify-content-center align-items-center">
                <div class="p-2 d-inline-block bg-dark rounded mb-2">
                    <a href="{{route('postForm')}}" class="text-decoration-none">
                        <h4 class="m-0 text-white font-italic">Post your blog!</h4>
                    </a>
                </div>
            </div>
            @foreach ($posts as $post)
                @include('_post')
            @endforeach
        </div>
        <div class="col-1 p-0">
            @include('_friends-list')
        </div>
    </div>
@endsection


{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
