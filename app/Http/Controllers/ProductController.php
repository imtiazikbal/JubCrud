<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createProduct(Request $request)
    {
       try{
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'qty'=>$request->qty
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

    public function delteProduct(Request $request,$id){
        try{
            Product::find($id)->delete();
            return redirect()->back();
        }catch(Exception $e){
            return response()->json([
                'message' => 'Error',
            ]);
        }
    }
    public function updateproduct(Request $request,$id){
        try{
            Product::find($id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'category_id' => $request->category_id,
                'qty'=>$request->qty
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
    public function dataForEdit(Request $request,$id){
        try{
           $data= Product::where('id',$id)->with('category')->first();
           return view('product.edit',compact('data'));
        }catch(Exception $e){
            return response()->json([
                'message' => 'Error',
            ]);
        }
    }
    public function showProduct(){
      
           $data=  Product::with('category')->get();
          // return $data;
           return view('product.list',compact('data'));
        
    }
}
