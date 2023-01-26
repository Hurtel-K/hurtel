
@extends   ('layouts.app')

@section('content')
     <h1>{{$post->content}} </h1>
    
     <span> {{$post->image ? $post->image->path : 'pas dimage'}}</span>
     
     <hr>
     
     @forelse($post->comments as $comment)
     
         <div>{{$comment->content}}| cree le{{ $comment ->created_at->format('d/m/y')}}</div>
     @empty
         <Span>Aucun commentaire pour ce poste.</Span>
     @endforelse
    
     @forelse($post->tags as $tag)
         <span>{{$tag->name}}</span>

  @empty
  Span>Aucun tag pour ce poste.</Span>
     
  @endforelse
  <hr>
  
  
  
@endsection