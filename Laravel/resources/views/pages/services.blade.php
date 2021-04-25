@extends('layouts.app')

@section('content')
      <h1>{{$title}} </h1>
     @if(count($services) > 0)
        <ul>
           @foreach($services as $service)
               <li>{{$service}} </li>

            @endforeach
        </ul>
     @endif
     <img src="{{ url('storage/images/img5.jpg') }}" style="width: 100%" alt="" title="" />
@endsection
