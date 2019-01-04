@extends('layouts.app')

@section('content')
<br/>
<div id="about" class="p-3 mb-2 bg-success text-white" >

  <div class="container-fluid">
    <div class="row">
       <div class="col-sm">

<h1 align="center">{{$title}}</h1>
</div>
<div class="col-sm">

<h1 align="center"  class="d-none d-lg-block d-xl-none">{{$title}}</h1>
</div>

</div>
</div>

<br/>

<button type="button" class="close" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>

   <br />
   Virtual Market is a website to post your advertisements.
   It has been developed by Ornelio Reiph. <br />
   You are free to add your advertisements here. <br />
   You can create an account through the 'Registers-Menu' to add your advertisements. <br />
   There is the possibility to place pictures or other 'files with your advertisement. <br />
   <br />
   You can contact the 'administrator' through the 'contact-menu'. <br /> <br />

   With kind regards, <br /><br />
   Ornelio Reiph <br />
   Your Administrator. <br />

   </p>
   <img src="{{ asset('img/nelio1.png') }}" width="210" height="180" alt="administrator" title="Virtual Market" />

</div>

@endsection
