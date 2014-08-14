{{ Form::open(array('action' => 'CasketsController@store', 'files' => true)) }}

{{Form::label('name', 'Name')}} {{ Form::text('name') }}<br>


{{Form::submit('submit')}}<br>

{{Form::close()}}