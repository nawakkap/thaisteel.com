@extends('admin.layout.master');

@section('css')
{{ HTML::style('css/plugins/dataTables/dataTables.bootstrap.css'); }}
@stop

@section('topic')
Order Detail
@stop


@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Order Id : <strong>{{ $info->checkout_id }}</strong> <br/>
				Order Date/Time : <strong>{{ $info->created_at }}</strong> <br/>
				Net Total : <strong>{{ number_format($sum, 2) }}</strong> <br/>
				User : <strong>{{ $user->name . " " . $user->last_name }}</strong>
			</div>
		
			<div class="panel-body">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>Product</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
					@foreach($orders as $key => $value)
						<tr>
							<td>{{ $value->product_name }}</td>
							<td>{{ number_format($value->price, 2) }}</td>
							<td>{{ number_format($value->quantity, 0) }}</td>
							<td>{{ number_format($value->price * $value->quantity, 2) }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				
				<a class="btn btn-small btn-warning" href="{{ URL::to('admin/orders') }}">Back</a>
			</div>
			
			
		
		</div>
	</div>
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