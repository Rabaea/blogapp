@extends('layouts.app')

@section('content')
<a href="http://localhost/Laravel/Laravel/public/posts" class="btn btn-default">Go Back</a>

<h1>{{$post->title}}</h1>


<p>{{$post->body}} </p>
<div class="row">
    <div class = "col-md-12">
       
   
           <img   style="width:30%"  src= "{{asset("storage/cover_images/" . $post->cover_image) }}" alt="Image" >
        
    </div>

</div>
<hr>
<small>Written on {{$post->created_at}}</small>
 <hr>
 @if(!Auth::guest())
 @if(Auth::user()->id == $post->user_id)
 <a href="http://localhost/Laravel/Laravel/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a> 
{!!Form::open(['action'=> ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-dangen'])}}
{!!Form::close()!!}
@endif
@endif
@endsection