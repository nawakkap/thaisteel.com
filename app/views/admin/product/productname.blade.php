@extends('admin.layout.master');

@section('css')
{{ HTML::style('css/plugins/dataTables/dataTables.bootstrap.css'); }}
@stop

@section('topic')
{{ $product->name }}
@stop

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<a class="btn btn-small btn-info" data-toggle="modal" data-target="#myModal">New Name</a>
			</div>
			
			<!-- Modal -->
			{{ Form::open(array('url' => 'admin/product_names')) }}
			{{ Form::hidden('product_id', $product->id) }}
			<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">New Product Name</h4>
						</div>
						<div class="modal-body">
						
							<div class="form-group">
								{{ Form::label('name', 'Name') }}
								{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Product name', 'autofocus' => 'autofocus')) }}
							</div>
						
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Create</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			{{ Form::close() }}
			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>id</th>
								<th>Name</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
						@foreach($names as $key => $value)
							<tr>
								<th>{{ $value->id }}</th>
								<td>{{ $value->name }}</td>
								<td>
									<a class="btn btn-small btn-warning" data-toggle="modal" data-target="#myModal{{ $value->id }}">Edit</a>
									<!-- Modal -->
									{{ Form::model($value, array('route' => array('admin.product_names.update', $value->id), 'method' => 'PUT')) }}
									<div class="modal fade" id="myModal{{ $value->id }}" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title" id="myModalLabel">Edit Product Name</h4>
												</div>
												<div class="modal-body">
												
													<div class="form-group">
														{{ Form::label('name', 'Name') }}
														{{ Form::text('name', $value->name, array('class' => 'form-control', 'placeholder' => 'Product name', 'autofocus' => 'autofocus')) }}
													</div>
												
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Update</button>
												</div>
											</div><!-- /.modal-content -->
										</div><!-- /.modal-dialog -->
									</div><!-- /.modal -->
									{{ Form::close() }}
								</td>
								<td>
								<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
								<!-- we will add this later since its a little more complicated than the other two buttons -->
								{{ Form::open(array('url' => 'product_names/' . $value->id)) }}
									{{ Form::hidden('_method', 'DELETE') }}
									{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
								{{ Form::close() }}
								
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@stop


@section('javascript')
<!-- Page-Level Plugin Scripts - Tables -->
{{ HTML::script('js/plugins/dataTables/jquery.dataTables.js'); }}
{{ HTML::script('js/plugins/dataTables/dataTables.bootstrap.js'); }}
<script>
$(document).ready(function() {
	$('#dataTables-example').dataTable();
});
</script>
@stop