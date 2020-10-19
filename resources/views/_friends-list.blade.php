<h3 class="font-weight-bold h4">Friends</h3>

<ul class="list-unstyled">
    @foreach(auth()->user()-> follows as $user)
        <li class="mb-2">
            <div class="d-flex align-items-center ">
                <img class="rounded-circle mr-2" style="height:40px" src="{{$user->image}}" alt="">
            </div>
            <div>{{$user->name}}</div>
        </li>
    @endforeach
</ul>
