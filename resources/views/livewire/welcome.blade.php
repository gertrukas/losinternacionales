
 

<section class="w-full">

    
     {{-- Blogs o comunicados --}}
    <div class="container">
        @livewire('blog-card-list', ['title' => 'COMUNICADOS', 'limit' => env('LIMIT_SHOW_BLOGS_INITIAL_PAGE', 3)])
    </div>

</section>
