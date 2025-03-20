<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();







Route::view('/', 'welcome')->name('welcome');
Route::view('contacto', 'contacto')->name('contacto');
Route::get('blog', [postController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('blog', [postController::class, 'store'])->name('posts.store');

Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
