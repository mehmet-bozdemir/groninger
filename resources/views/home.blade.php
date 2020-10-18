@extends('layouts.app')

@section('content')
    <div class="d-flex col-12 justify-content-between p-0">
        <div class="col-1 pl-0">
            @include('_sidebar-links')
        </div>
        <div class="col-10">
            @include('_publish-blog-panel')

            <div class="border border-gray rounded-lg mt-2">
                @foreach ($posts as $post)
                    @include('_post')
                @endforeach
            </div>
        </div>
        <div class="col-1 pr-0">
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
