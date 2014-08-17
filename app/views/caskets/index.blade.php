@extends('layouts.master')

@section('content')

<br><br><br><br>
@foreach($caskets as $casket)

<a href="//localhost/Harris/public/caskets/{{$casket->id}}">
	<img height="100px" width="100px" src="//localhost/Harris/public/images/{{$casket->image_1}}"></a>




@endforeach


@stop