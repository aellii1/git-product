@extends('product.layout')

@section('content')



	<div class="row">
		<div class="pull-left py-3">
			<h1>
				Product
			</h1>
		</div>
	</div>


	<div class="card my-3">
	<div class="card-body">
           <h5 class="card-title">Product Type: {{ $products->product_type }}</h5>
           <p class="card-text">Brand: {{ $products->brand }}</p>
           <p class="card-text">Model: {{ $products->model }}</p>
           <p class="card-text">Specs: {{ $products->specs }}</p>
           <p class="card-text">Price: ${{ $products->price }}</p>
           <p class="card-text">VAT: {{ $products->vat }}</p>
           <p class="card-text">Quantity: {{ $products->quantity }}</p>
           <p class="card-text">Discounted Price: ${{ $products->discounted_price }}</p>

                <!-- Add other fields as needed -->

           <a href="{{ route('product.edit', $products->id) }}" class="btn btn-primary">Edit Product</a>
           <a href="{{ route('product.index') }}" class="btn btn-secondary">Back to Products</a>
    </div>
	</div>


@endsection