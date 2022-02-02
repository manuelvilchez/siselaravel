<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $userposts_id, $title, $body;
    public function render()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('livewire.post.post-component', compact('posts'));
    }

    public function user($id){
        $posts = Post::orderBy('id', 'desc')->where(['users_id'=>$id])->paginate(5);
        return view('post.postuser', compact('posts'));
    }
}
