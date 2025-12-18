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

    return view('aviso-de-privacidad', compact('title', 'canonical'));
});

Route::get('/federacion-canofila-mexicana', function () {
    $title = 'Federación Canofila Mexicana';
    $canonical = '/federacion-canofila-mexicana';

    return view('federacion-canofila-mexicana', compact('title', 'canonical'));
});

Route::get('/razas', function () {
    $title = 'Razas pomeranian, shih tzu y yorkies';
    $canonical = '/razas';

    return view('razas', compact('title', 'canonical'));
});

Route::get('/quienes-somos', function () {
    $title = 'quienes somos';
    $canonical = '/quienes-somos';
    $_descripcion = 'Somos un criadero familiar que nació del amor, la dedicación y el respeto hacia los perros.';

    return view('somos', compact('title', 'canonical', '_descripcion'));
});

Route::get('/servicios', function () {
    $title = 'Romcypets servicios';
    $canonical = '/servicios';

    return view('servicios', compact('title', 'canonical'));
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
