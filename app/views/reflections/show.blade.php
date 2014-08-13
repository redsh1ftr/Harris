@extends('layouts.master')
@extends('layouts.reflections')


@section('content')

<div class="sidebar">
@foreach($reflections as $reflect)

	{{link_to_action('ReflectionsController@show', $reflect->name, $reflect->id)}}<br>

@endforeach
</div>	
<div class="image_1">
</div>
@stop