@extends('product.layout')

@section('content')

	<div class="row">
		<div class="pull-left py-3">
			<h1>
				Git product
			</h1>
		</div>

		<div class="col-sm-12 mb-3">
			<a href="{{ url('/product/create') }}" class="btn btn-success">Add new</a>
		</div>
	</div>

	@if(session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger mt-2">
            {{ session('error') }}
        </div>
    @endif

	<div class="row">
		
		<table class="table table-bordered table-light">
			
			<thead>
				<tr>
					<th>No</th>
					<th>Product type</th>
					<th>Brand</th>
					<th>Model</th>
					<th>Specs</th>
					<th>Price</th>
					<th>Vat</th>
					<th>Quantity</th>
					<th>Disc. price</th>
					<th>Action</th>
				</tr>
			</thead>

			
			<tbody>
				@foreach ($products as $product)
				<tr>
					<td>{{ $product->id }}</td>
					<td>{{ $product->product_type }}</td>
					<td>{{ $product->brand }}</td>
					<td>{{ $product->model }}</td>
					<td>{{ $product->specs }}</td>
					<td>{{ $product->price }}</td>
					<td>{{ $product->vat }}</td>
					<td>{{ $product->quantity }}</td>
					<td>${{ $product->discounted_price }}</td>
					<td>
                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-secondary">Show</a>

                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return">Delete</button>
                        </form>
                    </td>
				</tr>
				@endforeach
			</tbody>
			
		</table>


	</div>

@endsection