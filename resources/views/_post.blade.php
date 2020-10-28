<div class="text-center p-4 border border-bottom">
    <div class="mb-2 h2">
        <h2>{{$post->title}}</h2>
    </div>
    <div class="my-2 h3">
        <h2>{{$post->subtitle}}</h2>
    </div>
    <div class="my-4">
        <img class="rounded mr-2" style="width:100%" src="{{$post->image}}" alt="{{$post->image}}">
    </div>
    <div>
        <img class="rounded-circle mr-2" style="height:70px; width:70px" src="{{$post->user->image}}" alt="">
        <h4 class="font-weight-bold mb-4">{{$post->user->name}}</h4>
    </div>
    <div>
        <p>{{$post->body}}</p>
    </div>
    <div class="d-flex align-items-center justify-content-center">
        <form action="/posts/{{$post->id}}/like" method="POST">
            @csrf
            <div class="mx-3">
                <button type="submit" class="btn btn-link px-0 text-dark"><i class="far fa-thumbs-up"></i></button>
                {{$post->totalLikes() ? : 0}}
            </div>
        </form>
        <form action="/posts/{{$post->id}}/like" method="POST">
            @csrf
            @method('DELETE')
            <div class="mx-3">
                <button type="submit" class="btn btn-link px-0 text-dark"><i class="far fa-thumbs-down"></i></button>
                <span>{{$post->totalDislikes() ? : 0}}</span>
            </div>
        </form>
    </div>
</div>
