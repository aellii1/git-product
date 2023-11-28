@extends('product.layout')

@section('content')

	<div class="row">
		<div class="pull-left py-3">
			<h1>
				Add new
			</h1>

			<div class="col-sm-12 mb-3">
				<a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
			</div>
		</div>
	</div>

	@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

	<div class="row">
    <form action="{{ route('product.update', ['product' => $products]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <select class="form-control" name="product_type" id="product_type">
                <option selected disabled>Product type</option>
                <option value="android_phone" {{ $products->product_type == 'android_phone' ? 'selected' : '' }}>Android phone</option>
                <option value="ios_phone" {{ $products->product_type == 'ios_phone' ? 'selected' : '' }}>IOS phone</option>
                <option value="tablet" {{ $products->product_type == 'tablet' ? 'selected' : '' }}>Tablet</option>
                <option value="ipad" {{ $products->product_type == 'ipad' ? 'selected' : '' }}>Ipad</option>
                <option value="laptop" {{ $products->product_type == 'laptop' ? 'selected' : '' }}>Laptop</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <select class="form-control" name="brand" id="brand">
                <option selected disabled>Brand</option>
                <option value="Samsung" {{ $products->brand == 'Samsung' ? 'selected' : '' }}>Samsung</option>
                <option value="Huawei" {{ $products->brand == 'Huawei' ? 'selected' : '' }}>Huawei</option>
                <option value="Oppo" {{ $products->brand == 'Oppo' ? 'selected' : '' }}>Oppo</option>
                <option value="Vivo" {{ $products->brand == 'Vivo' ? 'selected' : '' }}>Vivo</option>
                <option value="Sony" {{ $products->brand == 'Sony' ? 'selected' : '' }}>Sony</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <select class="form-control" name="model" id="model">
                <option selected disabled>Model</option>
                <option value="Samsung A14 5G" {{ $products->model == 'Samsung A14 5G' ? 'selected' : '' }}>Samsung A14 5G</option>
                <option value="Samsung A34" {{ $products->model == 'Samsung A34' ? 'selected' : '' }}>Samsung A34</option>
                <option value="Samsung A54" {{ $products->model == 'Samsung A54' ? 'selected' : '' }}>Samsung A54</option>
                <option value="Samsung S23" {{ $products->model == 'Samsung S23' ? 'selected' : '' }}>Samsung S23</option>
                <option value="Samsung S23 Ultra" {{ $products->model == 'Samsung S23 Ultra' ? 'selected' : '' }}>Samsung S23 Ultra</option>
                <option disabled>Huawei</option>
                <option value="Huawei NOVA 9" {{ $products->model == 'Huawei NOVA 9' ? 'selected' : '' }}>Huawei NOVA 9</option>
                <option value="Huawei NEO 7" {{ $products->model == 'Huawei NEO 7' ? 'selected' : '' }}>Huawei NEO 7</option>
                <option value="Huawei NOVA 9 5G" {{ $products->model == 'Huawei NOVA 9 5G' ? 'selected' : '' }}>Huawei NOVA 9 5G</option>
                <option value="Huawei NOVA 5T" {{ $products->model == 'Huawei NOVA 5T' ? 'selected' : '' }}>Huawei NOVA 5T</option>
                <option value="Huawei NOVA 7 5G" {{ $products->model == 'Huawei NOVA 7 5G' ? 'selected' : '' }}>Huawei NOVA 7 5G</option>
                <option disabled>Oppo</option>
                <option value="Oppo F5" {{ $products->model == 'Oppo F5' ? 'selected' : '' }}>Oppo F5</option>
                <option value="Oppo A9" {{ $products->model == 'Oppo A9' ? 'selected' : '' }}>Oppo A9</option>
                <option value="Oppo A98" {{ $products->model == 'Oppo A98' ? 'selected' : '' }}>Oppo A98</option>
                <option value="Oppo A17K" {{ $products->model == 'Oppo A17K' ? 'selected' : '' }}>Oppo A17K</option>
                <option value="Oppo A95" {{ $products->model== 'Oppo A95' ? 'selected' : '' }}>Oppo A95</option>
                <option disabled>Vivo</option>
                <option value="Vivo Y11" {{ $products->model == 'Vivo Y11' ? 'selected' : '' }}>Vivo Y11</option>
				<option value="Vivo Y15" {{ $products->model == 'Vivo Y15' ? 'selected' : '' }}>Vivo Y15</option>
				<option value="Vivo Y20" {{ $products->model == 'Vivo Y20' ? 'selected' : '' }}>Vivo Y20</option>
				<option value="Vivo Y16" {{ $products->model == 'Vivo Y16' ? 'selected' : '' }}>Vivo Y16</option>
				<option value="Vivo Y35" {{ $products->model == 'Vivo Y35' ? 'selected' : '' }}>Vivo Y35</option>
                <option disabled>Sony</option>
                <option value="Sony Xperia 1" {{ $products->model == 'Sony Xperia 1' ? 'selected' : '' }}>Sony Xperia 1</option>
                <option value="Sony Xperia XZ3" {{ $products->model == 'Sony Xperia XZ3' ? 'selected' : '' }}>Sony Xperia XZ3</option>
                <option value="Sony Xperia 5" {{ $products->model == 'Sony Xperia 5' ? 'selected' : '' }}>Sony Xperia 5</option>
                <option value="Sony Xperia T2" {{ $products->model == 'Sony Xperia T2' ? 'selected' : '' }}>Sony Xperia T2</option>
                <option value="Sony Xperia" {{ $products->model == 'Sony Xperia' ? 'selected' : '' }}>Sony Xperia</option>
                <option disabled>Iphone</option>
                <option value="iPHONE 12" {{ $products->model == 'iPHONE 12' ? 'selected' : '' }}>iPHONE 12</option>
                <option value="iPHONE 12 PRO" {{ $products->model == 'iPHONE 12 PRO' ? 'selected' : '' }}>iPHONE 12 PRO</option>
                <option value="iPHONE 12 PrO Max" {{ $products->model == 'iPHONE 12 PrO Max' ? 'selected' : '' }}>iPHONE 12 PrO Max</option>
                <option value="iPHONE 13 PRO" {{ $products->model == 'iPHONE 13 PRO' ? 'selected' : '' }}>iPHONE 13 PRO</option>
                <option value="iPHONE 13 Pro Max" {{ $products->model == 'iPHONE 13 Pro Max' ? 'selected' : '' }}>iPHONE 13 Pro Max</option>
                <option disabled>Laptop</option>
                <option value="Lenovo core i7.6th Gen" {{ $products->model == 'Lenovo core i7.6th Gen' ? 'selected' : '' }}>Lenovo core i7.6th Gen</option>
                <option value="ROG strix scar 16" {{ $products->model == 'ROG strix scar 16' ? 'selected' : '' }}>ROG strix scar 16</option>
                <option value="Shark" {{ $products->model == 'Shark' ? 'selected' : '' }}>Shark</option>
                <option value="HP" {{ $products->model == 'HP' ? 'selected' : '' }}>HP</option>
                <option value="Acer" {{ $products->model == 'Acer' ? 'selected' : '' }}>Acer</option>
                <option value="Asus" {{ $products->model == 'Asus' ? 'selected' : '' }}>Asus</option>
                <option value="Dell INSPIRON 15" {{ $products->model == 'Dell INSPIRON 15' ? 'selected' : '' }}>Dell INSPIRON 15</option>
                <option value="Samsung R519" {{ $products->model== 'Samsung R519' ? 'selected' : '' }}>Samsung R519</option>
                <option value="Huawei D15" {{ $products->model == 'Huawei D15' ? 'selected' : '' }}>Huawei D15</option>
                <option value="Acer NITRO 5" {{ $products->model == 'Acer NITRO 5' ? 'selected' : '' }}>Acer NITRO 5</option>
                <option value="Sony VAIO" {{ $products->model == 'Sony VAIO' ? 'selected' : '' }}>Sony VAIO</option>
                <option value="Macbook AIR M1" {{ $products->model == 'Macbook AIR M1' ? 'selected' : '' }}>Macbook AIR M1</option>
                <option disabled>Ipad</option>
                <option value="Ipad 3th Gen" {{ $products->model == 'Ipad 3th Gen' ? 'selected' : '' }}>Ipad 3th Gen</option>
                <option value="Ipad 6th Gen" {{ $products->model == 'Ipad 6th Gen' ? 'selected' : '' }}>Ipad 6th Gen</option>
                <option value="Ipad 7th Gen" {{ $products->model == 'Ipad 7th Gen' ? 'selected' : '' }}>Ipad 7th Gen</option>
                <option value="Ipad AIR 2" {{ $products->model == 'Ipad AIR 2' ? 'selected' : '' }}>Ipad AIR 2</option>
                <option value="Ipad 9th Gen" {{ $products->model == 'Ipad 9th Gen' ? 'selected' : '' }}>Ipad 9th Gen</option>
            </select>
        </div>

        <div class="form-group mb-3">
        	<textarea id="specs" name="specs" placeholder="Specs" rows="5" class="form-control">{{ $products->specs }}</textarea>
        </div>

        <div class="form-group mb-3">
        	<input type="number" id="price" name="price" placeholder="Price" class="form-control" value="{{ $products->price }}">
        </div>

        <div class="form-group mb-3">
        	<textarea id="vat" name="vat" placeholder="vat" rows="5" class="form-control">{{ $products->vat }}</textarea>
        </div>

        <div class="form-group mb-3">
        	<input type="number" name="quantity" id="quantity" placeholder="Quantity" class="form-control" value="{{ $products->quantity }}">
        </div>

        <div class="form-group mb-3">
        	<input type="number" name="discounted_price" id="discounted_price" placeholder="Discounted price" class="form-control" value="{{ $products->discounted_price }}">
        </div>

        <button type="submit" class="btn btn-primary my-3 p-3">Edit</button>
    </form>
	</div>



@endsection