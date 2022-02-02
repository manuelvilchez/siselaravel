<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        return view('post.index');

    }


    // public function user($id){
    //     // $posts = Post::orderBy('id', 'desc')->where(['users_id'=>$id])->paginate(5);
    //     // return view('livewire.post.postuser-component', compact('posts'));
    //     // echo 'hola';
    //      return view('post.postuser');
    // }
}
