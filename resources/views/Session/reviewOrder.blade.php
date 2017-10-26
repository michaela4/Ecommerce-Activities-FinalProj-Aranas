@extends('layoutProject.noSideHeader')

@section('content')
<!--For Billing Information-->
	<div class="col-md-12"><br>
		<h2><br>Review Order</h2>
		<h5><em><br>Review your order before continuing.</em></h5><br><br>
			<h3 align="center">SHOPPING CART CONTENTS</h3><hr><br>

		        <br><table class="table table-striped">
	                <tr>
	                	<td></td>
	                    <td>PRODUCT DESCRIPTION</td>
	                    <td>QUANTITY</td>
	                    <td>PRICE</td>
	                    <td>TOTAL</td>
	                    <td></td>
	                </tr>                
	                <?php $total = 0; ?>
	                @foreach ($cartItems as $cartItem)
	                	<tr>
	                		<td>
	                			<img src="{{ URL::to('/img/k'.$cartItem->product_id.'.jpg') }}" style="width: 150px; height: 200px;">
	                		</td>
	                		<td> 				                			
	                			{{ $cartItem->description }}
	                		</td>
	                		<td>{{ $cartItem->pivot->quantity }}</td>
	                		<td>{{ $cartItem->price}} </td>
	                		<td>
	                			$ {{ $cartItem->price * $cartItem->pivot->quantity }}
	                			<?php $total = $total + ($cartItem->price * $cartItem->pivot->quantity) ; ?>
	                		</td>
	                	</tr>
	                @endforeach 
	            </table><hr>

	            <div class="container">
	            	<div class="row">
			            <div class="col-md-8" ></div>
			            <div class="col-md-4" align="right">
			            	<table class="table">
			            		<tr><td></td><td></td></tr>
			            		<tr>
			            			<td><b>Subtotal</b></td>
			            			<td> $ <?php echo $total; ?></td>
			            		</tr>
			            		<tr>
			            			<?php $overallTotal = $total; ?>
			            			<td>{{ $shipMethod->name }} {{ $shipMethod->description }}</td><br>
			            			<td>{{ $shipMethod->price }} </td>
			            			<?php $overallTotal = $total + $shipMethod->price; ?>
			            		</tr>
			            		<tr>
			            			<td><b>Order Total</b></td>
			            			<td><b>$<?php echo $overallTotal; ?></b></td>
			               		</tr>
			            	</table>
			            </div>
		        	</div>
				</div>	
				
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<table class="table">
								<th>Billing Information</th>
								<tbody>
									@foreach ($billingInfos as $billingInfo)	
										<tr><td>{{ $billingInfo->country }}</td></tr>
										<tr><td>{{ $billingInfo->full_name }}</td></tr>
										<tr><td>{{ $billingInfo->address }}</td></tr>
										<tr><td>{{ $billingInfo->surburb }}</td></tr>
										<tr><td>{{ $billingInfo->city }}</td></tr>
										<tr><td>{{ $billingInfo->province }}</td></tr>
										<tr><td>{{ $billingInfo->postal_code }}</td></tr>
										<tr><td>{{ $billingInfo->phone }}</td></tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<div class="col-md-6">
							<table class="table">
								<th>Shipping Information</th>
								<tbody>
									@foreach ($shippingInfos as $shippingInfo)
										<tr><td>{{ $shippingInfo->country }}</td></tr>
										<tr><td>{{ $shippingInfo->full_name }}</td></tr>
										<tr><td>{{ $shippingInfo->address }}</td></tr>
										<tr><td>{{ $shippingInfo->surburb }}</td></tr>
										<tr><td>{{ $shippingInfo->city }}</td></tr>
										<tr><td>{{ $shippingInfo->province }}</td></tr>
										<tr><td>{{ $shippingInfo->postal_code }}</td></tr>
										<tr><td>{{ $shippingInfo->phone }}</td></tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>

			<div>
				<h3 align="center">PAYMENT</h3><hr><br>
					<form method="POST" action="/finish"> 
						{{ csrf_field() }}
						<ul>
							<li><label>Cash on Delivery (COD)</label><br></li>
						</ul>

                    	<div class="form-group">
							<button type="submit" class="btn btn-primary">Continue to next step</button>
						</div><br>	
					</form>
			</div>
			<br><br>
			<a href="/cart" class="btn btn-primary"> Return to Cart </a><br><br><br>
	</div>

	<div class="col-md-4"><br>
	</div>

@endsection
