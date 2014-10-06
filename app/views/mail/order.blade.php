<p>
<h2>From : {{ $user->name }} {{ $user->lastname }} ({{$user->id}})</h2>
<h3>Checkout Id : {{ $checkout_id }} </h3>
<br/>

<b>Order Detail</b><br/>
<table border="1" cellpadding="5" cellspacing="5" style="border-collapse: collapse;border-width: 1px;border-color:black;">
	<tr>
		<th>Product Id</th>
		<th>Product</th>
		<th>Supplier Id</th>
		<th>Supplier Name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>File Name</th>
		<th>File Imported Date</th>
	</tr>
	@foreach($order as $key => $value) 
	<tr>
		<td>{{ $value->product_id }}</td>
		<td>{{ $value->product->name }}</td>
		<td>{{ $value->supplier_id }}</td>
		<td>{{ $value->supplier->name }} {{ $value->supplier->lastname }}</td>
		<td>{{ $value->quantity }}</td>
		<td>{{ $value->price }}</td>
		<td>{{ $value->file_imported_date }}</td>
	</tr>
	@endforeach
</table>
<p>