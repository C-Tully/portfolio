@extends('layouts.master')
@section('content')
<section id="home" class="flex height-fix">
  <div id="pt" class="canvas"><canvas id="canvas" width="2880" height="936" style="width: 1440px; height: 468px;"></canvas></div>
  <div class="flex">
    <div class="text">
      <p> Hi, My name's <span class="highlight">Christopher Tully</span>.</p>
      <p>I'm a Software/Web Developer!</p>      
    </div>
    <div class="button page-link" dest="about">
      View my work <i class="fa fa-id-badge" aria-hidden="true"></i>
    </div>
    <nav class="flex desk">
      <div class="link-wrap">
        <div class="page-link active" dest="home">home</div>
        <div class="page-link" dest="about">about</div>
        <div class="page-link" dest="portfolio">portfolio</div>
        <div class="page-link" dest="blog">blog</div>
        <div class="page-link" dest="contact">contact</div>
      </div>
      <i class="mdi mdi-menu"></i>
    </nav>
  </div>
</section>
@endsection
