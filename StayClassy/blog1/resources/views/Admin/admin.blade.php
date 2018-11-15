@extends('layouts.Admin-Home')
@section('title')
	Admin DashBoard
@endsection

@section('container')
	<div class="col-md-8 m-auto"><br><br>
		<div class="row">
			<div class="col-md-12">
					<div class="card">
						<div class="card-header">Dash Board</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-3">
									<div class="card">
										<div class="card-header">Current Order</div>
										<div class="card-body">
											<img src="images/admin/order1.png">
										</div>
										<div class="card-footer">
											<a href="{{route('order.order')}}">Details....</a>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card">
										<div class="card-header">Total Order</div>
										<div class="card-body">
											<img id="cart1" src="images/admin/cart4.png">
										</div>
										<div class="card-footer">
											<a href="{{route('order.order')}}">Details....</a>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card">
										<div class="card-header">Total Delivered</div>
										<div class="card-body">
											<img src="images/admin/cart6.png">
										</div>
										<div class="card-footer">
											<a href="">Details....</a>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card">
										<div class="card-header">Total Returnded</div>
										<div class="card-body">
											<img src="images/admin/cart1.png">
										</div>
										<div class="card-footer">
											<a href="">Details....</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div><br><br>
		<div class="row">
		<dir class="col-md-12">
			<div class="card">
				<div class="card-header"><h2>Latest Order</h2></div>
				<div class="card-body">
					<table class="table table-bordered table-md table-striped">
						<tr>
							<th>Image</th>
							<th>Product Name</th>
							<th>Product Code</th>
							<th>Customer Name</th>
							<th>Mobile 1</th>
							<th>Address</th>
							<th>Order Date</th>
							<th>Status</th>
							<th>Details</th>
						</tr>
						@foreach($order as $order)
						<tr>
							<td><img src="{{asset('images')}}/{{$order->image1}}" class="ig"></td>
							<td>{{$order->product_name}}</td>
							<td>{{$order->code}}</td>
							<td>{{$order->name}}</td>
							<td>{{$order->mobile1}}</td>
							<td>{{$order->address}}</td>
							<td>{{$order->date}}</td>
							<td>{{$order->status}}</td>
							<td><a href="{{route('order.orderdetails',[$order->id])}}">Show</a></td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</dir>
	</div>
	</div>
@endsection