@extends('layouts.master')
@extends('layouts.infos')

@section('create')
	<div style="font-size:12px">{{link_to_action('InfosController@edit', '+')}}</div><br>
@stop

@section('content')

<div class="sidebar">
@foreach($infos as $inf)
	
	

	<a href="http://www.precisemaintenance.com/Harris/public/infos/{{$inf->id}}">
	<img height="100px" width="100px" src="http://www.precisemaintenance.com/Harris/public/images/{{$inf->image_1}}"></a>

@endforeach

</div>	
<div class="image_1">
</div>


@stop