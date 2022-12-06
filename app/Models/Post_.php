<?php 
namespace App\Models;

use PhpParser\Node\Expr\FuncCall;

class Post
{
   private static $blog_posts = [
      [
         "title" => "Judul Tulisan pertama",
         "slug" => "judul-tulisan-pertama",
         "author" => "Kira",
         "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas dolorem, nostrum, eaque officia incidunt quos, blanditiis nisi ullam possimus accusamus officiis ipsa consequatur odit libero veritatis in magni quia explicabo quae voluptate aut doloribus dicta. Harum at."
     ],
     [
         "title" => "Judul Tulisan Iswan",
         "slug" => "judul-tulisan-kedua",
         "author" => "El",
         "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Error perferendis quae iste quis provident ipsam reiciendis facere beatae dolorum adipisci animi, nostrum saepe dolores libero odit illum porro culpa aspernatur ad aperiam minus laborum alias quo assumenda. Nisi sit rerum, vero vel, hic, eius consequatur libero quis nihil amet atque laborum cum aut eligendi deserunt "
     ],
   
   ];

   public static Function all()
   {
      return collect(self::$blog_posts);
   }

   public static Function find($slug)
   {
      $posts = static::all();
      // $post = [];
      // foreach($posts as $p) {
         //  if($p["slug"] === $slug) {
            //   $post = $p;
         //  }
      // }
      return $posts->firstWhere('slug', $slug);
   }


}



?>