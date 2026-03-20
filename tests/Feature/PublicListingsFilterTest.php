<?php

use App\Livewire\AllProductsList;
use App\Livewire\BlogIndex;
use App\Models\Author;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Product;
use Livewire\Livewire;

// ─────────────────────────────────────────────
//  PRODUCTOS
// ─────────────────────────────────────────────

describe('Listado público de productos (/productos)', function () {

    it('solo muestra productos activos', function () {
        $brand    = Brand::factory()->create();
        $activo   = Product::factory()->create(['brand_id' => $brand->id, 'is_active' => true,  'name' => 'Producto Visible']);
        $inactivo = Product::factory()->create(['brand_id' => $brand->id, 'is_active' => false, 'name' => 'Producto Oculto']);

        $response = $this->get('/productos');

        $response->assertStatus(200);
        $response->assertSee($activo->name);
        $response->assertDontSee($inactivo->name);
    });

    it('no muestra productos inactivos en /productos/todos', function () {
        $brand    = Brand::factory()->create();
        $activo   = Product::factory()->create(['brand_id' => $brand->id, 'is_active' => true]);
        $inactivo = Product::factory()->create(['brand_id' => $brand->id, 'is_active' => false]);

        Livewire::test(AllProductsList::class)
            ->assertViewHas('items', function ($items) use ($activo, $inactivo) {
                return $items->contains('id', $activo->id)
                    && !$items->contains('id', $inactivo->id);
            });
    });

    it('devuelve 404 al acceder al slug de un producto inactivo', function () {
        $brand    = Brand::factory()->create();
        Product::factory()->create(['brand_id' => $brand->id, 'is_active' => false, 'slug' => 'producto-inactivo-test']);

        $this->get('/productos/producto-inactivo-test')
            ->assertStatus(404);
    });

    it('devuelve 200 al acceder al slug de un producto activo', function () {
        $brand = Brand::factory()->create();
        Product::factory()->create(['brand_id' => $brand->id, 'is_active' => true, 'slug' => 'producto-activo-test']);

        $this->get('/productos/producto-activo-test')
            ->assertStatus(200);
    });
});

// ─────────────────────────────────────────────
//  BLOGS
// ─────────────────────────────────────────────

describe('Listado público de blogs (/comunicados)', function () {

    it('solo muestra blogs publicados', function () {
        $author      = Author::factory()->create();
        $publicado   = Blog::factory()->create(['author_id' => $author->id, 'is_published' => true,  'published_at' => now(), 'title' => 'Blog Publicado Test']);
        $nopublicado = Blog::factory()->create(['author_id' => $author->id, 'is_published' => false, 'published_at' => null,  'title' => 'Blog No Publicado Test']);

        Livewire::test(BlogIndex::class)
            ->assertViewHas('blogs', function ($blogs) use ($publicado, $nopublicado) {
                return $blogs->contains('id', $publicado->id)
                    && !$blogs->contains('id', $nopublicado->id);
            });
    });

    it('devuelve 404 al acceder al slug de un blog no publicado', function () {
        $author = Author::factory()->create();
        Blog::factory()->create(['author_id' => $author->id, 'is_published' => false, 'slug' => 'blog-no-publicado-test', 'published_at' => null]);

        $this->get('/blog/blog-no-publicado-test')
            ->assertStatus(404);
    });

    it('devuelve 200 al acceder al slug de un blog publicado', function () {
        $author = Author::factory()->create();
        Blog::factory()->create(['author_id' => $author->id, 'is_published' => true, 'slug' => 'blog-publicado-test', 'published_at' => now()]);

        $this->get('/blog/blog-publicado-test')
            ->assertStatus(200);
    });
});
