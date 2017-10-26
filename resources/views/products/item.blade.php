@extends('layoutProject.layout')

@section('content')

<div>
@foreach ($products as $product)
	<h1>{{ $product->name }}</h1>
	<img src="/img/k{{ $product->id }}.jpg" >
	@endforeach
</div>

@endsection