<!-- Blog Post -->
<div class="card mb-4"> 
    <div class="card-block">
        <h2 class="card-title">{{ $product->name }}</h2>
        <a href="/img/k{{ $product->id }}.jpg" class="portfolio-box">
	        <img src="/img/k{{ $product->id }}.jpg" class="img-fluid" id="images" alt="k{{ $product->id }}.jpg" height="300" width="250">
	    </a><br>
        <a href="/products/{{ $product->id }}" class="btn btn-primary">Shop &rarr;</a>
    </div>
</div>
