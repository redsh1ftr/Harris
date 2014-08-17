@extends('layouts.master')
@extends('layouts.infos')


@section('content')

<div class="sidebar">
@foreach($infos as $inf)

	<a href="{{link_to_action('InfosController@show', $inf->id)}}"><img height="50px" width="50px" src='//localhost/Harris/public/images/d25ajZLEQWosEyALsHD6IDl
sTbiNqXsmHW4ooskcXhWLfrzwqMi0JfLNxo5EUHE4f5zXzMljGO4uMtZo2iTpBq0NXAlTACVgOLErppcdlCQuJ9Bg2TgvUHFprgUL.png'><br>
>
@endforeach
</div>	
<div class="image_1">
</div>


@stop