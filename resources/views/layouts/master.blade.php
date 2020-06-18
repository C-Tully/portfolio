<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Christopher Tully - Software / Web Developer</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<!-- Page Content -->
<section class="py-5 bg-dark">
    <div class="container">
      @section('content')

      @show
    </div>
</section>
@php  @include('/partials/footer') @endphp
<script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>
