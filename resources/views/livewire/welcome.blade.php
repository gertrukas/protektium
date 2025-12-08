<section class="container">
   <!-- Productos -->
    <div class="container mx-auto p-0">
        @livewire('product-card-list', ['title' => 'PROMOCIONES', 'destacadoValue' => 1, 'limit' => env('LIMIT_SHOW_FEATURES_PRODUCTS_INITIAL_PAGE', 3)])
        @livewire('product-card-list', ['title' => 'PRODUCTOS', 'destacadoValue' => 0, 'limit' => env('LIMIT_SHOW_FEATURES_PRODUCTSLIMIT_SHOW_FEATURES_PRODUCTS_INITIAL_PAGE_INITIAL_PAGE', 3)])
    </div>



    @livewire('blog-card-list', ['title' => 'COMUNICADOS', 'limit' => env('LIMIT_SHOW_BLOGS_INITIAL_PAGE', 6)])


</section>
