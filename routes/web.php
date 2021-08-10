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

// Route::get('new-admin/{id}', function ($id) {
//     $user = User::findOrFail($id);
//     $status = $user->assignRole('admin');

//     return $status;
// });

# admin part
  Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::prefix('admin')->group(function () {
    # Links
      // dashboard
        Route::view('/', 'admin.dashboard');
      // home editor link
        Route::get('/home', [homeController::class, 'index'])->name('home.index');
      // hookah editor link
        // Route::get('/hookah', [homeController::class, 'index'])->name('hookah.index');
        Route::view('/hookah', 'admin.hookah.dashboard');
        Route::post('/example', function () {
            return 'true';
        })->name('test');
      // hookah categories link
        // Route::get('/hookah/categories', [homeController::class, 'index'])->name('home.index');

    # Handlers
      // home handlers
        Route::prefix('home')->group(function () {
            Route::post('/store', [homeController::class, 'store'])->name('home.store');
            Route::post('/update', [homeController::class, 'update'])->name('home.update');
        });
      // hookah handlers
        Route::prefix('hookah')->group(function () {
          Route::post('/store', [homeController::class, 'store'])->name('home.store');
          Route::post('/update', [homeController::class, 'update'])->name('home.update');
        });
    });
  });


# client part
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


# authenticate part
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
