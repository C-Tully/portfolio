<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Christopher Tully - Software / Web Developer</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-light">Vertically Centered Masthead Content</h1>
                <p class="lead">A great starter layout for a landing page</p>
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<section class="py-5">
    <div class="container">
      @section('content')

      @show
    </div>
</section>
<?php @include('/partials/footer') ?>
