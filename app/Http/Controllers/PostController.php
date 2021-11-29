<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // dd(Post::with(['author', 'category'])->latest()->get());

    //karna semua tittle all post dan kita gamake route jadi kita akalin gini
    $title = '';
    if (request('category')) {
      $category = Category::firstWhere('slug', request('category'));
      $title = ' in ' . $category->name;
    }
    if (request('author')) {
      $author = User::firstWhere('username', request('author'));
      $title = ' By ' . $author->name;
    }


    return view('posts', [
      "title" => "All Posts $title",
      "active" => "posts",
      //  "posts" => Post::all()
      // "posts" => Post::with(['author', 'category'])->latest()->get() kalo pake controller disini,
      "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(), //kita tetep mengambil author dan kategori di model post, mangkanya kita tidak ngambil seperti di atas.
    ]);
  }
  // public function getAllPost()
  // {
  //   return [
  //     'title' => 'Blog',
  //     'posts' => Post::all()
  //   ];
  // }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function show(Post $post)
  {
    //  $data = Post::where('slug', $post)->first();

    return view('post', [
      "title" => "Single Post",
      "active" => "posts",
      "posts" => Post::latest()->get()->slice(-0, 6),
      "post" => $post,
      "postId" => $post->id
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function edit()
  {
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Post $post)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function destroy(Post $post)
  {
    //
  }
}
