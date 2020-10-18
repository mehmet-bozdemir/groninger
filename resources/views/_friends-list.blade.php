<h3 class="font-weight-bold h4">Friends</h3>

<ul class="list-unstyled">
    @foreach(range(1, 3) as $index)
        <li class="mb-2">
            <div class="d-flex align-items-center ">
                <img class="rounded-circle mr-2" style="height:40px" src="{{auth()->user()->image}}" alt="">
            </div>
            <div>{{auth()->user()->name}}</div>
        </li>
    @endforeach
</ul>
