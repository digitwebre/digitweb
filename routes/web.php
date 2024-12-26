<?php

use App\Http\Controllers\Blog\IndexBlogController;
use App\Http\Controllers\Contact\StoreContactController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');
// });

Route::get('/', function(){
    return Inertia::render('Index');
})->name('index');
//Formulaire de contact
Route::get('contact', function(){
    return Inertia::render('Contact');
})->name('contact');
Route::post('/contact/', StoreContactController::class)->name('contact.send');

//Pour la partie blog
Route::get('/blog', IndexBlogController::class)->name('blog.index');



//Route static
Route::get('les-raisons-de-nous-choisir', function(){
    return Inertia::render('whyUs');
})->name('whyUs');
Route::get('notre-portfolio', function(){
    return Inertia::render('Portfolio');
})->name('portfolio');
Route::get('tarifs', function(){
    return Inertia::render('Tarifs');
})->name('tarifs');
Route::get('qui-sommes-nous', function(){
    return Inertia::render('Presentation');
})->name('presentation');
Route::get('privay-policy', function(){
    return Inertia::render('Footer/Privacy');
})->name('links.privacy');
Route::get('terms-of-services', function(){
    return Inertia::render('Footer/Terms');
})->name('links.terms');