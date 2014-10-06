@extends('admin.layout.master');

@section('topic')
Edit Product
@stop

@section('content')
@if (Session::has('errors'))
<div class="alert alert-danger">
{{ HTML::ul($errors->all()) }}
</div>
@endif

{{ Form::model($product, array('route' => array('admin.products.update', $product->id), 'method' => 'PUT')) }}

<div class="form-group">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Product name', 'autofocus' => 'autofocus')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Type') }}
	{{ Form::text('type', Input::old('type'), array('class' => 'form-control', 'placeholder' => 'Type')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Thickness') }}
	{{ Form::text('thickness', Input::old('thickness'), array('class' => 'form-control', 'placeholder' => 'Thickness')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Weight per m') }}
	{{ Form::text('weight_per_m', Input::old('weight_per_m'), array('class' => 'form-control', 'placeholder' => 'Weight per m')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Weight Tolerance') }}
	{{ Form::text('weight_tolerance', Input::old('weight_tolerance'), array('class' => 'form-control', 'placeholder' => 'Weight Tolerance')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Grade') }}
	{{ Form::text('grade', Input::old('grade'), array('class' => 'form-control', 'placeholder' => 'Grade')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Standard Length') }}
	{{ Form::text('standard_length', Input::old('standard_length'), array('class' => 'form-control', 'placeholder' => 'Standard Length')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Pack Unit') }}
	{{ Form::text('pack_unit', Input::old('pack_unit'), array('class' => 'form-control', 'placeholder' => 'Pack Unit')) }}
</div>

{{ Form::submit('Edit Product', array('class' => 'btn btn-primary')) }}&nbsp;&nbsp;
<a href="{{ URL::to('admin/products') }}" class="btn btn-warning">Cancel and Go Back</a>

{{ Form::close() }}
@stop