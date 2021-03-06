@extends('layouts.master')

@section('content')
<table>
{{ Form::model($casket, array('route' => 'update_casket', 'files' => true, 'method' => 'post')) }}

<td>{{Form::label('name', 'Name')}} <td>{{ Form::text('name') }}<tr>
<td>{{Form::label('interior', 'Interior')}}<td>{{Form::text('interior')}}<tr>
<td>{{Form::label('material', 'Material')}}<td>{{Form::text('material')}}<tr>
<td>{{Form::label('manufacturer', 'Manufacturer')}}<td>{{Form::text('manufacturer')}}<tr>
<td>{{Form::label('group', 'Group')}}<td>{{Form::text('group')}}<tr>
<td>{{Form::label('price', 'Price')}}<td>{{Form::text('price')}}<tr>
<td>{{Form::label('cost', 'Cost')}}<td>{{Form::text('cost')}}<tr>
<td>{{Form::label('notes', 'Notes')}}<td>{{Form::textarea('notes')}}<tr>
<td>{{Form::label('panel', 'Panel')}}<td>{{Form::text('panel')}}<tr>
<td>{{Form::label('vault_size', 'Vault Size')}}<td>{{Form::text('vault_size')}}<tr>
<td>{{Form::label('image_1', 'Main Image')}}<td>{{Form::file('image_1')}}<tr>
<td>{{Form::label('image_2', 'Backpanel')}}<td>{{Form::file('image_2')}}<tr>
<td>{{Form::label('image_3', 'Hardware')}}<td>{{Form::file('image_3')}}<tr>

</table>

{{Form::hidden('id', $casket->id)}}

{{Form::submit('submit')}}<br>

{{Form::close()}}

@stop