<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Post::create([
        //     "title"=> Str::random(10)
        // ]);
     $posts = Post::factory(5)->create();
   
      $posts->each(function($post){
         $categories = Category::inRandomOrder()->limit(2)->get();
         $Tags = Tag::inRandomOrder()->limit(2)->get();

         $post->categories()->attach($categories);
         $post->Tags()->attach($Tags);

      });
        

        
    }
}
