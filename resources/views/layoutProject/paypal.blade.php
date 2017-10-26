<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="ella4aranas-facilitator@gmail.com">


<?php $count = 0; ?>
	@foreach($cartItems as $cartItem)
		<?php $count++; ?>
			<input type="hidden" name="item_name_{{ $count }}" value="{{ $cartItem->product->name }}">
			<input type="hidden" name="item_number_{{ $count }}" value="{{ $cartItem->id }}">
			<input type="hidden" name="amount_{{ $count }}" value="{{ $cartItem->price }}">
			<input type="hidden" name="quantity_{{ $count }}" value="{{ $cartItem->pivot->quantity }}">
			<input type="hidden" name="shipping_{{ $count }}" value="0.50">
			<input type="hidden" name="tax_{{ $count }}" value="0.15">

			<!--AFTER PAYMENT-->
			<input type="hidden" name="return" id="cancel_return" value="http://localhost:8000/finish">
			<!--CANCEL PAYMENT-->
			<input type="hidden" name="cancel_return" id="cancel_return" value="http://localhost:8000/cart">

	@endforeach

<input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/pp-acceptance-large.png" alt="PayPal Acceptance" value="PayPal">
</form>