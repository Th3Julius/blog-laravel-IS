<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;


class ShowPost extends Component
{
    public $mensaje='Mi nuevo proyecto de livewire';

    public function render()
    {
        $posts=Post::all();
        return view('livewire.show-post',compact('posts'));
    }

}
