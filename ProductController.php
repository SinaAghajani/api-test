<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function insert(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return redirect('/product/add', 201)->with('status', 'The product has been added successfully.');
    }

    public function showAllProduct()
    {
        return Product::all();
    }

    public function showAllProduct2()
    {
        return \Illuminate\Support\Facades\View::make('product/show')->with('products', Product::all());
    }

    public function delete(Request $request)
    {
       if(Product::where('id', $request->id)->delete()){
        return redirect('/product/all') ;
       }else{
        return redirect('/product/all')->with('status','Deleting the product is failed!');
       }
    }

    public function getProduct(Request $request)
    {
       $product = Product::where('id',$request->id)->first();
       return \View::make('product/add')->with('product',$product);
    }
}
