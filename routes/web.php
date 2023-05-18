<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
//get all the pages and  create different routes for different pages they will all go through the PageController

$pages = App\Models\Page::all();


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
// our-work
Route::get('/our-work', [PageController::class, 'ourWork'])->name('our-work');
//get-involved
Route::get('/get-involved', [PageController::class, 'getInvolved'])->name('get-involved');
//donate
Route::get('/donate', [PageController::class, 'donate'])->name('donate');
//events
Route::get('/events', [PageController::class, 'events'])->name('events');
//services
Route::get('/services', [PageController::class, 'services'])->name('services');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
