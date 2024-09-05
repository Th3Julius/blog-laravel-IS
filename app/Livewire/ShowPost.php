<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPost extends Component
{
    public $mensaje="desde mi variable";
    use WithPagination;
    public function render()
    {
        $posts=Post::paginate(6);
        return view('livewire.show-post',compact('posts'));
    }
}

