@extends ('product.layout')

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
    <form action="{{ route('product.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <select class="form-control" name="product_type" id="product_type">
                <option selected disabled>Product type</option>
                <option value="android_phone" {{ old('product_type') == 'android_phone' ? 'selected' : '' }}>Android phone</option>
                <option value="ios_phone" {{ old('product_type') == 'ios_phone' ? 'selected' : '' }}>IOS phone</option>
                <option value="tablet" {{ old('product_type') == 'tablet' ? 'selected' : '' }}>Tablet</option>
                <option value="ipad" {{ old('product_type') == 'ipad' ? 'selected' : '' }}>Ipad</option>
                <option value="laptop" {{ old('product_type') == 'laptop' ? 'selected' : '' }}>Laptop</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <select class="form-control" name="brand" id="brand">
                <option selected disabled>Brand</option>
                <option value="Samsung" {{ old('Samsung') == 'Samsung' ? 'selected' : '' }}>Samsung</option>
                <option value="Huawei" {{ old('Huawei') == 'Huawei' ? 'selected' : '' }}>Huawei</option>
                <option value="Oppo" {{ old('Oppo') == 'Oppo' ? 'selected' : '' }}>Oppo</option>
                <option value="Vivo" {{ old('Vivo') == 'Vivo' ? 'selected' : '' }}>Vivo</option>
                <option value="Sony" {{ old('Sony') == 'Sony' ? 'selected' : '' }}>Sony</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <select class="form-control" name="model" id="model">
                <option selected disabled>Model</option>
                <option value="Samsung A14 5G" {{ old('Samsung A14 5G') == 'Samsung A14 5G' ? 'selected' : '' }}>Samsung A14 5G</option>
                <option value="Samsung A34" {{ old('Samsung A34') == 'Samsung A34' ? 'selected' : '' }}>Samsung A34</option>
                <option value="Samsung A54" {{ old('Samsung A54') == 'Samsung A54' ? 'selected' : '' }}>Samsung A54</option>
                <option value="Samsung S23" {{ old('Samsung S23') == 'Samsung S23' ? 'selected' : '' }}>Samsung S23</option>
                <option value="Samsung S23 Ultra" {{ old('Samsung S23 Ultra') == 'Samsung S23 Ultra' ? 'selected' : '' }}>Samsung S23 Ultra</option>
                <option disabled>Huawei</option>
                <option value="Huawei NOVA 9" {{ old('Huawei NOVA 9') == 'Huawei NOVA 9' ? 'selected' : '' }}>Huawei NOVA 9</option>
                <option value="Huawei NEO 7" {{ old('Huawei NEO 7') == 'Huawei NEO 7' ? 'selected' : '' }}>Huawei NEO 7</option>
                <option value="Huawei NOVA 9 5G" {{ old('Huawei NOVA 9 5G') == 'Huawei NOVA 9 5G' ? 'selected' : '' }}>Huawei NOVA 9 5G</option>
                <option value="Huawei NOVA 5T" {{ old('Huawei NOVA 5T') == 'Huawei NOVA 5T' ? 'selected' : '' }}>Huawei NOVA 5T</option>
                <option value="Huawei NOVA 7 5G" {{ old('Huawei NOVA 7 5G') == 'Huawei NOVA 7 5G' ? 'selected' : '' }}>Huawei NOVA 7 5G</option>
                <option disabled>Oppo</option>
                <option value="Oppo F5" {{ old('Oppo F5') == 'Oppo F5' ? 'selected' : '' }}>Oppo F5</option>
                <option value="Oppo A9" {{ old('Oppo A9') == 'Oppo A9' ? 'selected' : '' }}>Oppo A9</option>
                <option value="Oppo A98" {{ old('Oppo A98') == 'Oppo A98' ? 'selected' : '' }}>Oppo A98</option>
                <option value="Oppo A17K" {{ old('Oppo A17K') == 'Oppo A17K' ? 'selected' : '' }}>Oppo A17K</option>
                <option value="Oppo A95" {{ old('Oppo A95') == 'Oppo A95' ? 'selected' : '' }}>Oppo A95</option>
                <option disabled>Vivo</option>
                <option value="Vivo Y11" {{ old('Vivo Y11') == 'Vivo Y11' ? 'selected' : '' }}>Vivo Y11</option>
				<option value="Vivo Y15" {{ old('Vivo Y15') == 'Vivo Y15' ? 'selected' : '' }}>Vivo Y15</option>
				<option value="Vivo Y20" {{ old('Vivo Y20') == 'Vivo Y20' ? 'selected' : '' }}>Vivo Y20</option>
				<option value="Vivo Y16" {{ old('Vivo Y16') == 'Vivo Y16' ? 'selected' : '' }}>Vivo Y16</option>
				<option value="Vivo Y35" {{ old('Vivo Y35') == 'Vivo Y35' ? 'selected' : '' }}>Vivo Y35</option>
                <option disabled>Sony</option>
                <option value="Sony Xperia 1" {{ old('Sony Xperia 1') == 'Sony Xperia 1' ? 'selected' : '' }}>Sony Xperia 1</option>
                <option value="Sony Xperia XZ3" {{ old('Sony Xperia XZ3') == 'Sony Xperia XZ3' ? 'selected' : '' }}>Sony Xperia XZ3</option>
                <option value="Sony Xperia 5" {{ old('Sony Xperia 5') == 'Sony Xperia 5' ? 'selected' : '' }}>Sony Xperia 5</option>
                <option value="Sony Xperia T2" {{ old('Sony Xperia T2') == 'Sony Xperia T2' ? 'selected' : '' }}>Sony Xperia T2</option>
                <option value="Sony Xperia" {{ old('Sony Xperia') == 'Sony Xperia' ? 'selected' : '' }}>Sony Xperia</option>
                <option disabled>Iphone</option>
                <option value="iPHONE 12" {{ old('iPHONE 12') == 'iPHONE 12' ? 'selected' : '' }}>iPHONE 12</option>
                <option value="iPHONE 12 PRO" {{ old('iPHONE 12 PRO') == 'iPHONE 12 PRO' ? 'selected' : '' }}>iPHONE 12 PRO</option>
                <option value="iPHONE 12 PrO Max" {{ old('iPHONE 12 PrO Max') == 'iPHONE 12 PrO Max' ? 'selected' : '' }}>iPHONE 12 PrO Max</option>
                <option value="iPHONE 13 PRO" {{ old('iPHONE 13 PRO') == 'iPHONE 13 PRO' ? 'selected' : '' }}>iPHONE 13 PRO</option>
                <option value="iPHONE 13 Pro Max" {{ old('iPHONE 13 Pro Max') == 'iPHONE 13 Pro Max' ? 'selected' : '' }}>iPHONE 13 Pro Max</option>
                <option disabled>Laptop</option>
                <option value="Lenovo core i7.6th Gen" {{ old('Lenovo core i7.6th Gen') == 'Lenovo core i7.6th Gen' ? 'selected' : '' }}>Lenovo core i7.6th Gen</option>
                <option value="ROG strix scar 16" {{ old('ROG strix scar 16') == 'ROG strix scar 16' ? 'selected' : '' }}>ROG strix scar 16</option>
                <option value="Shark" {{ old('Shark') == 'Shark' ? 'selected' : '' }}>Shark</option>
                <option value="HP" {{ old('HP') == 'HP' ? 'selected' : '' }}>HP</option>
                <option value="Acer" {{ old('Acer') == 'Acer' ? 'selected' : '' }}>Acer</option>
                <option value="Asus" {{ old('Asus') == 'Asus' ? 'selected' : '' }}>Asus</option>
                <option value="Dell INSPIRON 15" {{ old('Dell INSPIRON 15') == 'Dell INSPIRON 15' ? 'selected' : '' }}>Dell INSPIRON 15</option>
                <option value="Samsung R519" {{ old('Samsung R519') == 'Samsung R519' ? 'selected' : '' }}>Samsung R519</option>
                <option value="Huawei D15" {{ old('Huawei D15') == 'Huawei D15' ? 'selected' : '' }}>Huawei D15</option>
                <option value="Acer NITRO 5" {{ old('Acer NITRO 5') == 'Acer NITRO 5' ? 'selected' : '' }}>Acer NITRO 5</option>
                <option value="Sony VAIO" {{ old('Sony VAIO') == 'Sony VAIO' ? 'selected' : '' }}>Sony VAIO</option>
                <option value="Macbook AIR M1" {{ old('Macbook AIR M1') == 'Macbook AIR M1' ? 'selected' : '' }}>Macbook AIR M1</option>
                <option disabled>Ipad</option>
                <option value="Ipad 3th Gen" {{ old('Ipad 3th Gen') == 'Ipad 3th Gen' ? 'selected' : '' }}>Ipad 3th Gen</option>
                <option value="Ipad 6th Gen" {{ old('Ipad 6th Gen') == 'Ipad 6th Gen' ? 'selected' : '' }}>Ipad 6th Gen</option>
                <option value="Ipad 7th Gen" {{ old('Ipad 7th Gen') == 'Ipad 7th Gen' ? 'selected' : '' }}>Ipad 7th Gen</option>
                <option value="Ipad AIR 2" {{ old('Ipad AIR 2') == 'Ipad AIR 2' ? 'selected' : '' }}>Ipad AIR 2</option>
                <option value="Ipad 9th Gen" {{ old('Ipad 9th Gen') == 'Ipad 9th Gen' ? 'selected' : '' }}>Ipad 9th Gen</option>
            </select>
        </div>

        <div class="form-group mb-3">
        	<textarea id="specs" name="specs" placeholder="Specs" rows="5" class="form-control"></textarea>
        </div>

        <div class="form-group mb-3">
        	<input type="number" id="price" name="price" placeholder="Price" class="form-control">
        </div>

        <div class="form-group mb-3">
        	<textarea id="vat" name="vat" placeholder="vat" rows="5" class="form-control"></textarea>
        </div>

        <div class="form-group mb-3">
        	<input type="number" name="quantity" id="quantity" placeholder="Quantity" class="form-control">
        </div>

        <div class="form-group mb-3">
        	<input type="number" name="discounted_price" id="discounted_price" placeholder="Discounted price" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary my-3 p-3">Add</button>
    </form>
	</div>


@endsection