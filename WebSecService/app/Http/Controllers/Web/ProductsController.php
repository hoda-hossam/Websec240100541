<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{

public function list(Request $request)
{
    $query = Product::select("products.*");

    // Filter by keywords
    $query->when($request->keywords, function($q) use ($request) {
        $q->where("name", "like", "%{$request->keywords}%");
    });

    // Filter by minimum price
    $query->when($request->min_price, function($q) use ($request) {
        $q->where("price", ">=", $request->min_price);
    });

    // Filter by maximum price
    $query->when($request->max_price, function($q) use ($request) {
        $q->where("price", "<=", $request->max_price);
    });

    // Order by column and direction
    $query->when($request->order_by, function($q) use ($request) {
        $q->orderBy($request->order_by, $request->order_direction ?? "ASC");
    });

    $products = $query->get();

    return view("products.list", compact('products'));
}

Public function edit(Request $request, Product $product = null) {
$product = $product??new Product();
return view("products.edit", compact('product'));
}

public function save(Request $request, Product $product = null) {
$product = $product??newProduct();
$product->fill($request->all());
$product->save();
returnredirect()->route('products_list');

}

public function delete(Request $request, Product $product) {
$product->delete();
return redirect()->route('products_list');
}

}