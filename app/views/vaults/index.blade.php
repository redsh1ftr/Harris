@extends('layouts.master')

@section('content')



<br><br><br>
@foreach($vaults as $vault)


	<a href="//localhost/Harris/public/vaults/{{$vault->id}}">
	<img height="100px" width="100px" src="//localhost/Harris/public/images/{{$vault->image_1}}"></a>

@endforeach

@stop