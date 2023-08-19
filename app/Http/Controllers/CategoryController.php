<?php

namespace App\Http\Controllers;

use App\Models\Category;
 use Illuminate\Http\Request;

 use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function index(Request $request){
        return $request;
    }

    public function store(Request $request){
        
        $result =  DB::table('categories')->insert([
            "name" => $request->category_name
             
        ]);
        return redirect()->route('category');
    }

    public function showCategory(){
        $categ = Category::get();
       return view("showCategory", compact('categ'));
      
  }

  public function categDetail(string $id){
      $post = Category::with(['posts', 'posts.tags'])->Find($id);
     return $post;   
   }

}
