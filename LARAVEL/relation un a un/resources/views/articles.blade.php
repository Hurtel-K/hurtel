
@extends   ('layouts.app')

@section('content')
     <h1>{{$post->content}} </h1>
     <span> {{$post->image ? $post->image->path : pas dimage }}</span>
     
     @foreach($post->comments as $comment)
     
     <span>{{$comment->content}}</span>
     @endforeach
@endsection