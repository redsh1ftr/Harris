@extends('layouts.master')
@section('content')
{{ Form::open(array('action' => 'InfosController@store', 'files' => true)) }}

{{ Form::text('name') }}<br>

{{ Form::file('image_1')}}<br>


{{Form::submit('submit')}}<br>

{{Form::close()}}

@stop