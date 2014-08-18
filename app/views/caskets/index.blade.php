@extends('layouts.master')

@section('create')
  <div style="font-size:12px">{{link_to_action('CasketsController@create', '+')}}</div><br>
@stop

@section('content')





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
  body

  #gallery {
    margin-left: auto;
    margin-right: auto;
  }
</style>
</head>

<body>
<div id="gallery">

@foreach($caskets as $casket)


<a href="//localhost/Harris/public/images/{{$casket->image_1}}"> 
  <img title="{{$casket->name}}"  height="100px" width="100px" src="//localhost/Harris/public/images/{{$casket->image_1}}"/><div class="gallerie-price">{{$casket->price}}</div></a>
@endforeach
</body>
</div>@stop