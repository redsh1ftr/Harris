@extends('layouts.master')

@section('create')
	<div style="font-size:12px">{{link_to_action('ReflectionsController@create', '+')}}</div><br>
@stop

@section('content')

<div class="sidebar">
@foreach($reflections as $reflect)

	<a href="//localhost/Harris/public/reflections/{{$reflect->id}}">
	<img height="100px" width="100px" src="//localhost/Harris/public/images/{{$reflect->image_1}}"> <br>{{$reflect->name}}</a>


@endforeach

@stop