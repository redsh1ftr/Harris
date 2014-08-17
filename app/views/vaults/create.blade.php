<table>
{{ Form::open(array('action' => 'VaultsController@store', 'files' => true)) }}

<td>{{Form::label('name', 'Name')}} <td>{{ Form::text('name') }}<tr>
<td>{{Form::label('liner', 'Liner')}}<td>{{Form::text('liner')}}<tr>
<td>{{Form::label('description', 'Description')}}<td>{{Form::text('description')}}<tr>
<td>{{Form::label('price', 'Price')}}<td>{{Form::text('price')}}<tr>
<td>{{Form::label('image_1', 'Main Image')}}<td>{{Form::file('image_1')}}<tr>
<td>{{Form::label('image_2', 'Interior Image')}}<td>{{Form::file('image_2')}}<tr>
<td>{{Form::label('image_3', 'Optional Image')}}<td>{{Form::file('image_3')}}<tr>

</table>



{{Form::submit('submit')}}<br>