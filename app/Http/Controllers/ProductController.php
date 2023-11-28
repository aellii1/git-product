<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index()
    {
        $products = Product::all();
    return view('product.index', compact('products'));    }

    public function create()
    {
        return view('product\create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
        'product_type' => 'required|in:android_phone,ios_phone,tablet,ipad,laptop',
        'brand' => 'required|in:Samsung,Huawei,Oppo,Vivo,Sony,iPHONE',
        'model' => 'required|string',
        'specs' => 'required|string',
        'price' => 'required|numeric',
        'vat' => 'required|string',
        'quantity' => 'required|string',
        'discounted_price' => 'required|string',
    ]);

    // If validation passes, continue with creating the product
    $input = $request->all();
    $product = Product::create($input);

    return redirect('product')->with('success', 'Product Added!');
    }

    public function show($id)
    {
        $product = product::find($id);

        return view('product/show')
            ->with('products',$product);
    }

    public function edit($id)
    {
        $product = product::find($id);

        return view('product/edit')
            ->with('products',$product);
    }

    public function update(Request $request, $id)
    {

        $product = Product::find($id);

    $request->validate([
        'product_type' => 'required|in:android_phone,ios_phone,tablet,ipad,laptop',
        'brand' => 'required|in:Samsung,Huawei,Oppo,Vivo,Sony,iPHONE',
        'model' => 'required|string',
        'specs' => 'required|string',
        'price' => 'required|numeric',
        'vat' => 'required|string',
        'quantity' => 'required|string',
        'discounted_price' => 'required|string',
    ]);

    $input = $request->all();

    $product->update($input);

    return redirect('product')->with('success', 'Product Updated!');
    }

    public function destroy($id)
    {
        product::destroy($id);

        return redirect('product')->with('success', 'Product Deleted!');
    }
}
