@extends('layoutProject.noSideHeader')

@section('content')
<!--For Billing Information-->
	<div class="col-md-8"><br>
		<h2><br>Payment Details</h2><br>
			<form method="POST" action="/saveShippingInfo"> 
				{{ csrf_field() }}
					
				<h4><br>Shipping Address</h4><br>

					<div class="form-group">
						<input type="text" placeholder="Country" class="form-control" id="country" name="country">
					</div>
					<div class="form-group">
						<input type="text" placeholder="Full Name" class="form-control" id="full_name" name="full_name" required>
					</div>
					<div class="form-group">
						<input type="text" placeholder="Address" class="form-control" id="address" name="address" required>
					</div>
					<div class="form-group">
						<input type="text" placeholder="Surburb" class="form-control" id="surburb" name="surburb" required>
					</div>
					<div class="form-group">
						<input type="text" placeholder="City" class="form-control" id="city" name="city" required>
					</div>
					<div class="form-group">
						<input type="text" placeholder="Province" class="form-control" id="province" name="province" required>
					</div>
					<div class="form-group">
						<input type="text" placeholder="Postal Code" class="form-control" id="postal_code" name="postal_code" required>
					</div>
					<div class="form-group">
						<input type="text" placeholder="Phone" class="form-control" id="phone" name="phone" required>
					</div>

					@include('layoutProject.errors')

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Proceed to Shipping</button>
					</div><br>
			</form>
			<a href="/cart" class="btn btn-primary">
		    	Return to Cart
			</a><br><br><br>
	</div>

	
	<div class="col-md-4"><br>
	</div>


@endsection
