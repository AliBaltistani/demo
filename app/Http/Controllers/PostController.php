<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
class PostController extends Controller
{

   public function index(){
      $categ = Category::get();
      $tags = Tag::get();
      
      return view('post',compact("categ", "tags") );    

   }

    public function insertData(Request $request)
    {
        $tags = $request->tags;

        $post1 = Post::create([
            'title' => $request->title,
        ]);

        $post1->categories()->attach([$request->category_id]);
        foreach($tags as $tg){
            $post1->tags()->attach([$tg]);
        }
    
        return redirect()->route('posts');
    
    }

    public function showPost(){
          $post = Post::get();
         return view("showPost", compact('post'));
        
    }

    public function postDetail(string $id){
        $post = Post::with(['tags','categories'])->Find($id);
       return $post;
      
  }
}
