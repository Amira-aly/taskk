<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    // get
    // http://127.0.0.1:8000/api/posts
    public function index(){
        return Post::orderBy('id', 'DESC')->get();
    }

    // post
    // http://127.0.0.1:8000/api/posts
    public function store(Request $request )
    {
        $post = new post();
        $post->id = $request->post['id'];
        $post->category_id = $request->post['category_id'];
        $post->title = $request->post['title'];
        $post->content = $request->post['content'];
        $post->media = $request->post['media'];
        $post->save();
        $carousel = new Carousel();
        $carousel->id = $request->carousel['id'];
        $carousel->id_ad = $request->carousel['id_ad'];
        $carousel->content = $request->carousel['content'];
        $carousel->see_more = $request->carousel['see_more'];
        $carousel->media = $request->carousel['media'];
        $carousel->post_id = $request->post['id'];
        $carousel->save();
        $response = [
            "post" => $post,
            "carousel" => $carousel,
            "message" =>"Insert Done",
        ];
        return response($response, 201);
    }

    // put
    // http://127.0.0.1:8000/api/posts/id
    public function update(Request $request,$id)
    {
        $post = Post::find($id);
        $post->id = $request->post['id'];
        $post->category_id = $request->post['category_id'];
        $post->title = $request->post['title'];
        $post->content = $request->post['content'];
        $post->media = $request->post['media'];
        $post->update();
        $carousel = Carousel::where('post_id',$id)->first();
        $carousel->id = $request->carousel['id'];
        $carousel->id_ad = $request->carousel['id_ad'];
        $carousel->content = $request->carousel['content'];
        $carousel->see_more = $request->carousel['see_more'];
        $carousel->media = $request->carousel['media'];
        $carousel->post_id = $request->post['id'];
        $carousel->update();
        $response = [
            "post" => $post,
            "carousel" => $carousel,
            "message" =>"update Done",
        ];
        return response($response, 201);
    }

    // get post with carousel by id post
    // http://127.0.0.1:8000/api/posts/1
    public function show($id){
        $post = Post::find($id);
        $carousel = Carousel::where('post_id',$id)->get();
        $response = [
            "post" =>$post,
            "carousel" =>$carousel,
        ];
        return response($response, 201);
    }

    // delete
    // http://127.0.0.1:8000/api/posts/1
    public function destroy($id){
        $all_carousel = Carousel::where('post_id',$id)->get();
        if($all_carousel != null){
            foreach( $all_carousel as $carousel ) {
                $row = $carousel->id;
                $delete_all_id = explode(",", $row);
                Carousel::whereIn('id', $delete_all_id)->Delete();
            }
        }
        $post = Post::destroy($id);
        $response = [
            "all_carousel" =>$all_carousel,
            "post" =>$post,
        ];
        return response($response, 201);
    }
}
