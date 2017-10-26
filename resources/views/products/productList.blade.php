@extends('layoutProject.noSide')

@section('content')
          <!-- Products Catalog Column -->
            <!--<div class="col-md-8"><br><br>-->

                <h1 class="my-4" style="color:  #F05F40">Products Catalog </h1>
                <hr><br>

                <section class="no-padding" id="portfolio">
                  <div class="container-fluid">
                      <div class="row no-gutter popup-gallery">
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-sm-6">
                                    <a href="img/k{{ $product->id }}.jpg" class="portfolio-box">
                                        <img src="img/k{{ $product->id }}.jpg" class="img-fluid" id="images" alt="k{{ $product->id }}.jpg">
                                        <div class="portfolio-box-caption">
                                            <div class="portfolio-box-caption-content">
                                                <div class="project-category">
                                                    {{ $product->name }}
                                                </div>
                                                <div class="project-name text-faded">
                                                  @foreach($product->productPrices as $prices)
                                                    {{$prices->description}} 
                                                    ${{ $prices->price }} <br/>
                                                  @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                  <form action="/products/{{$product->id}}">
                                    <button class="btn btn-primary btn-l">shop</button>
                                  </form>        
                            </div>
                        @endforeach
                       <br>
                       <div>
                        
                       </div>

                       
                      </div>
                  </div>
              </section>
            <br>
       <!-- </div>-->

@endsection

       

