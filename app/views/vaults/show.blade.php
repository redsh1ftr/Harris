@extends('layouts.master')


@section('create')
	<div style="font-size:12px">{{link_to_action('VaultsController@edit', '+')}}</div><br>
@stop


@section('content')
{{$vault->name}}

<img src="http://www.precisemaintenance.com/Harris/public/images/{{$vault->image_1}}">

@stop