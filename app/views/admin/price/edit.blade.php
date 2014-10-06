@extends('admin.layout.master');

@section('topic')
Edit Price
@stop


@section('content')
@if (Session::has('errors'))
<div class="alert alert-danger">
{{ HTML::ul($errors->all()) }}
</div>
@endif

{{ Form::model($price, array('route' => array('admin.prices.update', $price->id), 'method' => 'PUT')) }}

<div class="form-group">
	{{ Form::label('name', 'User') }}
	{{ Form::hidden('user', $price->user_id) }} 
	{{ Form::text('user-name', $price->user->name, array('class'=> 'form-control', 'readonly' => 'readonly')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Product') }}
	{{ Form::hidden('product', $price->product_id) }} 
	{{ Form::text('product-name', $price->product->name, array('class'=> 'form-control', 'readonly' => 'readonly')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Update Date') }}
	{{ Form::text('update_date', date("Y-m-d", strtotime($price->updated_at)), array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Price KG') }}
	{{ Form::text('price_kg', Input::old('price_kg'), array('class' => 'form-control', 'placeholder' => 'Price KG')) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Price Unit') }}
	{{ Form::text('price_unit', Input::old('price_unit'), array('class' => 'form-control', 'placeholder' => 'Price Unit')) }}
</div>

{{ Form::submit('Edit Price', array('class' => 'btn btn-primary')) }}&nbsp;&nbsp;
<a href="{{ URL::to('admin/prices') }}" class="btn btn-warning">Cancel and Go Back</a>

{{ Form::close() }}

@stop
