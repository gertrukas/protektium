<?php

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Product;

// ─────────────────────────────────────────────
//  PRODUCTOS
// ─────────────────────────────────────────────

describe('Listado público de productos (/productos)', function () {

    it('solo muestra productos activos', function () {
        $brand = Brand::factory()->create();

        $activo   = Product::factory()->create(['brand_id' => $brand->id, 'is_active' => true,  'name' => 'Producto Visible']);
        $inactivo = Product::factory()->create(['brand_id' => $brand->id, 'is_active' => false, 'name' => 'Producto Oculto']);

        $response = $this->get('/productos');

        $response->assertStatus(200);
        $response->assertSee($activo->name);
        $response->assertDontSee($inactivo->name);
    });

    it('no muestra productos inactivos en /productos/todos', function () {
        $brand = Brand::factory()->create();

        $activo   = Product::factory()->create(['brand_id' => $brand->id, 'is_active' => true,  'name' => 'ListadoTodos Visible']);
        $inactivo = Product::factory()->create(['brand_id' => $brand->id, 'is_active' => false, 'name' => 'ListadoTodos Oculto']);

        $response = $this->get('/productos/todos');

        $response->assertStatus(200);
        $response->assertSee($activo->name);
        $response->assertDontSee($inactivo->name);
    });

    it('devuelve 404 al acceder al slug de un producto inactivo', function () {
        $brand    = Brand::factory()->create();
        $inactivo = Product::factory()->create(['brand_id' => $brand->id, 'is_active' => false, 'slug' => 'producto-inactivo-test']);

        $this->get('/productos/producto-inactivo-test')
            ->assertStatus(404);
    });

    it('devuelve 200 al acceder al slug de un producto activo', function () {
        $brand  = Brand::factory()->create();
        $activo = Product::factory()->create(['brand_id' => $brand->id, 'is_active' => true, 'slug' => 'producto-activo-test']);

        $this->get('/productos/producto-activo-test')
            ->assertStatus(200);
    });
});

// ─────────────────────────────────────────────
//  BLOGS
// ─────────────────────────────────────────────

describe('Listado público de blogs (/comunicados)', function () {

    it('solo muestra blogs publicados', function () {
        $publicado   = Blog::factory()->create(['is_published' => true,  'published_at' => now(), 'title' => 'Blog Publicado Test']);
        $nopublicado = Blog::factory()->create(['is_published' => false, 'published_at' => null,  'title' => 'Blog No Publicado Test']);

        $response = $this->get('/comunicados');

        $response->assertStatus(200);
        $response->assertSee($publicado->title);
        $response->assertDontSee($nopublicado->title);
    });

    it('devuelve 404 al acceder al slug de un blog no publicado', function () {
        Blog::factory()->create(['is_published' => false, 'slug' => 'blog-no-publicado-test', 'published_at' => null]);

        $this->get('/blog/blog-no-publicado-test')
            ->assertStatus(404);
    });

    it('devuelve 200 al acceder al slug de un blog publicado', function () {
        Blog::factory()->create(['is_published' => true, 'slug' => 'blog-publicado-test', 'published_at' => now()]);

        $this->get('/blog/blog-publicado-test')
            ->assertStatus(200);
    });
});
