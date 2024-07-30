<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

class Blog extends Component
{
    #[Title('Blog Posts')]
    public function render()
    {
        return view(
            'livewire.blog',
            [
                'posts' => Post::all(),
            ]
        );
    }
}
