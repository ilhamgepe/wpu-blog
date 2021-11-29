<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
   private static $blog_posts =[
      [
         "title" => "judul Post Pertama",
         "slug" => "judul-post-pertama",
         "author" => "Ilham Gilang Pmaungkas",
         "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat perferendis cupiditate omnis unde, in animi accusantium ipsam reprehenderit magnam fugit repudiandae, dolorum iusto esse et aspernatur facilis commodi eligendi doloribus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat perferendis cupiditate omnis unde, in animi accusantium ipsam reprehenderit magnam fugit repudiandae, dolorum iusto esse et aspernatur facilis commodi eligendi doloribus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat perferendis cupiditate omnis unde, in animi accusantium ipsam reprehenderit magnam fugit repudiandae, dolorum iusto esse et aspernatur facilis commodi eligendi doloribus!"
      ],
      [
         "title" => "judul Post Kedua",
         "slug" => "judul-post-kedua",
         "author" => "Ilham Gilang Pamungkas",
         "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat perferendis cupiditate omnis unde, in animi accusantium ipsam reprehenderit magnam fugit repudiandae, dolorum iusto esse et aspernatur facilis commodi eligendi doloribus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat perferendis cupiditate omnis unde, in animi accusantium ipsam reprehenderit magnam fugit repudiandae, dolorum iusto esse et aspernatur facilis commodi eligendi doloribus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat perferendis cupiditate omnis unde, in animi accusantium ipsam reprehenderit magnam fugit repudiandae, dolorum iusto esse et aspernatur facilis commodi eligendi doloribus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat perferendis cupiditate omnis unde, in animi accusantium ipsam reprehenderit magnam fugit repudiandae, dolorum iusto esse et aspernatur facilis commodi eligendi doloribus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat perferendis cupiditate omnis unde, in animi accusantium ipsam reprehenderit magnam fugit repudiandae, dolorum iusto esse et aspernatur facilis commodi eligendi doloribus!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat perferendis cupiditate omnis unde, in animi accusantium ipsam reprehenderit magnam fugit repudiandae, dolorum iusto esse et aspernatur facilis commodi eligendi doloribus!"
      ]
      ];

   public static function all(){
      //self:: digunakan untuk property static
      return collect(self::$blog_posts);
   }

   public static function find($slug){
      //static:: diginakan untuk method static
      $posts = static::all();
      //karna kita udah make collection ini bisa dimatiin, kita pake method collection di alravel
      // $post = [];
      // foreach($posts as $p){
      //    if($p['slug'] === $slug){
      //       $post = $p;
      //    }
      // }
      // return $post;

      //check firstWhere di doc, jadi dia akan mencari dari $posts, dimana 'slug' nya sama dengan $slug.
      return $posts->firstWhere('slug', $slug);
   }
}