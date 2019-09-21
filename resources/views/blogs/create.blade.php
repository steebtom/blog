@extends ('layouts.app')
<!-- <h1>create blade.php</h1> -->

@section ('content')
<form action="{{ route('store_blogs_path')}}" method="post">
    @csrf

    <div class="form-group" >
        <label for="title">Title </label> 
        <input type="text" name="title">
    </div>
    <div class="form-group" >
        <label for="content">Content </label> 
        <textarea name="content" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group" >
        <button type="submit" class="btn btn-outline-primary">Add Blog Post</button>
    </div>

</form>
@endsection