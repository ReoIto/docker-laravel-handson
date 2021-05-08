<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // 形式配列で値を受け取る
      // $posts = Post::all()->toArray();

      // Jsonで値を受け取る
      // $posts = Post::all()->toJson();
      // $posts = json_decode($posts);

      // var_dump($posts);

      $posts = Post::all();

      return view('posts.index',[
        'posts' => $posts
      ]);

      // return view('index', [
      //   'posts' => $posts
      // ]);


      // $posts = DB::select('select * from posts');
      // 下３つは全て同じデータを持ってくる
      // $posts = DB::select('select * from posts WHERE id = 2');
      // $posts = DB::select('select * from posts WHERE id = ?', [2]);
      // $posts = DB::select('select * from posts WHERE id = :id', ['id' => 2]);


      // [array] (上と結果は同じだけど、読みやすい)
      // id = $id データを指定
      // $idのデータを全て持ってくる
      // $id = 2;
      // $posts = DB::table('posts')
      //   ->where('id', $id)
      //   ->get();


      // [array] (特定のcolumnだけ持ってくる)
      // $posts = DB::table('posts')
      //   ->select('note')
      //   ->get();


      //  [array] (比較演算子でtrueのデータを持ってくる)
      // $posts = DB::table('posts')
      //   ->where('created_at', '>', now()->subDay())
      //   ->get();


      // [array] (whereがfalseだった時に他のデータを持ってくる)
      // whereメソッド内はfalse
      // falseだった時、orwhereメソッド内のデータを探す
      // 全て出力
      // $posts = DB::table('posts')
      //   ->where('created_at', '<', now()->subDay())
      //   ->orwhere('title', 'Prof.')
      //   ->get();


      // [array] (whereBetweenメソッド 指定の範囲内のものを出力する)
      //idが2から5のデータを指定
      //全て出力
      // $id = 2;
      // $posts = DB::table('posts')
      // ->whereBetween('id', [2,5])
      // ->get();


      // [array] (whereNotNullメソッド 指定したcolumnのうちnullではないものを出力)
      // $posts = DB::table('posts')
      // ->whereNotNull('title')
      // ->get();


      // [array] (distinctメソッド 指定columnの中からユニークなものだけを出力)
      // $posts = DB::table('posts')
      // ->distinct('title')
      // ->get();


      // [array] (latest(ordest)メソッド created_atが最新のものが一番上にくるように並ぶ)
      // $posts = DB::table('posts')
      // ->latest()
      // ->get();


      // [array] (inRandomOrderメソッド ランダムな表示順になる)
      // $posts = DB::table('posts')
      // ->inRandomOrder()
      // ->get();


      // [array] (orderbyメソッド 指定のcolumnを指定の順にする)
      // $posts = DB::table('posts')
      // ->inRandomOrder('created_at', 'desc')
      // ->get();


      // // [array] (findメソッド 指定したidのデータを出力する)
      // $id = 2;
      // $posts = DB::table('posts')
      // ->find($id);


      // [array] (sumメソッド 合計を出力)
      // $id = 2;
      // $posts = DB::table('posts')
      //   ->sum('id');


      // [array] (avgメソッド 平均値を出力)
      // $id = 2;
      // $posts = DB::table('posts')
      //   ->avg('id');


      // [array] (updateメソッド 既存のデータを更新する)
      // $id = 2;
      // $posts = DB::table('posts')
      //   ->avg('id');


      // [array] (updateメソッド 既存のデータを更新する)
      // $posts = DB::table('posts')
      //   ->where('id', '=', 2)
      //   ->update([
      //     'title' => 'New title',
      //     'meaning' => 'New meaning'
      //   ]);


      // [array] (deleteメソッド 削除)
      // $posts = DB::table('posts')
      //   ->where('id', '=', 2)
      //   ->delete();


      // countメソッド
      // print_r(Post::all()->count());
      // print_r(Post::where('title', 'Vocab')->count());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // 単語が登録される前にバリデーションをかける
      $request->validate([
        'title' => 'required',
        'meaning' => 'required'
      ]);

      $post = Post::create([
        'title' => $request->input('title'),
        'meaning' => $request->input('meaning'),
        'example' => $request->input('example'),
        'synonyms' => $request->input('synonyms'),
        'antonyms' => $request->input('antonyms'),
        'note' => $request->input('note')
      ]);

      return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);

      return view('posts.show')->with('post', $post);

      return redirect()->route('post.show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::find($id);

      return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $post = Post::where('id', $id)->update([
        'title' => $request->input('title'),
        'meaning' => $request->input('meaning'),
        'example' => $request->input('example'),
        'synonyms' => $request->input('synonyms'),
        'antonyms' => $request->input('antonyms'),
        'note' => $request->input('note')
      ]);

      return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      $post->delete();
      return redirect('/posts');
    }
}
