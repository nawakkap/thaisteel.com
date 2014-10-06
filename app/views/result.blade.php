@extends('layouts.master')

@section('css')
{{ HTML::style('css/typeahead-bootstrap.css'); }}
<style type="text/css" rel="stylesheet">
body
{
        margin: 0 auto;
}
#box
{
        position: absolute;
        width: 70%;
        left: 15%;
        top: 3%;
}
</style>
@stop

@section('content')



<div id="box">
	
	<div id="page-wrapper">
	
		<div class="row" style="padding-left: 15px;padding-right: 15px;">
			{{ Form::open(array('url' => '/results', 'method' => 'GET')) }}
				<div class="form-group" style="text-align: left">
					{{ Form::label('name', 'Search Text :') }}
					{{ Form::text('search', $search, array('id' => 'search', 'class' => 'form-control', 'placeholder' => '', 'autocomplete' => 'off', 'autofocus' => 'autofocus')) }}
				</div>
				
				{{ Form::submit('Search', array('class' => 'btn btn-primary')) }}

			{{ Form::close() }}
		</div>
		<br/><br/>
		@foreach($products as $key => $value)
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						<strong>{{ $value->name }}</strong>
					</div>
					
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover dataTables-example" id="dataTable{{ $value->id }}">
								<thead>
									<tr>
										<th>Supplier</th>
										<th>Price</th>
										<th>Date/Time</th>
										<th>Add to Cart</th>
									</tr>
								</thead>
								<tbody>
								@foreach( $value->prices as $pkey => $pval )
									<tr>
										<td>{{ $pval->user->name }}</td>
										<td>{{ number_format($pval->price, 2) }}</td>
										<td>{{ date("j F Y , H:i:s", strtotime($pval->updated_at)) }}</td>
										<td>
											<button type="button" class="btn btn-info">Add To Cart</button>
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
		<div class="row">&nbsp;</div>
		@endforeach
		
	</div>
</div>
@stop

@section('javascript')
{{ HTML::script('js/plugins/dataTables/jquery.dataTables.js'); }}
{{ HTML::script('js/plugins/dataTables/dataTables.bootstrap.js'); }}
<script type="text/javascript">
	
	$('#search').typeahead({                                
		name: 'q',          
		remote: '{{ url('/search') }}?search=%QUERY',
		minLength : 1
	});
	$('.typeahead.input-sm').siblings('input.tt-hint').addClass('hint-small');
	$('.typeahead.input-lg').siblings('input.tt-hint').addClass('hint-large');
	$("span.twitter-typeahead").css("width", "100%");
</script>
@stop