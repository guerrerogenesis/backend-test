<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()//funcion para listar categorias
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    
}
