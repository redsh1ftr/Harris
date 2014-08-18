@extends('layouts.master')

@section('create')
  <div style="font-size:12px">{{link_to_action('CasketsController@create', '+')}}</div><br>
@stop

@section('content')




<div class="gallery">

@foreach($caskets as $casket)

<a href="//localhost/Harris/public/caskets/{{$casket->id}}"> 
  {{$casket->name}} {{$casket->price}}

  <img height="100px" width="100px" src="//localhost/Harris/public/images/{{$casket->image_1}}"/></a>

@endforeach
</div>
@stop


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
    <script src="//localhost/Harris/jQ/jquery.gallerie.js"></script>
    <link rel="stylesheet" type="text/css" href="//localhost/Harris/jQ/gallerie.css"/>
    <link rel="stylesheet" type="text/css" href="//localhost/Harris/jQ/gallerie-effects.css"/>

<script type="text/javascript">
$(document).ready(function(){
  $('#gallery').gallerie();
});

</script>

<style>
  body {
    background-color: black;
  }
  
  #gallery {
    margin-left: auto;
    margin-right: auto;
  }
</style>
</head>

<body>
<div id="gallery">
<a href="example-images/20110813_184411.jpg"><img src="example-images/thumbs/20110813_184411.jpg"/></a>
<a href="example-images/20110902_163207.jpg"><img src="example-images/thumbs/20110902_163207.jpg"/></a>
<a href="example-images/20110902_164525.jpg"><img src="example-images/thumbs/20110902_164525.jpg"/></a>
<a href="example-images/20110902_171016.jpg"><img src="example-images/thumbs/20110902_171016.jpg"/></a>
<a href="example-images/20110903_171216.jpg"><img src="example-images/thumbs/20110903_171216.jpg"/></a>
</div>@stop