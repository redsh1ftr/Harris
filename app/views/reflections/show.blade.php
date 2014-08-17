@extends('layouts.master')
@extends('layouts.reflections')


@section('content')

<div class="sidebar">
@foreach($reflections as $reflect)

	<a href="//localhost/Harris/public/reflections/{{$reflect->id}}">
	<img height="100px" width="100px" src="//localhost/Harris/public/images/{{$reflect->image_1}}"></a>
	

@endforeach
</div>	
<div class="image_1">
</div>
@stop