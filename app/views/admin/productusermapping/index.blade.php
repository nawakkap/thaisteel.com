@extends('admin.layout.master');

@section('css')
{{ HTML::style('css/plugins/dataTables/dataTables.bootstrap.css'); }}
@stop

@section('topic')
Products of Users
@stop

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{{ Form::open(array('url' => 'admin/product_user_mapping/create', 'method' => 'GET')) }}
{{ Form::hidden('user', null, array('id' => 'user-selected')) }}
{{ Form::close() }}

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="form-group">
					<a class="btn btn-small btn-info" onclick="onEditMapping()">Edit Mapping</a>
				</div>
			</div>

			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="form-group">
					<label>Please select a User for filter</label>
					{{ Form::select('user', $user_dropdown, null, array('class' => 'form-control chosen', 'id' => 'user_select', 'data-placeholder' => 'Please select a user...')) }}
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>User Id</th>
								<th>Name</th>
								<th>Product Name</th>
							</tr>
						</thead>
						<tbody>
						@foreach($users as $key => $value)
							@foreach($value->products() as $pkey => $pvalue)
							<tr>
								<td>{{ $value->id }}</td>
								<td>{{ $value->name }}</td>
								<td>{{ $pvalue->name }}</td>
							</tr>
							@endforeach
						@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.table-responsive -->
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
@stop

@section('javascript')
<!-- Page-Level Plugin Scripts - Tables -->
{{ HTML::script('js/plugins/dataTables/jquery.dataTables.js'); }}
{{ HTML::script('js/plugins/dataTables/dataTables.bootstrap.js'); }}
<script>
$(document).ready(function() {
	$('#dataTables-example').dataTable();
	$('#user_select').chosen({ "allow_single_deselect" : true}).change(function(evt, params) {
		if (params.selected) {
			var text = $("#user_select option[value='" + params.selected + "']").text();
			$("input[type=search]").val(text);
		} else {
			$("input[type=search]").val('');
		}
		$("input[type=search]").trigger("search");
		$("#user-selected").val(params.selected);
	});
	
	// First Initial Value in Search Box
	$("#user-selected").val($("#user_select").val());
	// $("input[type=search]").val($("#user_select option[value='" + $("#user_select").val() + "']").text()).trigger("search");
});
function onEditMapping() {
	$("#user-selected").parent().submit();
}
</script>
@stop