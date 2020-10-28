<h3 class="font-weight-bold h4">Friends</h3>

<ul class="list-unstyled">
    @foreach(auth()->user()-> following as $user)
        <li class="mb-2">
            <div class="d-flex align-items-center ">
                <a href="{{route('profile', $user)}}">
                    <img class="rounded-circle mr-2" style="height:40px; width:40px" src="{{$user->image}}" alt=""/>
                </a>
            </div>
            <div>{{$user->name}}</div>
        </li>
    @endforeach
</ul>
