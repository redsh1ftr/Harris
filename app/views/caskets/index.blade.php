@extends('layouts.master')

@section('content')

@foreach($caskets as $casket)

{{$casket->name}}<br>

{{link_to_action('CasketsController@show', $casket->name, $casket->id)}}

@endforeach

uiehwughwueghuoh

@stop