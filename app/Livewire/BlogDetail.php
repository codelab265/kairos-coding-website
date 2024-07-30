<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
use Livewire\Attributes\Title;
use Livewire\Component;

class BlogDetail extends Component
{
    #[Title('Blog Detail')]
    public function render(HttpRequest $request)
    {
        return view(
            'livewire.blog-detail',
            [
                'post' => Post::query()->where('slug', $request->post)->first(),
            ]
        );
    }
}
