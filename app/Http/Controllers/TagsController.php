<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{
    public function store(Request $request){
        
        $result =  DB::table('tags')->insert([
            "name" => $request->tag_name
             
        ]);
        return redirect()->route('tags');
    }

    public function showTags(){
        $tags = Tag::get();
       return view("showTags", compact('tags'));
      
  }

  public function showData(string $id){
      $post = Tag::with(['posts', 'posts.tags'])->Find($id);
     return $post;   
   }

    
}
