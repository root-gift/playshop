<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function ajouterproduit()
    {
        $categories = Category::All()->pluck('category_name', 'category_name');

        return view('admin.ajouterproduit')->with('categories', $categories);
    }

    public function sauverproduit(Request $request)
    {
        $this->validate($request,[
            'product_name'=>'required|unique:products',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_qte' => 'required',
            'product_image'=>'image|nullable|max:4000']);

        if($request->hasFile('product_image'))
        {

            $extension = $request->file('product_image')->getClientOriginalExtension();
            //nouvelle ligne
            $fileName = $request->product_image->getClientOriginalName();

            $fileNameToStore = $fileName.'playshop_'.time().'.'.$extension;

            $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);
        }
        else
        {
            $fileNameToStore= 'noimage.jpg';
        }

        $product = new Product();

        $product->product_name=$request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_category = $request->input('product_category');
        $product->product_qty = $request->input('product_qte');
        $product->product_image = $fileNameToStore;
        $product->status =1;

        $product->save();

        return redirect('/ajouterproduit')->with('status', 'Le produit ' . $product->product_name. ' a été inserer avec succès');
    }


    public function produits()
    {
        $produits = Product::get();
        $categories = Category::get();

        return view('admin.table')->with('produits', $produits)->with('categories', $categories);;
    }

    public function supprimerproduit($id)
    {
        $produit = Product::find($id);

        if($produit->product_image != 'noimage.jpg')
        {
            Storage::delete('public/product_images/'.$produit->product_image);
        }
        $produit->delete();

        return redirect('/table')->with('status', 'Le produit ' . $produit->product_name. ' a bien été supprimer avec succes');

    }

    public function activer_produit($id)
    {
        $produit = Product::find($id);
        $produit->status = 1;

        $produit->update();

        return redirect('/table')->with('status', 'Le produit ' . $produit->product_name. ' a été activer avec succes');

    }

    public function desactiver_produit($id)
    {
        $produit = Product::find($id);
        $produit->status = 0;

        $produit->update();

        return redirect('/table')->with('status', 'Le produit ' . $produit->product_name. ' a été desactiver avec succes');

    }
}
