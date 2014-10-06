@extends('admin.layout.master');

@section('topic')
Update Price
@stop


@section('content')
@if (Session::has('errors'))
<div class="alert alert-danger">
{{ HTML::ul($errors->all()) }}
</div>
@endif

{{ Form::open(array('url' => 'admin/prices/create', 'method' => 'GET')) }}
{{ Form::hidden('user', $user_selected, array('id' => 'user-selected')) }}
{{ Form::close() }}

{{ Form::open(array('url' => 'admin/prices')) }}

<div class="form-group">
	{{ Form::label('name', 'User') }}
	{{ Form::select('user', $user_dropdown, $user_selected, array('class' => 'form-control chosen', 'id' => 'user_select', 'data-placeholder' => 'Please select a user...','autofocus' => 'autofocus' )) }}
</div>

<div class="form-group">
	{{ Form::label('name', 'Update Date') }}
	{{ Form::text('update_date', date('Y-m-d'), array('class' => 'form-control', 'placeholder' => 'Update Date', 'id' => 'update_date')) }}
</div>

<br/><h3>Products</h3><br/>

@foreach ($products_of_user as $product)
<div class="form-group">
	{{ Form::label('name',  $product['name'] ) }}
	{{ Form::text( $product['id'] . "_kg", Input::old($product['id'] . "_kg" ), array('class' => 'form-control', 'placeholder' => 'Price KG', 'id' => 'update_date')) }}<br/>
	{{ Form::text( $product['id'] . "_unit", Input::old($product['id'] . "_unit"), array('class' => 'form-control', 'placeholder' => 'Price Unit', 'id' => 'update_date')) }}
</div>
@endforeach

{{ Form::submit('Update Price', array('class' => 'btn btn-primary')) }}&nbsp;&nbsp;
<a href="{{ URL::to('admin/prices') }}" class="btn btn-warning">Cancel and Go Back</a>




{{ Form::close() }}
@stop

@section('javascript')
<!-- Page-Level Plugin Scripts - Tables -->
{{ HTML::script('js/bootstrap-datepicker.js'); }}
<script>
$(document).ready(function() {
	$('#update_date').datepicker({
		format: "yyyy-mm-dd",
		todayBtn: "linked",
		autoclose: true,
		todayHighlight: true
	});
	
	$('.chosen').chosen({ "allow_single_deselect" : true});	
	$('#user_select').change(function(evt, params) {
		$("#user-selected").val(params.selected);
		$("#user-selected").parent().submit();
	});
});
</script>
@stop