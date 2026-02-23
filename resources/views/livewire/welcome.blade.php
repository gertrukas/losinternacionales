
 

<section class="w-full">
    

    @include('components.home-hero-section')

    <!-- Productos -->
    <div class="container">
        @livewire('product-card-list', ['title' => 'PRODUCTOS', 'destacadoValue' => 0, 'limit' => env('LIMIT_SHOW_PRODUCTS_INITIAL_PAGE_INITIAL_PAGE', 3)])
    </div>
     {{-- Blogs o comunicados --}}
    <div class="container">
        @livewire('blog-card-list', ['title' => 'COMUNICADOS', 'limit' => env('LIMIT_SHOW_BLOGS_INITIAL_PAGE', 3)])
    </div>

</section>
