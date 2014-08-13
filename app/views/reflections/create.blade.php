F:\PHP\htdocs\Harris\app/views/reflections/create.blade.php

{{ Form::open(array('action' => 'ReflectionsController@store', 'files' => true)) }}

{{ Form::text('name') }}<br>

{{ Form::file('image_1')}}<br>


{{Form::submit('submit')}}<br>

{{Form::close()}}