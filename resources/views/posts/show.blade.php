@extends('layouts.app')

@section('content')
  <br/>
    <div id="post">
  <a href="/posts" class="btn btn-default">Go Back</a>
  <h1>{{$post->title}}</h1>
  <div>
    {!!$post->body!!}
  </div>
  <hr>
  <small>Written on {{$post->created_at}}</small>
  <hr>
  <br/>
  <br/>


{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method' => 'POST','class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
</div>
@endsection
