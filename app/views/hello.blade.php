@extends('layouts.master')

@section('css')
{{ HTML::style('css/typeahead-bootstrap.css'); }}
<style type="text/css" rel="stylesheet">
#box
{
	position :relative;
	width: 80%;
	left: 20%;
}
.selected {
	border : 0;
	-webkit-box-shadow: none;
	box-shadow: none;
}
</style>
@stop

@section('content')
{{ Form::open(array('url' => 'search', 'id' => "my_form")) }}
<input type="hidden" id="cmd" name="cmd" value="ADD_TO_CART" />
<input type="hidden" id="tid" class="tid" name="tid" value="{{ $tid }}" />
<input type="hidden" name="supplier_id" value="{{ $supplier_id }}" />
<input type="hidden" id="product_hidden" name="product" value="{{ Input::old('product') }}" />
<input type="hidden" id="quantity_hidden" name="quantity" value="{{ Input::old('quantity') }}" />
<input type="hidden" id="price_hidden" name="price" value="{{ $price }}" />
{{ Form::close() }}

{{ Form::open(array('url' => 'cart_remove', 'id' => "cart_remove_form")) }}
<input type="hidden" class="row_id" name="row_id" value="" />
{{ Form::close() }}

{{ Form::open(array('url' => 'cart_update', 'id' => "cart_update_form")) }}
<input type="hidden" class="row_id" name="row_id" value="" />
<input type="hidden" id="quantity_update" name="quantity" value="" />
{{ Form::close() }}

{{ Form::open(array('url' => 'cart_destroy', 'id' => "cart_destroy_form")) }}
{{ Form::close() }}

