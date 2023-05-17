<?php
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
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

//route domain
//www.nameofyourblog.com

//using closures
// Route::get('/', function () {
//     return view('welcome');
// });

//using controller
//its advicable to use controllers, this will make your work
//clean as all logic will be placed in the controller,

//to welcome page
Route::get('/', [WelcomeController::class, 'index']);

//to blog page
Route::get('/blog', [BlogController::class, 'index']);

//to single blog page
Route::get('/blog/single-blog-post', [BlogController::class, 'show']);

//to about page
//we use closure here cause the page will be a static page
Route::get('/about', function(){
    return view('about');
});

//to contact page
Route::get('/contact', [ContactController::class, 'index']);



