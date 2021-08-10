<?php

use App\Http\Controllers\homeController;
use App\Models\home;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('new-admin/{id}', function ($id) {
    $user = User::findOrFail($id);
    $status = $user->assignRole('admin');

    return $status;
});

Route::group(['middleware' => ['role:admin']], function () {
  // home link
    Route::get('/home', [homeController::class, 'index'])->name('home.index');
  // home handlers
    Route::post('/home/store', [homeController::class, 'store'])->name('home.store');
    Route::post('/home/update', [homeController::class, 'update'])->name('home.update');
});


// client part
Route::get('/', function () {
    $home = home::first();
    return view('layout', compact('home'));
});

Route::get('/hookahs', function () {
    $home = home::first();
    return view('hookahs', compact('home'));
})->name('menu.hookahs');

Route::get('/bar', function () {
    $home = home::first();
    return view('bar', compact('home'));
})->name('menu.bar');

Route::get('/services', function () {
    $home = home::first();
    return view('services', compact('home'));
})->name('menu.services');

Route::get('/take-away', function () {
    $home = home::first();
    return view('takeAway', compact('home'));
})->name('menu.takeAway');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
