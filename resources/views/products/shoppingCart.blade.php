@extends('layoutProject.noSideHeader')

@section('content')
	<h1><br>SHOPPING CART</h1>
	<div class="col-sm-12 blog-main">
		<section class="no-padding" id="portfolio">
	        <div class="container-fluid">

	        @if (Session::has('success_message'))
	            <div class="alert alert-success">
	              {{ Session::get('success_message')}}
	            </div>
          	@endif

          	@if (sizeof($cartItems) > 0)
		        <br><table class="table table-striped">
	                <tr>
	                	<td></td>
	                    <td>PRODUCT DESCRIPTION</td>
	                    <td>QUANTITY</td>
	                    <td>PRICE</td>
	                    <td></td>
	                </tr>                
	                @foreach ($cartItems as $cartItem)
	                	<tr>
	                		<td>
	                			<img src="{{ URL::to('/img/k'.$cartItem->product_id.'.jpg') }}" style="width: 275px; height: 325px;">
	                		</td>
	                		<td>
	                			{{ $cartItem->description }}
	                		</td>
	                		<td>{{ $cartItem->pivot->quantity }}</td>
	                		<td>
	                			$ {{ $cartItem->price * $cartItem->pivot->quantity }} 
	                		</td>
	                		<td>
	                			<form action="{{ url('cart', $cartItem->id) }}" method="POST">
	                				{{ csrf_field() }}
	                				<input type="hidden" name="_method" value="DELETE">
		                			<button role="submit" class="btn btn-primary btn-l" >
										Remove
									</button>	                				
	                			</form>

							</td>
	                	</tr>
	                @endforeach 
	            </table>
	        <br>
	        <hr> <br>

	        <h6>SUBTOTAL: <strong>${{ $totalAmount }}</strong></h6>
	        @else
	        	<br><br><h2>Your Cart is Empty.</h2><br><br>
	        	<br><br><br><br><br><br><br><br>Subtotal :<strong>$0.00</strong><br>
	        @endif
	        <h6>
		        <em>
		        	*Doesn't include shipping cost. <strong>FREE SHIPPING</strong> for orders made in PAMPANGA. <br>
		        </em>
	        </h6>
			<br><br>

	        <div class="row">
		        <div class="col-md-3">
		        	<a href="/productList" class="btn btn-primary btn-xl" >
						Continue Shopping
					</a>
		        </div>

		        <div class="col-md-3">
		        	<a href="/clear" class="btn btn-primary btn-xl" >
			    		Clear Cart
					</a>
		        </div>

		        @if (sizeof($cartItems) > 0)
			        <div class="col-md-3">
			        	<!--to billing info first ATTACH CODE HERE FORM PAYPAL, REMOVE ALL-->
			        	<a href="/paymentDetailsToBill" class="btn btn-primary btn-xl" >
				    		COD
						</a>
			        </div>
			    @endif


		        @if (sizeof($cartItems) > 0)
			        <div class="col-md-3">
			        	<label>
			        		<em>Check Out through</em>
			        		@include('layoutProject.paypal')
			        	</label>
			        	
			        </div>
			    @endif

	    	</div> 
	        <br><br>
	            
	        </div>


			

    	</section>
    </div>
    <br><br>



@endsection



