@extends('layouts.master')

@section('create')
	<div style="font-size:12px">{{link_to_action('CasketsController@create', '+')}}</div><br>
@stop

@section('content')





@foreach($caskets as $casket)

<table>

<td><a href="//localhost/Harris/public/caskets/{{$casket->id}}">
<img height="100px" width="100px" src="//localhost/Harris/public/images/{{$casket->image_1}}"></a> <br>
{{$casket->name}}<br> ${{$casket->price}}



@endforeach



@stop