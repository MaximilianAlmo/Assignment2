<?php

namespace App\Http\Controllers;
use App\Product;
use App\Store;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

  public function index(){
    $products = Product::all();
    return response()->json($products);
  }

  public function show($id){
    $product = Product::find($id);
    $product->title = $product->title;
    $product->brand = $product->brand;
    $product->image = $product->image;
    $product->description = $product->description;
    $product->price = $product->price;

    $product->stores = $product->store;
    $product->reviews = $product->review;

    return response()->json($product);
  }

  public function create(Request $request){
      $product = new Product;
      $product->title = $request->input('title');
      $product->brand = $request->input('brand');
      $product->image = $request->input('image');
      $product->description = $request->input('description');
      $product->price = $request->input('price');
      $product->save();

      foreach ($request->get("stores") as $store) {
          $product->store()->attach($store);
      }

      $response = array();
      $response['success'] = true;
      return response()->json($response);
  }
}
