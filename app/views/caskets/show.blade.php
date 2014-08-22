@extends('layouts.master')

@section('create')
<a href="http://www.precisemaintenance.com/Harris/public/caskets/{{$casket->id}}/edit"><div class="create">+</div></a>
@stop

@section('content')

  <div class="main-image">
  	<a href="http://www.precisemaintenance.com/Harris/public/caskets/{{$casket->id+1}}">
    <img src="http://www.precisemaintenance.com/Harris/public/images/{{$casket->image_1}}" height="300%" width="300%" alt="Placeholder" class="custom"></a>
  </div>



  <ul class="thumbnails">
    <li><a href="http://www.precisemaintenance.com/Harris/public/images/{{$casket->image_1}}"><img height="100px" width="100px" src="http://www.precisemaintenance.com/Harris/public/images/{{$casket->image_1}}" alt="Thumbnails"></a></li>
    <li><a href="http://www.precisemaintenance.com/Harris/public/images/{{$casket->image_2}}"><img height="100px" width="100px" src="http://www.precisemaintenance.com/Harris/public/images/{{$casket->image_2}}" alt="Thumbnails"></a></li>
    <li><a href="http://www.precisemaintenance.com/Harris/public/images/{{$casket->image_3}}"><img height="100px" width="100px" src="http://www.precisemaintenance.com/Harris/public/images/{{$casket->image_3}}" alt="Thumbnails"></a></li>
  </ul>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://www.precisemaintenance.com/Harris/jQ/jquery.simpleGal.js"></script>
  <script>
  $(document).ready(function () {
    $('.thumbnails').simpleGal({
      mainImage: '.custom'
    });
  });
  </script>




@stop