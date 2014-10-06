@extends('layouts.master');

@section('topic')
Registration
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

{{ Form::open(array('url' => 'user_clients')) }}

<div class="form-group">
	{{ Form::label('name', 'First Name') }}&nbsp;<em class="required">*</em>
	{{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control', 'placeholder' => 'First Name')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Last Name') }}
	{{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control', 'placeholder' => 'Last Name')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Company Name') }}
	{{ Form::text('company', Input::old('company'), array('class' => 'form-control', 'placeholder' => 'Company Name', 'autofocus' => 'autofocus')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Address') }}
	{{ Form::textarea('address', Input::old('address'), array('class' => 'form-control', 'rows' => '3', 'placeholder' => 'Address' , 'autocomplete' => 'off')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Mobile Phone') }}&nbsp;<em class="required">*</em>
	{{ Form::text('mobile_phone', Input::old('mobile_phone'), array('class' => 'form-control', 'placeholder' => 'Mobile Phone')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Telephone') }}
	{{ Form::text('telephone', Input::old('telephone'), array('class' => 'form-control', 'placeholder' => 'Telephone')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Fax') }}
	{{ Form::text('fax', Input::old('fax'), array('class' => 'form-control', 'placeholder' => 'Fax')) }}
</div>



<div class="form-group">
	{{ Form::label('name', 'E-mail') }}&nbsp;<em class="required">*</em>
	{{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'E-mail')) }}
</div>

<div class="form-group">
	<label>Password</label>&nbsp;<em class="required">*</em>
	{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
</div>

<div class="form-group">
	<label>Confirm Password</label>&nbsp;<em class="required">*</em>
	{{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) }}
</div>

{{ Form::submit('Register', array('class' => 'btn btn-primary')) }}&nbsp;&nbsp;
<a href="{{ URL::to('/') }}" class="btn btn-warning">Cancel and Go Back</a>

{{ Form::close() }}
		</div>
	</div>
</div>
@stop