
@extends   ('layouts.app')

@section('content')
<h1>creer un nouveau post</h1> 
@if ($errors->any())

 @foreach ($errors->all() as $error)


 <div class="erro">{{$error}}</div>

 @endforeach
 
 @endif
 

<form  method="POST" action="{{route('posts.store')}}" value="{{ csrf_token() }}">
@csrf
<INput type="text" name="title" class="border">
<textarea name="content" id="" cols="30" rows="10"></textarea>


<button type="submit">creer</button>
</form>
@endsection
