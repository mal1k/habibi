<?php

use App\Http\Controllers\homeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
