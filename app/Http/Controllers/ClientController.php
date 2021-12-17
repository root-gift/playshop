<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ClientController extends Controller
{
    //
    public function index(){
        $product = Product::get()->take(9);
        // $status = $product->status;
        // dd($product->product_name);
        return view('client.index')->with('product',$product);
    }

    public function about(){
        return view('client.apropos');
    }

    public function catalogue(){
        $product = Product::get()->paginate(6);
        $ordinateur = Product::where('product_category','ordinateur')->get()->paginate(4);
        $tablette =  Product::where('product_category','tablettes')->get()->paginate(4);
        $smartphone =  Product::where('product_category','smartphones')->get()->paginate(4);
        return view('client.catalogue')->with('product',$product)
                                    ->with('ordinateur',$ordinateur)
                                    ->with('tablette',$tablette)
                                    ->with('smartphone',$smartphone);
    }

    public function categories(){
        $categories = Category::get();
        $produits = Product::where('product_category', $name)->paginate(1);

        return view('client.catalogue')->with('produits', $produits)->with('categories', $categories);
    }

    public function popup(){
        return view('client.popup');
    }
}
