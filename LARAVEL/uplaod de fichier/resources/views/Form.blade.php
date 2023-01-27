
@extends   ('layouts.app')

@section('content')
<h1>creer un nouveau post</h1> 
@if ($errors->any())

 @foreach ($errors->all() as $error)


 <div class="erro">{{$error}}</div>

 @endforeach
 
 @endif
 

<form  method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data" value="{{ csrf_token() }}">
@csrf
<INput type="text" name="title" class="border"><br><br>
<textarea name="content" id="" cols="30" rows="10"></textarea><br><br>
<label for="avatar">Choose a profile picture:</label>

<input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg"><br><br>



<button type="submit">creer</button>
</form>
@endsection