@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div id="box">
	
	{{ Form::open(array('url' => 'order/checkout', 'id' => "cart_checkout")) }}
	<div class="form-inline checkout_item" style="margin-top : 5px;">
		<div class="form-group" style="width: 300px;text-align:center;">
			<strong>สินค้า</strong>
		</div>
		<div class="form-group" style="width: 100px;text-align:center;">
			<strong>จำนวน</strong>
		</div>
		<div class="form-group" style="width: 100px;text-align:center;">
			<strong>ราคา</strong>
		</div>
		<div class="form-group" style="width: 100px;text-align:center;">
			<strong>มูลค่า</strong>
		</div>
	</div>
	<?php 
		$index = 2;
		foreach($carts as $row) { 
	
			$product_id = $row->options->has('p') ? $row->options->p->id : '';
			if (! $product_id) {
				continue;
			}
			$rowid = $row->rowid;
			$name = $row->options->has("n") ? $row->options->n->name : "";
			$sub_price = $row->price;
			$quantity = $row->qty;
			$sub_total = $row->subtotal;
	?>
	<div class="form-inline checkout_item" style="margin-top : 5px;">
		<div class="form-group">
			<input type="hidden" value="<?php echo $product_id; ?>" />
			<input type="text" style="min-width: 300px" class="form-control product selected" value="<?php echo $name; ?>" readonly="readonly" placeholder="Product">
		</div>
		<div class="form-group">
			<input type="number" style="width: 100px;"  class="form-control quantity" data-price="<?php echo $sub_price; ?>" name="quantity_<?php echo $index; ?>" id="quantity_<?php echo $index; ?>" value="<?php echo $quantity; ?>"  max="10000" placeholder="จำนวน" min="1">
		</div>
		<div class="form-group">
			<input type="text" style="width: 100px;" class="form-control price selected" readonly="readonly" name="price_<?php echo $index; ?>" value="<?php echo number_format($sub_price, 2); ?>" placeholder="ราคา">
		</div>
		<div class="form-group">
			<input type="text" style="width: 100px;"  class="form-control total selected" id="total_<?php echo $index; ?>" value="<?php echo number_format($sub_total, 2); ?>" readonly="readonly" placeholder="Total">
		</div>
		<button type="button" onclick="onUpdate(this, '<?php echo $rowid; ?>', <?php echo $index; ?>)" class="btn btn-warning" style="width: 75px">แก้ไข</button>
		<button type="button" onclick="onDelete(this, '<?php echo $rowid; ?>')" class="btn btn-danger" style="width: 75px">ลบ</button>
	</div>
	<?php $index++; } ?>
	{{ Form::close() }}
	<br/>
	{{ Form::open(array('url' => '/search', 'id' => "user_command_form")) }}
	<input type="hidden" id="cmd" name="cmd" value="CHECK_PRICE" />
	<input type="hidden" name="tid" class="tid" value="{{ $tid }}" />
	<div class="form-inline">
		<div class="form-group">
			{{ Form::select('product', $product_dropdown, Input::old('product'), array('id' => 'product', 'class' => 'form-control chosen', 'data-placeholder' => 'กรุณาเลือกสินค้า...', 'style' => 'min-width : 300px;width:300px;')) }}
		</div>
		<div class="form-group">
			<input type="number" style="width: 100px;" name="quantity" onchange="onQuantityChange()" class="form-control quantity" value="{{ Input::old('quantity') }}" min="1" max="10000" id="quantity_1" placeholder="จำนวน">
		</div>
		<div class="form-group">
			<input type="text" style="width: 100px;" class="form-control price" id="price" readonly="readonly" value="{{ number_format($price, 2) }}" placeholder="ราคา">
		</div>
		<div class="form-group">
			<input type="text" style="width: 100px;" class="form-control total" id="total_1" value="{{ number_format($total, 2) }}" readonly="readonly" placeholder="Total">
		</div>
		<button type="button" onclick="onCheckPrice()" class="btn btn-warning" style="width: 100px">สอบถามราคา</button>
		<?php if ($checked) { ?>
		<button type="button" id="addcart_button" onclick="onAdd()" class="btn btn-info" style="width: 100px">ใส่รถบรรทุก</button>
		<?php } ?>
	</div>
	{{ Form::close() }}
	<br/>
	<?php if (count($carts) > 0) { ?>
	<div>
		<button id="checkout_button" type="button" onclick="doCheckout()" class="btn btn-primary" data-toggle="modal" data-target="#processing-modal" style="min-width: 500px;width:70%;">สั่งซื้อ</button>
	</div>
	<br/>
	<div>
		<button id="clear_button" onclick="onDestory()" type="button" class="btn btn-danger" style="min-width: 500px;width:70%;">ล้างข้อมูล</button>
	</div>
	<?php } ?>
	
	
</div>

<!-- Static Modal -->
<div class="modal modal-static fade" id="processing-modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <img src="http://www.travislayne.com/images/loading.gif" class="icon" />
                    <h4>โปรดรอสักครู่... </h4>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('javascript')
