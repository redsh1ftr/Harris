@extends('layouts.master')



@section('content')

<div class="sidebar">
@foreach($reflections as $reflect)

	{{link_to_action('ReflectionsController@show', $reflect->name, $reflect->id)}}<br>

@endforeach

@stop