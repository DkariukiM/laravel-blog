<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// www.nameofyoursite.com/

// Using closure
// Route::get('/', function () {
//     return view('welcome');
// });

// Using controller

// To welcome page
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

// To blog page
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

//to single blog page
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

//to view your blog posts
Route::get('/blog/posts', [BlogController::class, 'posts'])->name('posts.show');

//to create a blog posts
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');

//to store a blog posts to DB
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

//to store a blog posts to DB
Route::post('/blog', [BlogController::class, 'comment'])->name('blog.comment');


// To about page
Route::get('/about', function(){
    return view('about');
})->name('about');

// To contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
