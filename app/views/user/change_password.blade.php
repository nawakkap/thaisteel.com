@extends('layouts.master');

@section('topic')
Change Password
@stop

@section('css')
<style>
.required { color : red;}
</style>
@stop


@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
		
<div class="alert-danger">
{{ HTML::ul($errors->all()) }}
</div>

{{ Form::open(array('url' => 'user_clients/change_password')) }}

<div class="form-group">
	<label>Old Password</label>&nbsp;<em class="required">*</em>
	{{ Form::password('old_password', array('class' => 'form-control', 'placeholder' => 'Old Password')) }}
</div>

<div class="form-group">
	<label>New Password</label>&nbsp;<em class="required">*</em>
	{{ Form::password('new_password', array('class' => 'form-control', 'placeholder' => 'New Password')) }}
</div>

<div class="form-group">
	<label>Confirm New Password</label>&nbsp;<em class="required">*</em>
	{{ Form::password('new_password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm New Password')) }}
</div>

{{ Form::submit('Change password', array('class' => 'btn btn-primary')) }}&nbsp;&nbsp;
<a href="{{ URL::to('/') }}" class="btn btn-warning">Cancel and Go Back</a>

{{ Form::close() }}
		</div>
	</div>
</div>
@stop