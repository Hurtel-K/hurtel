@extends   ('layouts.app')

@section('content')
    <h1>liste des article</h1>
    @if($posts->count()>0)
    @foreach($posts as $post)
    <h3><a href="{{route('posts.show',['id'=>$post-> id])}}">{{$post->title}}</a></h3>
    
    @endforeach

    @else
 <span>Aucun post en base de données</span>
 @endif

   <h1>liste des video</h1>
   
   @forelse($video->comments as $comment)
     
     <div>{{$comment->content}}| cree le{{ $comment ->created_at->format('d/m/y')}}</div>
 @empty
     <Span>Aucun commentaire pour cette video.</Span>
 @endforelse
@endsection
 