<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


      <main class="py-4">


@include('inc.navbar')
<div class="container">
  <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>


  @include('inc.messages')

  @yield('content')



</div>
</main>

    </div>


      <div id="footer" class="card text-center">
        <a class="btn btn-social-icon btn-twitter">
    <span class="fa fa-twitter"></span>
  </a>

        <div class="card-header">
        
        </div>
        <div class="card-body">
          <h5 class="card-title">VirtualMarket</h5>
          <p class="card-text">With thanx to HackerMaster.tk.</p>
          <a href="http:\\www.hackermaster.tk" class="btn btn-primary">HackerMaster</a>
        </div>
        <div class="card-footer text-muted">
          <!-- Auto Updating Copyright Script created with Rapid Purple Webmaster Tools (http://rapidpurple.com). -->

<script language="JavaScript">
<!--
function y2k(number) { return (number < 1000) ? number + 1900 : number; }
var today = new Date();
var year = y2k(today.getYear());
document.write('© '+year+' Ornelio Reiph - All Rights Reserved');
//-->
</script>

        </div>
      </div>


      <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
         <script>
             CKEDITOR.replace( 'article-ckeditor' );
         </script>


</body>
</html>
