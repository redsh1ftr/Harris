@extends('layouts.master')

@section('content')



<div class="sidebar">
@foreach($infos as $info)

	<a href="//localhost/Harris/public/infos/{{$info->id}}">
	<img height="100px" width="100px" src="//localhost/Harris/public/images/{{$info->image_1}}"></a>
	
@endforeach
</div>
@stop