@extends('layouts.master')

@section('content')



<div class="sidebar"
@foreach($infos as $info)

	{{link_to_action('InfosController@show', $info->name, $info->id)}}<br>
@endforeach
</div>
@stop