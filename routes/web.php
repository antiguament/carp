<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::view('/', 'welcome')->name('welcome');
Route::view('contacto', 'contacto')->name('contacto');
Route::view('nosotros', 'nosotros')->name('nosotros');

// Rutas del Blog
Route::get('blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('blog', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');

// Rutas de Disciplinas
Route::view('capoeira', 'capoeira')->name('capoeira');
Route::view('breackdance', 'breackdance')->name('breackdance');
Route::view('parkour', 'parkour')->name('parkour');
Route::view('freerunning', 'freerunning')->name('freerunning');
Route::view('calistenia', 'calistenia')->name('calistenia');
Route::view('cliffjumping', 'cliffjumping')->name('cliffjumping');

// Galerías (opcional, puedes mantenerlas o eliminarlas)
Route::view('galeriacapoeira', 'galeriacapoeira')->name('galeriacapoeira');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');