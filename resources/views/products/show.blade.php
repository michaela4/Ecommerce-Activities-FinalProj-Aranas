@extends('layoutProject.noSideHeader')

@section('content')

	<!--Single Image Here-->
	<div class="col-sm-8 blog-main">
		<section class="no-padding" id="portfolio">
	        <div class="container-fluid">
	            <div class="row no-gutter popup-gallery">
		            <div class="col-lg-3 col-sm-6"><br>
		                <img src="/img/k{{ $product->id }}.jpg" height="600" width="400" alt="k{{ $product->id }}.jpg"> <br><br>   
		            </div>
	            </div>
	        </div>
    	</section>
    </div>
    <br><br>

    <!--Additional Options Here-->
    <div class="col-md-4"><br><br>
    	<h3>{{ $product->name }}</h3> <br>

        <form  method="POST" action="/cart">
            {{ csrf_field() }}

            <!--FOR AMOUNT FIELD-->
            <h4>Quantity</h4>
            <input type="number" name="quantity" ng-model="quantity" min="1" required=""> <br><br>
            
            @foreach($product->productPrices as $prices)
                <input type="radio" name="price_id" value="{{ $prices->id }}" ng-model="price" required=""> 
                    <h4> {{ $prices->description }} ${{ $prices->price }}</h4><br><br>
            @endforeach

            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <!--NEWLY ADDED-->
            <input type="hidden" name="id" value="{{ $product->id }}">

            <!--cart_id = user_id-->
            @foreach($product->cartItem as $customer)
                <input type="hidden" name="cart_id" value="{{ $customer->id }}">
            @endforeach

            <input type="hidden" name="barcode" value="{{ $product->barcode }}">

           <input type="submit" class="btn btn-primary btn-xl" ng-click="calculatePrice()" value="Add to Cart">
        </form>
        
        <br><br>
    </div>
   
@endsection
