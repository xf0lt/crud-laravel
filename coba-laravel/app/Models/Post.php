<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Cviebrock\Eloquent-Sluggable\Sluggable;
use \Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\Services\SlugService;
// use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


class Post extends Model {
    use HasFactory, Sluggable;
   //  use Sluggable;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ["id"];
    protected $with = ['category', 'author'];

    // filter pencarian 
    public function scopeFilter($query, array $filters) {
      $query->when($filters['search'] ?? false, function($query, $search) {
         return $query->where('title', 'like', '%' . $search . '%' )
                     ->orWhere('body', 'like', '%' . $search . '%');

      });

      $query->when($filters['category'] ?? false, function($query, $category) {
         return $query->whereHas('category', function($query) use ($category) {
            $query->where('slug', $category);
         });
      });

      $query->when($filters['author'] ?? false, fn($query, $author) =>
         $query->whereHas('author', fn($query) => 
         $query->where('username', $author)
         )
      );
    }

    // category
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // user 
    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName() {
      return 'slug';
    }

    public function sluggable(): array {
      return [
         'slug' => [
            'source' => 'title'
         ]
      ];
    }
}
