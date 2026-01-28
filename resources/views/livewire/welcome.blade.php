<section class="container">

    {{-- Blogs o comunicados --}}
    <div>
        @livewire('blog-card-list', ['title' => 'COMUNICADOS', 'limit' => env('LIMIT_SHOW_BLOGS_INITIAL_PAGE', 3)])
    </div>
    <!-- Productos -->
    <div class="">
        @livewire('product-card-list', ['title' => 'PRODUCTOS', 'destacadoValue' => 0, 'limit' => env('LIMIT_SHOW_PRODUCTS_INITIAL_PAGE_INITIAL_PAGE', 3)])
    </div>

</section>
