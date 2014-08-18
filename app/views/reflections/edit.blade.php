F:\PHP\htdocs\Harris\app/views/reflections/edit.blade.php


{{ Form::model($reflection, array('action' => 'ReflectionsController@update', 'files' => true)) }}

{{ Form::text('name', $reflection->name) }}<br>

{{ Form::file('image_1')}}<br>


{{Form::submit('submit')}}<br>

{{Form::close()}}