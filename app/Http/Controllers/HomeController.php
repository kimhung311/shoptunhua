<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with([ 'category'])->get();
        // $categories     =   Category::get();

        return view('Homepage.home')->with([
            'products'       => $products,
            // 'categories'     => $categories,

        ]);    
    }
    public function shop(Request $request, $id){

        $categories = Category::all();
        // $product_images = ProductImage::all();
        $products = Product::paginate(8);
        


        return view('Homepage.shop')->with([
            'products'      => $products,
            'categories'    => $categories,
            // 'product_images'    => $product_images,

        ]);
    }
  
    
}
