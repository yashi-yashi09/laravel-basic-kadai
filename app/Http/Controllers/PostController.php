<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
  use App\Models\Post;
class PostController extends Controller{
    public function index () {
    // postsテーブルからすべてのデータを取得し変数$postsに代入
    $posts = DB::table('posts')->get();

    // $postsをposts/index.blade.phpファイルに渡す
    return view('posts.index',Compact('posts'));
}

public function show($id) {
    // URL'/products/{id}'の'{id}'部分と主キー（idカラム）の値が
    //一致するデータをpostsテーブルから取得し、変数$postsに代入する
    $post = Post::find($id);

    // 変数$postをposts/show.blade.phpファイルに渡す
    return view('posts.show', compact('post'));
}

}