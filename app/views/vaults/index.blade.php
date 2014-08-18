@extends('layouts.master')

@section('create')
	<div style="font-size:12px">{{link_to_action('VaultsController@create', '+')}}</div><br>
@stop

@section('content')


@foreach($vaults as $vault)


	<a href="//localhost/Harris/public/vaults/{{$vault->id}}">
	<img height="100px" width="100px" src="//localhost/Harris/public/images/{{$vault->image_1}}"></a>

@endforeach

@stop