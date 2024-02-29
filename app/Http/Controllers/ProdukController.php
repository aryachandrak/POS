<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produk($produk){
        if ($produk == "food-beverage" ){
            return view('category.food-beverage');
        }
        elseif ($produk == 'beauty-health') {
            return view('category.beauty-health');
        }
        elseif ($produk == 'home-care') {
            return view('category.home-care');
        }
        elseif ($produk == 'baby-kid') {
            return view('category.baby-kid');
        } else {
            return "<h1>Produk tidak ada<h1>";
        }
    }
}
