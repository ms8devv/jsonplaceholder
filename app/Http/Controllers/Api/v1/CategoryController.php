<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();

        return response()->json($categories, Response::HTTP_OK);
    }

    public function show($id){
        $category = Category::query()->where('id' , $id)->first();

        return response()->json($category, Response::HTTP_OK);
    }
}
