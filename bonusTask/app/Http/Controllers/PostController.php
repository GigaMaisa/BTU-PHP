<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function posts(){
        $posts = DB::table("posts")->where("active", 1)->orderBy("created_at", "desc")->limit(5)->get();
        return view('posts', ['posts'=>$posts]);
    }


    public function editOrAdd(Post $post, Request $request){
        if ($request->input('title')){
            $post->fill($request->all())->save();
            return redirect()->route('posts');
        }
        return view('edit', ['post'=>$post]);
    }
    public function delete(Post $post){
        $post->delete();
        return redirect()->route("posts");

    }
}
