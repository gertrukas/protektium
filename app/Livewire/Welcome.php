<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class Welcome extends Component
{
    /**
     * Renderiza la vista del componente.
     *
     * @return \Illuminate\Contracts\View\View
     */
    
    public function render()
    {
        $blogs = Blog::where('is_published', 1)
            ->wherenotNull('published_at')
            ->inRandomOrder()
            ->limit(3)->get();

        return view('livewire.welcome', [
            'blogs' => $blogs,
        ])->layout('layouts.principal',[
            'title' => 'Protektium - Soluciones en calzado industrial y equipo de seguridad',
            'canonical' => '',
            '_descripcion' => 'En Protektium ofrecemos soluciones en calzado industrial y accesorios de seguridad, respaldadas por asesoría técnica y enfoque ergonómico.',
        ]);
    }
}
