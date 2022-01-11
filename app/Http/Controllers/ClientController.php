<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    //
    public function index(){
        $product = Product::get()->take(6);
        // dd($product);
        // $status = $product->status;
        return view('client.index')->with('product',$product);
    }
    public function index_all(){
        $product = Product::all();
        // dd($product);
        // $status = $product->status;
        return view('client.index')->with('product',$product);
    }

    

    public function produit_par_id($id){
        $product = Product::where('id', $id)->get();
        // dd($product);
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

        // if(DB::connection()->getDatabaseName())
        // {
        //     echo "Connecte a la DB".DB::connection()->getDatabaseName();
        // }
        $categories = Category::get();
        $produits = Product::where('product_category', $name)->get();
        // dd($name);
        // dd($produits);
        return view('client.catalogue')->with('produits', $produits)->with('categories', $categories);
    }

    public function categories_par_id($name,$id){
        $categories = Category::get();
        $match = ['product_category' => $name, 'id' => $id];
        $produits = Product::where($match)->get();
        return view('client.catalogue')->with('produits', $produits)->with('categories', $categories);
    }

    public function popup(){
        return view('client.popup');
    }
}