<script type="text/javascript" src="js/jquery.jstepper.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".quantity").jStepper({minValue:{{$minimum_quantity}}, maxValue:{{$maximum_quantity}}, minLength:1});
});
$('.chosen').chosen({ 
	"allow_single_deselect" : true, 
	'search_contains' : true,
}).change(function(event, param) {
	$(".tid").val("");
	$("#addcart_button").remove();
});
function onCheckPrice() {
	$(".tid").val("");
	var val = $(".chosen").val();
	var quantity = $("#quantity_1").val();
	
	if (val && quantity) {
		$("#cmd").val("CHECK_PRICE");
		$("#user_command_form").submit();
	}
}
<?php /*
$('.chosen').on('change', function(evt, params) {

	var val = params.selected;
	if (val) {
		params = {
			"product" : val
		};
		$("#price").val("Retreiving Price...");
		$.get('{{ URL::to("api/price_by_product_name"); }}', params, function(data) {
			if (data.success) {
				$("#price").val(data.message.price);
				$("#quantity_1").data("price", data.message.price);
			} else {
				$("#price").val("");
				$("#quantity_1").data("price", "");
			}
			
			doCalculatePrice();
		}, 'json');
	} else {
		$("#price").val("");
		$("#quantity_1").data("price", "");
		doCalculatePrice();
	}
});
function get_price()
{
	var val = $(".chosen").val();
	// var val = params.selected;
	if (val) {
		params = {
			"product" : 90
		};
		$("#price").val("Retreiving Price...");
		$.get('{{ URL::to("api/price_by_product_name"); }}', params, function(data) {
			if (data.success) {
				$("#price").val(data.message.price);
				$("#quantity_1").data("price", data.message.price);
			} else {
				$("#price").val("");
				$("#quantity_1").data("price", "");
			}
			
			doCalculatePrice();
		}, 'json');
	} else {
		$("#price").val("");
		$("#quantity_1").data("price", "");
		doCalculatePrice();
	}
}

function doCalculatePrice() {
	$.each($(".quantity"), function(index) {
		var price = $(this).data("price");
		var total = 0;
		if (price) {
			price = parseFloat(price);
			quantity  = $(this).val();
			quantity = parseFloat(quantity);
		
			total = quantity * price;
		} else {
			total = 0;
		}
		$("#total_" + (index + 1)).val(total);
	});
}
$(".quantity").keypress(function (e) {
	//if the letter is not digit then display error and don't type anything
	if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
	//display error message
	$("#errmsg").html("Digits Only").show().fadeOut("slow");
		return false;
	}
}).focus(function(){
	$(this).select();
});
*/ ?>
function onQuantityChange() {
	$(".tid").val("");
	$("#addcart_button").remove();
}
function is_numeric (mixed_var) {
  // From: http://phpjs.org/functions
  // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +   improved by: David
  // +   improved by: taith
  // +   bugfixed by: Tim de Koning
  // +   bugfixed by: WebDevHobo (http://webdevhobo.blogspot.com/)
  // +   bugfixed by: Brett Zamir (http://brett-zamir.me)
  // *     example 1: is_numeric(186.31);
  // *     returns 1: true
  // *     example 2: is_numeric('Kevin van Zonneveld');
  // *     returns 2: false
  // *     example 3: is_numeric('+186.31e2');
  // *     returns 3: true
  // *     example 4: is_numeric('');
  // *     returns 4: false
  // *     example 4: is_numeric([]);
  // *     returns 4: false
  return (typeof mixed_var === 'number' || typeof mixed_var === 'string') && mixed_var !== '' && !isNaN(mixed_var);
}
function onAdd() {
	// doCheckCheckOutButton();
	var price = $("#price").val();
	var quantity = $("#quantity_1").val();
	
	price = price.replace(/,/g, '');
	
	if (is_numeric(price) && is_numeric(quantity))
	{
		$("#my_form").submit();
	}
}

function doCheckCheckOutButton() {
	if ($(".checkout_item").size() > 0) {
		$("#checkout_button").show();
	} else {
		$("#checkout_button").hide();
	}
}

function onUpdate(obj, rowid, index) {
	$(".row_id").val(rowid);
	$(".form-control").attr("disabled", "disabled");
	$(".btn").attr("disabled", "disabled");
	$("#quantity_update").val($("#quantity_" + index).val());
	$("#cart_update_form").submit();
	$(obj).parent().html("Updating...").css("padding", "5px").attr("class", "alert-info");
}
function onDelete(obj, rowid) {
	$(".row_id").val(rowid);
	$(obj).parent().html("Removing...").css("padding", "5px").attr("class", "alert-danger");
	doCheckCheckOutButton();
	$(".form-control").attr("disabled", "disabled");
	$(".btn").attr("disabled", "disabled");
	$("#cart_remove_form").submit();
}
function onDestory() {
	$(".form-control").attr("disabled", "disabled");
	$(".btn").attr("disabled", "disabled");
	$("#cart_destroy_form").submit();
}
function doCheckout() {
	$("#cart_checkout").submit();
}
</script>
@stop