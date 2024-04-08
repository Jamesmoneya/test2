<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class PostController extends Controller
{
    public function index(){
        $posts = post::all();
        return view('PostIndex',
            ['posts'=>$posts]);
    }
    public function create(Request $request){
        $content = $request ->content;
        post::create([
            'content'=>$content,
            'inputer'=>'curry',
        ]);
        return redirect()->route('index');
    }
    public function edit($id) {

        $post = post::find($id);
        return view('edit',['post'=> $post]);
    }
    public function update(Request $request,$id){
        $post = post::find($id);
        $post ->update(['content'=>$request->content]);
        return redirect()->route('index');
    }
}
