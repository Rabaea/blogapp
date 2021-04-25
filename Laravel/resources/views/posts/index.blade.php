@extends('layouts.app')

@section('content')

<h1>Posts</h1>
   @if(count($posts)>0)
       <div class="card">
            <ul class="list-group list-group-flush">
                @foreach($posts as $post)
     
<div class="row">
    <div class="col-md-4">
        
       <img   style="width:100%"  src= "{{asset("storage/cover_images/" . $post->cover_image) }}" alt="Image" >
    </div>
    <div class="col-md-8">
     
            <h3>
               <a  href= "http://localhost/Laravel/Laravel/public/posts/{{$post->id}}">{{$post->title}}</a>

            </h3>
            <small>Written on {{$post->created_at}} </small>

    </div>
</div>
                 

        
                  @endforeach
             </ul>
         
        </div>
    @else

    @endif

@endsection