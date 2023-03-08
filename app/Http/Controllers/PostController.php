<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('posts.index',compact('posts'));
    }

    public function add(){
        return view('posts.add');
    }

    public function create(Request $request){
        $post = new post();
        $post->category_id = $request->input('category_id');
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        //image code
        $allFileData =$request->file("media");
        $file_name = $allFileData->getClientOriginalName();
        $allFileData->move(public_path() . "/media/", $file_name.time());
        $post->media = $file_name.time();

        $post->save();
        return redirect()->back();
    }

    public function show($id){
        $post = Post::findorFail($id);
        $carousel = Carousel::where('post_id',$id)->get();
        return view('posts.show',compact('post','carousel'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->category_id = $request->input('category_id');
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        //image code
        $allFileData =$request->file("media");
        $file_name = $allFileData->getClientOriginalName();
        $allFileData->move(public_path() . "/media/", $file_name.time());
        $post->media = $file_name.time();

        $post->update();
        return redirect()->back();
    }

    public function destroy($id){
        $post = DB::table('posts')->where('id',$id)->delete();
        return redirect()->back();
    }
}
