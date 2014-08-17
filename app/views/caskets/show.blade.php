@extends('layouts.master')

@section('content')
{{$casket->name}}

	<a href="//localhost/Harris/public/infos/{{$casket->id}}">
	<img height="100px" width="100px" src="//localhost/Harris/public/images/{{$casket->image_1}}"></a>

<img src="//localhost/Harris/public/images/{{$casket->image_1}}">

@stop