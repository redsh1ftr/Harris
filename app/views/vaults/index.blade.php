@extends('layouts.master')

@section('content')



<br><br><br>
@foreach($vaults as $vault)

	{{link_to_action('VaultsController@show', $vault->name, $vault->id)}}
@endforeach

@stop