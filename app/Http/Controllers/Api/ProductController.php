<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;



class ProductController extends Controller
{
    public function index()//funcion para listar productos
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function create(Request $request)//funcion para crear nuevos productos
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
    public function update(Request $request, $id)//funcion para actualizar el stock de productos
    {
        try
        {
            $validatedData = $request->validate([
                'stock' => 'required|int',
            ]);

            $product = Product::findOrFail($id);
            $product->update([
                'stock' => $validatedData['stock'],
                'updated_at' => date("Y-m-d H:i:s")
            ]);

            return response()->json($product,200);
        }catch(ValidationException $error)
        {
            return response()->json($error->errors(), 400);
        }catch(ModelNotFoundException $error)
        {
            return response()->json(["error"=>"Item not found"], 404);
        }
    }

    public function delete(Request $request, $id)//funcion para actualizar el stock de productos
    {
        try
        {

            $product = Product::findOrFail($id);
            $product->delete();

            return response()->json(['message'=>'The next item has been deleted: '.$product['name'].' with ID '.$product['id'] ], 200);
        }
        catch(ModelNotFoundException $error)
        {
            return response()->json(["error"=>"Item not found"], 404);
        }
    }
}
