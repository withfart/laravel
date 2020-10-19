<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){

        $categories = Category::all();
        $products = Product::all();

        foreach ($products as $product){
            $product['photo'] = Storage::url( $product['photo']);

        }
        return view('index',compact('categories','products'));

    }

}
