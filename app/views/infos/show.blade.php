@extends('layouts.master')
@extends('layouts.infos')


@section('content')

<div class="sidebar">
@foreach($infos as $inf)
	
	

	<a href="//localhost/Harris/public/infos/{{$inf->id}}">
	<img height="100px" width="100px" src="//localhost/Harris/public/images/{{$inf->image_1}}"></a>

@endforeach

</div>	
<div class="image_1">
</div>


@stop