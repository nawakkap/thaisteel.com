@extends('admin.layout.master');

@section('topic')
Edit Mapping
@stop


@section('content')
<style type="text/css" rel="stylesheet">
.pitem {
	width: 250px;
	float: left;
	height : 40px;
	display :inline;
	color :black;
}
.pitem label {
	cursor:pointer;
}
.selected {
	background-color : #39b3d7;
	color:white;
}
#selectable .ui-selecting { background: #FECA40; }
#selectable { list-style-type: none; margin: 0; padding: 0; }
#selectable li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
</style>

{{ HTML::ul($errors->all()) }}


{{ Form::open(array('url' => 'admin/product_user_mapping/create', 'method' => 'GET')) }}
{{ Form::hidden('user', $user_selected, array('id' => 'user-selected')) }}
{{ Form::close() }}

{{ Form::open(array('url' => 'admin/product_user_mapping')) }}
<div class="form-group">
	{{ Form::label('name', 'User') }}
	{{ Form::select('user', $user_dropdown, $user_selected, array('class' => 'form-control chosen', 'id' => 'user_select', 'data-placeholder' => 'Please select a user...')) }}
</div>

@if ($isShowProductAsCheckbox) 

<div class="form-group">
	{{ Form::label('name', 'Products') }}

</div>

<div id="selectable" class="form-group ">
@foreach ($product_dropdown as $k => $p)
	
		<div class="pitem"><label>{{ Form::checkbox('product[]', $k, in_array($k, $products_of_user), array('class' => 'chk', 'onclick' => 'doHighlight()')) }} {{ $p }} </label></div>

@endforeach
<div style="clear:both;"></div>
</div>


@else
<div class="form-group">
	{{ Form::label('name', 'Product') }}
	{{ Form::select('product[]', $product_dropdown, $products_of_user, array('multiple' => 'multiple', 'class' => 'form-control chosen', 'data-placeholder' => 'Please select a product...')) }}
</div>
@endif
{{ Form::submit('Update Mapping', array('class' => 'btn btn-primary')) }}&nbsp;&nbsp;
<a href="{{ URL::to('admin/product_user_mapping') }}" class="btn btn-warning">Cancel and Go Back</a>

{{ Form::close() }}
@stop

@section('javascript')
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>

$(document).ready(function() {
	$('.chosen').chosen({ "allow_single_deselect" : true});	
	$('#user_select').change(function(evt, params) {
		$("#user-selected").val(params.selected);
		$("#user-selected").parent().submit();
	});
	doHighlight();
	$( "#selectable" ).selectable({
		selected : function(event, ui ) {
			if ($(ui.selected).hasClass("pitem")) {
				var ch = $(ui.selected).children().children();
				if (ch.attr("checked")) {
					ch.removeAttr("checked");
				} else {
					ch.attr("checked", "checked");
				}
			}
			
			doHighlight();
		}
	});
});
function doHighlight() {
	$.each($(".chk"), function() {
		if ($(this).is(":checked")) {
			$(this).parent().parent().addClass("selected");
		} else {
			$(this).parent().parent().removeClass("selected");
		}
	});
}
</script>
@stop