<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Validation\ValidationException;



class CategoryController extends Controller
{
    public function index()//funcion para listar categorias
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function create(Request $request)
    {
        try
        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
            ]);
    
            $category = Category::create([
                'name' => $validatedData['name'],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' =>date("Y-m-d H:i:s")
    
                ]);
            return response()->json($category, 201);
        }
        catch(ValidationException $error)
        {
            return response()->json($error->errors(), 400);
        }
        
    }


}
