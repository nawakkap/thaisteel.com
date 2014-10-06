@extends('admin.layout.master');

@section('css')
{{ HTML::style('css/plugins/dataTables/dataTables.bootstrap.css'); }}
@stop

@section('topic')
Orders
@stop

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>Order</th>
								<th>User</th>
								<th>Net Total</th>
								<th>Date/Time</th>
								<th>Detail</th>
							</tr>
						</thead>
						<tbody>
						@foreach($orders as $key => $value) 
							<tr>
								<td>{{ $value->checkout_id }}</td>
								<td>{{ $value->user_name }}</td>
								<td><strong>{{ number_format($value->total, 2) }}</strong></td>
								<td>{{ $value->created_at }}</td>
								<td>
									<a class="btn btn-small btn-info" href="{{ URL::to('admin/orders/' . $value->checkout_id) }}">Detail</a>
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
@stop


@section('javascript')
<!-- Page-Level Plugin Scripts - Tables -->
{{ HTML::script('js/plugins/dataTables/jquery.dataTables.js'); }}
{{ HTML::script('js/plugins/dataTables/dataTables.bootstrap.js'); }}
{{ HTML::script('js/bootstrap-datepicker.js'); }}
<script>
$(document).ready(function() {
	$('#dataTables-example').dataTable();
});
</script>
@stop