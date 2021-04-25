@extends('layouts.app')

@section('content')
      <h1>{{$title}} </h1>
      <p> Aceasta este pagina cu informatii despre noi. </p> 
      <div class="about-section">
            
            <p>Cateva informatii despre ce facem noi .</p>
          </div>
          <h2 >Echipa noastra</h2> 
          <div class="row">
            <div class="column">
              <div class="card">
                <div class="container">
                  <img src="{{ url('storage/images/img1.jpg') }}" style="width: 50%" alt="" title="" />
                  <h2>Jane Doe</h2>
                  <p class="title">CEO & Founder</p>
                  <p>O descriere scuta despre Jane.</p>
                  <p>jane@example.com</p>
             
                </div>
              </div>
            </div>

            <div class="column">
              <div class="card">
                <div class="container">
                  <img src="{{ url('storage/images/img2.jpg') }}" style="width: 50%" alt="" title="" />
                  <h2>Mike Ross</h2>
                  <p class="title">Art Director</p>
                  <p>O descriere scuta despre Mike.</p>
                  <p>mike@example.com</p>
                
                </div>
              </div>
            </div>

            
   <div class="column">
    <div class="card">
      <div class="container">
        <img src="{{ url('storage/images/img3.jpg') }}" style="width: 50%" alt="" title="" />
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>O descriere scuta despre John.</p>
        <p>john@example.com</p>
        
      </div>
    </div>
  </div>
</div>

     
 @endsection


 

 
 
   
 