@extends('layouts.master')

@section('create')
	<div style="font-size:12px">{{link_to_action('CasketsController@edit', '+')}}</div><br>
@stop

@section('content')


<img src="//localhost/Harris/public/images/{{$casket->image_1}}">

@stop