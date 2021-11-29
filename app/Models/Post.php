<?php

namespace App\Models;

use Clockwork\Storage\Search;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class Post extends Model
{
   use HasFactory;
   //  protected $fillable =[
   //     'title',
   //     'slug',
   //     'excerpt',
   //     'body'
   //    ];
   //  kalo kita males nambahin satu2 yg boleh di isi, kita bisa pake ini
   protected $guarded = ['id'];
   //jadi apapun table nya bisa di isi kecuali table id


   //dengan with nya kita taro di model, jadi setip kita get post, berarti sudah ada category dan usernya
   //kenapa manggil nya author? karena kita ganti relasinya menjadi author di bawah. 
   protected $with = ['category', 'author'];


   //membuat query scopelocal
   public function scopeFilter($query, array $filters)
   {
      // if (isset($filters['search']) ?  $filters['search'] : false) {
      //    return $query->where('title', 'like', '%' . request('search') . '%')
      //       ->orWhere('body', 'like', '%' . request('search') . '%');
      // }
      // ?? adalah coalescing, kaya ternary tp kata isset juga, jadi oenulisanya kaya di bawah, 
      $query->when($filters['search'] ?? false, function ($query, $search) {
         return $query->where(function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%')
               ->orWhere('body', 'like', '%' . $search . '%');
         });
      });
      $query->when($filters['category'] ?? false, function ($query, $category) {
         return $query->whereHas('category', function ($query) use ($category) {
            $query->where('slug', $category);
         });
      });
      // $query->when($filters['author'] ?? false, function ($query, $author) {
      //    return $query->whereHas('author', function ($query) use ($author) {
      //       $query->where('slug', $author);
      //    });
      // });

      //versi arrow function
      $query->when(
         $filters['author'] ?? false,
         fn ($query, $author) =>
         $query->whereHas(
            'author',
            fn ($query) =>
            $query->where('username', $author)
         )
      );
   }



   //penjelasanya kode dibawah liat di category model
   public function category()
   {
      return $this->hasOne(Category::class, 'id', 'category_id');
   }

   public function author()
   {
      // return $this->belongsTo(User::class);
      //nama funtion di atas mendefinisikan nama relasi.
      //contohnya Post has one author. pedahal seharusnya post has one user, sama aja cuma nama functionya kita ganti
      return $this->hasOne(User::class, 'id', 'user_id');
   }
}
