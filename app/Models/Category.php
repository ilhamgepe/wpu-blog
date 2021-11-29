<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //ini kita buat relasi category kepada post
    //nama methodnya harus sama ama yang akan kita panggil
    //misal nama metdhodnya tolol
    //berarti kita harus nulis $category->tolol di controller
    public function posts(){
       return $this->hasMany(Post::class);
    }
}
