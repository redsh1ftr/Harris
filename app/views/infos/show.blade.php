@extends('layouts.master')
@extends('layouts.infos')


@section('content')

<div class="sidebar">
@foreach($infos as $inf)

	{{link_to_action('InfosController@show', $inf->name, $inf->id)}}<br>

@endforeach
</div>	
<div class="image_1">
</div>
@stop