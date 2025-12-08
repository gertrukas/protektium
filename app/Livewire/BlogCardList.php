<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogCardList extends Component
{
    public string $title;

    public int $limit = 6;

    public function render()
    {

        $items = Blog::where('is_published', 1)
            ->wherenotNull('published_at')
            ->inRandomOrder()
            ->limit($this->limit)
            ->get();

        return view('livewire.blog-card-list', [
            'items' => $items,
        ]);

    }
}
