<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title>ThaiSteel.com :: Admin</title>

    <!-- Core CSS - Include with every page -->
	{{ HTML::style('css/bootstrap.min.css'); }}
	{{ HTML::style('font-awesome/css/font-awesome.css'); }}

    <!-- SB Admin CSS - Include with every page -->
	{{ HTML::style('css/sb-admin.css'); }}
</head>

<body>
	<div class="container">
	
		@if(Session::has('message'))
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="alert alert-danger">{{ Session::get('message') }}</div>
			</div>
		</div>
		<div class="clearfix"></div>
		@endif
	
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
						{{ Form::open(array('url' => 'admin_login')) }}
                            <fieldset>
                                <div class="form-group">
									{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com', 'class'=> 'form-control', 'autofocus'=>'autofocus')) }}
                                </div>
                                <div class="form-group">
									{{ Form::password('password', array('placeholder'=>'Password', 'class' => 'form-control')) }}
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
								<input type="submit" value="Login" class="btn btn-lg btn-success btn-block" />
                            </fieldset>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	

    <!-- Core Scripts - Include with every page -->
	{{ HTML::script('js/jquery-1.10.2.js'); }}
	{{ HTML::script('js/bootstrap.min.js'); }}
	{{ HTML::script('js/plugins/metisMenu/jquery.metisMenu.js'); }}

    <!-- SB Admin Scripts - Include with every page -->
	{{ HTML::script('js/sb-admin.js'); }}

</body>

</html>
