<div class="text-center p-4 border border-bottom">
    <div class="mb-2">
        <h2>{{$post->title}}</h2>
    </div>
    <div class="my-2">
        <h2>{{$post->subtitle}}</h2>
    </div>
    <div class="my-4">
        <img class="rounded mr-2" style="height:600px" src="{{$post->image}}" alt="{{$post->image}}">
    </div>
    <div>
        <img class="rounded-circle mr-2" style="height:40px" src="{{auth()->user()->image}}" alt="">
        <h4 class="font-weight-bold mb-4">{{$post->user->name}}</h4>
    </div>
    <div>
        <p>{{$post->body}}</p>
    </div>
</div>
