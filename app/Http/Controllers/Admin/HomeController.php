<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $product_count= Product::all()->count();
        $categories_count= Product::all()->count();
        return view('admin.home.index',[
            'product_count' => $product_count,
            'categories_count' => $categories_count,
        ]);
    }
}
