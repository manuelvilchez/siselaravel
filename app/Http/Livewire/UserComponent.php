<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name, $username, $email, $street, $suite, $city, $zipcode, $lat, $lng, $phone, $website, $company_name, $company_catchPhrase, $bs;

    public function render()
    {
        $users = User::orderBy('id', 'desc')->paginate(5);
        return view('livewire.user.user-component', compact('users'));
    }

    public function posts($id){
        // $posts = Post::orderBy('id', 'desc')->where(['users_id'=>$id])->paginate(5);
        redirect('posts/user/'.$id);
        // return view('livewire.post.post-component', compact('posts'));
    }
}
