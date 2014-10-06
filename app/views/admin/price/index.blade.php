@extends('admin.layout.master');

@section('css')
{{ HTML::style('css/plugins/dataTables/dataTables.bootstrap.css'); }}
@stop

@section('topic')
Price
@stop

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{{ Form::open(array('url' => 'admin/prices/create', 'method' => 'GET')) }}
{{ Form::hidden('user', null, array('id' => 'user-selected')) }}
{{ Form::close() }}


<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<a class="btn btn-small btn-info" onclick="onNewPrice()">Update Price</a>
				<a class="btn btn-small btn-warning" data-toggle="modal" data-target="#myModal">Import Price</a>
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
								<th>Product Name</th>
								<th>Price KG</th>
								<th>Price Unit</th>
								<th>User</th>
								<th>Date/Time</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
						@foreach($prices as $key => $value)
							<tr class="odd gradeX">
								<td>{{ $value->product->name }}</td>
								<td>{{ number_format( $value->price_kg , 2) }}</td>
								<td>{{ number_format( $value->price_unit , 2) }}</td>
								<td>{{ $value->user->name }}</td>
								<td>{{ date("d/m/Y", strtotime($value->updated_at)) }}</td>
								<td><a class="btn btn-small btn-warning" href="{{ URL::to('admin/prices/' . $value->id . '/edit') }}">Edit</a></td>
								<td>
								<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
								<!-- we will add this later since its a little more complicated than the other two buttons -->
								{{ Form::open(array('url' => 'admin/prices/' . $value->id)) }}
									{{ Form::hidden('_method', 'DELETE') }}
									{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
								{{ Form::close() }}
								
								</td>
							</tr>
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

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Please select a file to be imported...</h4>
      </div>
	  {{ Form::open(array('url' => 'admin/prices/import', 'files' => true)) }}
      <div class="modal-body">
		<div class="form-group">
			{{ Form::label('name', 'User') }}
			{{ Form::select('user', $user_dropdown_without_all, '', array('class' => 'form-control chosen', 'id' => 'user_select', 'data-placeholder' => 'Please select a user...','autofocus' => 'autofocus' )) }}
		</div>
		
		<div class="form-group">
			{{ Form::label('name', 'Date') }}
			{{ Form::text('import_date', date('Y-m-d'), array('class' => 'form-control chosen', 'id' => 'import_date', 'data-placeholder' => 'Please select a date' )) }}
		</div>
		
		<div class="form-group">
			{{ Form::label('name', 'File (.xls)') }}
			{{ Form::file('xls', array('class' => 'form-control' , 'accept' => "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")) }}
		</div>
	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
	  {{ Form::close() }}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@stop

@section('javascript')
<!-- Page-Level Plugin Scripts - Tables -->
{{ HTML::script('js/plugins/dataTables/jquery.dataTables.js'); }}
{{ HTML::script('js/plugins/dataTables/dataTables.bootstrap.js'); }}
{{ HTML::script('js/bootstrap-datepicker.js'); }}
<script>
$(document).ready(function() {
	$('#dataTables-example').dataTable();
	
	$('#user_select').chosen({ "allow_single_deselect" : true}).change(function(evt, params) {
		var text = $("#user_select option[value='" + params.selected + "']").text();
		if (params.selected == '') {
			text = '';
		}
		$("input[type=search]").val(text).trigger("search");
		$("#user-selected").val(params.selected);
	});
	
	$('#import_date').datepicker({
		format: "yyyy-mm-dd",
		todayBtn: "linked",
		autoclose: true,
		todayHighlight: true
	});
	
	// First Initial Value in Search Box
	$("#user-selected").val($("#user_select").val());
	// $("input[type=search]").val($("#user_select option[value='" + $("#user_select").val() + "']").text()).trigger("search");
});
function onNewPrice() {
	$("#user-selected").parent().submit();
}
function onImportPrice() {
	
}
</script>
@stop