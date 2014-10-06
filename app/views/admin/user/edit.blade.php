@extends('admin.layout.master');

@section('topic')
Edit User
@stop


@section('content')
{{ HTML::ul($errors->all()) }}

{{ Form::model($user, array('route' => array('admin.users.update', $user->id), 'method' => 'PUT')) }}

<input type="hidden" name="permission" value="ADMIN" />

<div class="form-group">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Name' , 'autocomplete' => 'off' , 'autofocus' => 'autofocus')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'E-mail') }}
	{{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'E-mail' , 'autocomplete' => 'off')) }}
</div>

<div class="form-group">
	<label>Password</label>
	{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
</div>

<div class="form-group">
	<label>User Type</label>
	{{ Form::select('permission', $user_type, Input::old('permission'), array('class' => 'form-control chosen', 'id' => 'user_select', 'data-placeholder' => 'Please select a user...')); }}
</div>


{{ Form::submit('Edit User', array('class' => 'btn btn-primary')) }}&nbsp;&nbsp;
<a href="{{ URL::to('admin/users') }}" class="btn btn-warning">Cancel and Go Back</a>

<!--
<div class="form-group">
	<label>Permission</label>
	<select class="form-control">
		<option value="ADMIN">ADMIN</option>
	</select>
</div>
-->

{{ Form::close() }}
@stop