@extends('layoutProject.noSideHeader')

@section('content')
<!--For Billing Information-->
	<div class="col-md-8"><br>
		<h2><br>Shipping</h2><br>
	
			<form method="POST" action="/saveShipping"> 
				{{ csrf_field() }}
				<h4><br>Shipping Service</h4><br><br>

					<table>
						@foreach ($shippings as $shipping)
						<tr>
							<td>
								<input type="radio" name="shipping" value="{{ $shipping->id}}" required="">
								<em><b>{{ $shipping->name}}: </b> 
									{{ $shipping->description}} 
									($ {{ $shipping->price}}.00)
								</em><br>
								<h6>{{ $shipping->additional_description}}</h6><br>

								<input type="hidden" name="name" value="{{ $shipping->name }}"  required=""> 

								<input type="hidden" name="description" value="{{ $shipping->description }}"  required=""> 

								<input type="hidden" name="price" value="{{ $shipping->price }}"  required=""> 
								
								<input type="hidden" name="additional_description" value="{{ $shipping->additional_description }}"  required=""> 
							</td>
						</tr>
						@endforeach
					</table>

					@include('layoutProject.errors')

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Continue to next step</button>
					</div><br>
			</form>
			<a href="/cart" class="btn btn-primary">
		    	Return to Cart
			</a><br><br><br>
	</div>

	<div class="col-md-4"><br>
	</div>


@endsection
