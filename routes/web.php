<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\hookahController;
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
  Route::group(['middleware' => ['auth:sanctum', 'verified', 'role:admin']], function () {
    Route::prefix('admin')->group(function () {
    # Links
      // dashboard
        Route::get('/dashboard', function() {
            $home = home::first();
            return view('admin.dashboard', compact('home'));
        })->name('admin.index');
      // home editor link
        Route::get('/home', [homeController::class, 'index'])->name('home.index');
      // hookah editor link
        Route::get('/hookah', [hookahController::class, 'index'])->name('admin.hookah.index');
        // Route::view('/hookah', 'admin.hookah.dashboard')->name('admin.hookah.index');
      // hookah categories link
        // Route::get('/hookah/categories', [homeController::class, 'index'])->name('home.index');

    # Handlers
      // home handlers
        Route::prefix('home')->group(function () {
            Route::post('/store', [homeController::class, 'store'])->name('home.store');
            Route::post('/update', [homeController::class, 'update'])->name('home.update');
        });
      // hookah handlers
        // Route::prefix('hookah')->group(function () {
        //   Route::post('/store', [homeController::class, 'store'])->name('admin.hookah.store');
        //   Route::post('/update', [homeController::class, 'update'])->name('admin.hookah.update');
        // });
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
