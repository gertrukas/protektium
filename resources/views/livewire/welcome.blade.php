<section class="container">
    <!-- Productos -->

    @include('components.home-hero-section')

    <div class="">
        @livewire('blog-card-list', ['title' => 'COMUNICADOS', 'limit' => env('LIMIT_SHOW_BLOGS_INITIAL_PAGE', 3)])
    </div>

</section>
