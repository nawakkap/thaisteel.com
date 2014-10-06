@extends('admin.layout.master');

@section('css')
{{ HTML::style('css/plugins/dataTables/dataTables.bootstrap.css'); }}
@stop

@section('topic')
Users
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
				<a class="btn btn-small btn-info" href="{{ URL::to('admin/users/create') }}">New User</a>
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>E-mail</th>
								<th>User Type</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
						@foreach($users as $key => $value)
							<tr class="odd gradeX">
								<td>{{ $value->id }}</td>
								<td>{{ $value->name }}</td>
								<td>{{ $value->email }}</td>
								<td>{{ $user_type[$value->permission] }}</td>
								<td><a class="btn btn-small btn-warning" href="{{ URL::to('admin/users/' . $value->id . '/edit') }}">Edit</a></td>
								<td>
								<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
								<!-- we will add this later since its a little more complicated than the other two buttons -->
								{{ Form::open(array('url' => 'admin/users/' . $value->id)) }}
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