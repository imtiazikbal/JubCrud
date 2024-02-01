<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function createCategory(Request $request){
    try{
        Category::create([
            'name'=>$request->name    
        ]);
        return response()->json([
            'message' => 'success',
        ]);
    }catch(Exception $e){
        return response()->json([
            'message' => 'Error',
        ]);

    }
   }
   public function ShowCategory(){
    $category = Category::all();
    return view('product.add',compact('category'));
   }
}
