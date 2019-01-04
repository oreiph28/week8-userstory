@extends('layouts.app')

@section('content')
  <br/>
<div id="sec0" class="jumbotron text-center">
         <h1 id="index_h"> {{$title}}</h1>

         <section  id="sec1"  class="jumbotron text-center" >

                 <div  class="container">
                   <p> This is Ornelio reiph VirutalMarket from scratch</p>

                     <a href="{{ route('login') }}" class="btn btn-primary my-2">Login</a>
                     <a href="{{ route('register') }}" class="btn btn-success my-2">Register</a>

                   <h1>Posts</h1>
                 </p>
                 </div>
               </section>
@endsection
