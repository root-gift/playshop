<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function ajoutercategorie()
    {
        return view('admin.ajoutercategorie');
    }

    public function sauvercategorie(Request $request)
    {
        $this->validate($request, ['Category_name' => 'required|unique:categories']);
        $categories = new Category();
        $categories->category_name = $request->input('Category_name');
        $categories->save();

        return redirect('/ajoutercategorie');
    }

    public function categories()
    {
        $categories = Category::get();

        return view('admin.table')->with('categories', $categories);
    }

    public function edit_categorie($id)
    {
        $categorie = Category::find($id);

        return view('admin.editercategorie')->with('categorie', $categorie);
    }

    public function modifiercategorie(Request $request )
    {
        $this->validate($request, ['Category_name' => 'required|unique:categories']);

        $categories = Category::find($request->input('id'));
        $categories->category_name = $request->input('Category_name');
        $categories->update();

        return redirect('/table');  
    }

    public function supprimercategorie($id)
    {
        $categories = Category::find($id);

        $categories->delete();

        return redirect('/table')->with('status', 'La categorie ' .$categories->category_name. ' a été supprimée avec succès' );


    }

}
