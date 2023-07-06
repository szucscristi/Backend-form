<?php

namespace App\Http\Controllers;

use App\Models\Categorii;
use Illuminate\Http\Request;

class CategoriiController extends Controller
{
    public function index()
    {
        $categories = Categorii::all();
        return response()->json($categories);
    }
    public function info()
    {
        $asd='test';
        return response()->json($asd);
    }
    public function show($id)
    {
        $category = Categorii::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        return response()->json($category);
    }
    
    public function store(Request $request)
    {
        $categorie = new Categorii();
        $categorie->nume = $request->input('nume');
        $categorie->save();
        
        return response()->json($categorie, 201);
    }
}
