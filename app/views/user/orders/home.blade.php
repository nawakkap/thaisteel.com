@extends('layouts.master');

@section('css')
{{ HTML::style('css/plugins/dataTables/dataTables.bootstrap.css'); }}
<style>
ul.checkout { 
	list-style-type: none;
	margin-left : -35px;
}
ul.checkout li {padding-left: 2em; text-indent: -2em;}
ul.checkout_right { 
	list-style-type: none;
	margin-left : -35px;
	text-align: right;
}
ul.checkout_right li {text-indent: -2em;padding: 5px;}
</style>
@stop

@section('topic')
My History Orders
@stop

@section('content')
<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
		<?php 
			foreach($orders as $key => $value) {
		?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<ul class="checkout pull-left">
						<li><strong>Order Id : {{ $value["checkout_id"] }}</strong></li>
						<li>Order Date : {{ $value["order_date"] }}</li>
						<li>Order Time : {{ $value["order_time"] }}</li>
						
					</ul>
					<?php /*
					<div class="pull-right">

					<ul class="checkout_right">
						<li>Status : <strong>ACTIVE</strong></li>
					</ul>
					</div>
					*/ ?>
					<div class="clearfix"></div>
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>Product</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Sum</th>
								</tr>
							</thead>
							<tbody>
						<?php 
							$items = $value["items"];
							
							$sum = 0;
							foreach($items as $key => $item)
							{
								$sum += ($item->price * $item->quantity);
								
								$name = "";
								
								if (isset($name_mapping[$item->product_name_id]))
								{
									$name = $name_mapping[$item->product_name_id];
								} 
								else if (isset($name_mapping[$item->product_id]))
								{
									$name = $name_mapping[$item->product_id];
								}
						?>
								<tr>
									<td>{{ $name }}</td>
									<td>{{ number_format($item->price, 2) }}</td>
									<td>{{ number_format($item->quantity, 0) }}</td>
									<td>{{ number_format($item->price * $item->quantity, 2) }}</td>
								</tr>
						<?php } ?>
							<tr>
								<td align="right" colspan="3"><strong>Sum : </strong></td>
								<td class="alert-warning"><strong>{{ number_format($sum, 2) }}</strong></td>
							</tr>
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
		<?php } ?>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
</div>
@stop

@section('javascript')
<!-- Page-Level Plugin Scripts - Tables -->
{{ HTML::script('js/plugins/dataTables/jquery.dataTables.js'); }}
{{ HTML::script('js/plugins/dataTables/dataTables.bootstrap.js'); }}
@stop