<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function list(){
        $categories=Category::all();
        return view('backend.pages.category.list',compact('categories'));
    }
    public function createForm(){
        return view('backend.pages.category.create');
    }
    public function create(Request $request){
        //  dd($request->all());
        //  migration column name => input field name
         Category::create([
            'category_name'=>$request->category_name,
            'category_details'=>$request->category_details
         ]);
         return redirect()->route('categoryList');
    }
    public function updateForm(){
        return view('backend.pages.category.update');
    }
}
