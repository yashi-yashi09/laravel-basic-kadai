<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;

class PostController extends Controller{
    public function index () {
    // postsテーブルからすべてのデータを取得し変数$postsに代入
    $posts = DB::table('posts')->get();

    // $postsをposts/index.blade.phpファイルに渡す
    return view('posts.index',Compact('posts'));
}

}