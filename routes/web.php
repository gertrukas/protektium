<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\AllProductsList;
use App\Livewire\BlogIndex;
use App\Livewire\ContactForm;
use App\Livewire\Products;
use App\Livewire\ShowBlog;
use App\Livewire\ShowProduct;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Welcome::class)->name('home');

Route::get('/productos/todos/{destacado?}', AllProductsList::class)
    ->name('products.index');

Route::get('/blog/{slug}', ShowBlog::class)->name('blog.show');

Route::get('/comunicados', BlogIndex::class)->name('blogs.index');

Route::get('/aviso-de-privacidad', function () {
    $title = 'Aviso de privacidad';
    $canonical = '/aviso-de-privacidad';
    $_descripcion = 'En Protektium reespetamos las regulaciones para la protección de datos';

    return view('aviso-de-privacidad', compact('title', 'canonical', '_descripcion'));
});



Route::get('/razas', function () {
    $title = 'Razas pomeranian, shih tzu y yorkies';
    $canonical = '/razas';
    $_descripcion = 'Las razas que criamos son: Pomerania, Shih Tzu y Yorkie';

    return view('razas', compact('title', 'canonical', '_descripcion'));
});

Route::get('/quienes-somos', function () {
    $title = 'quienes somos';
    $canonical = '/quienes-somos';
    $_descripcion = 'En Protektium ofrecemos soluciones en calzado industrial y accesorios de seguridad, respaldadas por asesoría técnica y enfoque ergonómico.';

    return view('somos', compact('title', 'canonical', '_descripcion'));
});

Route::get('/servicios', function () {
    $title = 'Protektium servicios';
    $canonical = '/servicios';
    $_descripcion = 'En Protektium creemos que cada cachorro merece un cuidado completo, amoroso y adaptado a sus necesidades.';

    return view('servicios', compact('title', 'canonical', '_descripcion'));
});

Route::get('/contacto', ContactForm::class)->name('contacto');


Route::get('/dashboard', function () {
    if (Auth::check()) {
        if (Auth::user()->isAdmin()) {
            return redirect()->to('/admin');
        }
    }

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/productos', Products::class)->name('products');
Route::get('/productos/{slug}', ShowProduct::class)->name('product.show');
require __DIR__.'/auth.php';

Route::get('/fcm', function () {
    return view('fcm');
});
