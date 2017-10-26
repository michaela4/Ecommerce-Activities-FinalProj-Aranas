@extends('layoutProject.layout')

@section('content')
          <!-- Product Entries Column -->
            <div class="col-md-8"><br><br>
              @if (Session::has('flash_message'))
  	            <div class="alert alert-danger">
  	              {{ Session::get('flash_message')}}
  	            </div>
            	@endif

                <h1 class="my-4" style="color:  #F05F40">Merch-Ent Blog <br>
                  <small>Current Events</small>
                </h1> <hr>

                <p> Some posts for blog... </p>
                
            </div>        
@endsection

       

