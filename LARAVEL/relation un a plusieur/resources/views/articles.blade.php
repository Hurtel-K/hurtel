
@extends   ('layouts.app')

@section('content')
     <h1>{{$post->content}} </h1>
     @foreach($post->comments as $comment)
     
     <span>{{$comment->content}}</span>
     @endforeach
@endsection