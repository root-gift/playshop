<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ClientController extends Controller
{
    //
    public function index(){
        $product = Product::get()->take(9);
        
        // $status = $product->status;
        // dd($product->product_name);
        return view('client.index')->with('product',$product);
    }

    public function produit_par_id($id){
        $product = Product::where('id', $id);
        return view('client.index')->with('product',$product);
    }

    public function about(){
        return view('client.apropos');
    }

    public function catalogue(){
        
        $categories = Category::get();
        $produits = Product::get();
        return view('client.catalogue')->with('categories', $categories)->with('produits', $produits);
    }

    public function categories($name){
        $categories = Category::get();
        $produits = Product::where('product_category', $name);

        return view('client.catalogue')->with('produits', $produits)->with('categories', $categories);
    }

    public function popup(){
        return view('client.popup');
    }
}
