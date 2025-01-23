<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Validation\ValidationException;


class ProductController extends Controller
{
    public function index()//funcion para listar productos
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function create(Request $request)
    {
        try
        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'stock' => 'required|int',
                'category_id' => 'required|int|exists:categories,id'
            ]);
    
            $product = Product::create([
                'name' => $validatedData['name'],
                'stock' => $validatedData['stock'],
                'category_id' =>$validatedData['category_id'],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' =>date("Y-m-d H:i:s")
    
                ]);
            return response()->json($product, 201);
        }
        catch(ValidationException $error)
        {
            return response()->json($error->errors(), 400);

        }
            
        
    }
}
