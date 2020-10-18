<div class="m-3 text-center">
    <div class="p-2 d-inline-block text-white bg-dark rounded">
        <h4 class="m-0 font-italic">Post your blog!</h4>
    </div>
</div>
<form action="{{ route('ekrem') }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="title" value="" id="title" placeholder="title">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="subtitle" value="" id="subtitle"
               placeholder="subtitle">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Post Image</label>
        <input type="file" name="image" class="form-control-file" id="image">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="body" value="" id="body" rows="10"
                  placeholder="post your blog..."></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

