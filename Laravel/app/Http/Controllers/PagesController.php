<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index(){
      $title ="Travel Blog"; //trasmitere parametrii
      //return view('pages.index', compact('title')) ;  //trasmitere parametrii
      return view('pages.index', ) ->with('title', $title); //a doua metoda de trasmitere parametrii
  }
  public function about(){
      $title ='About Us';
    return view('pages.about') ->with('title',$title);
}
public function services(){
    $data= array(                //a treia metoda de trasmitere de parametrii
        'title'=> 'Services',
        'services'=> ['Consultanta','Informatii complete ', 'Oferte Personalizate']
    );
    return view('pages.services')->with($data);
}

}
