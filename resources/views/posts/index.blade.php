@extends('layouts.app')

@section('content')
  <br/>
  <div id="post">
  <h1>Posts</h1>

  @if(count($posts) > 0)
         @foreach($posts as $post)
             <div class="list-group-item">
               <h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3>
               <small> Written on {{$post->created_at}}</small>
             </div>
             <br/>
         @endforeach
   {{$posts->links()}}
  @else
      <p>No post found</p>
  @endif
</div>
@endsection
