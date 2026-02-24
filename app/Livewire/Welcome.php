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
        ])->layout('layouts.principal', [
            'title' => 'Los Internacionales - La banda internacional de México',
            'canonical' => '',
            '_descripcion' => 'Los Internacionales Contamos con un elenco artístico y un grupo de profesionales altamente calificados en su área para alcanzar exitosamente los objetivos de eventos corporativos.',
        ]);
    }
}
