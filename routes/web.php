<?php

use App\Http\Controllers\bowlsController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\hookahController;
use App\Http\Controllers\tobaccoController;
use App\Models\bowls;
use App\Models\home;
use App\Models\hookah;
use App\Models\tobacco;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
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
            return view('admin.home.dashboard', compact('home'));
        })->name('admin.home.dashboard');
      // home editor link
        Route::get('/home', [homeController::class, 'index'])->name('admin.home.index');
      // hookah editor link
        Route::get('/hookah', [hookahController::class, 'index'])->name('admin.hookah.index');

    # Handlers
      // home handlers
        Route::prefix('home')->group(function () {
            Route::post('/store', [homeController::class, 'store'])->name('admin.home.store');
            Route::post('/update', [homeController::class, 'update'])->name('admin.home.update');
        });
      // hookah handlers
        Route::prefix('hookah')->group(function () {
          Route::post('/get', [hookahController::class, 'get'])->name('admin.hookah.get');
          Route::post('/store', [hookahController::class, 'store'])->name('admin.hookah.store');
          Route::post('/update/{id}', [hookahController::class, 'update'])->name('admin.hookah.update');
          Route::post('/destroy/{id}', [hookahController::class, 'destroy'])->name('admin.hookah.destroy');
        });
      // tobacco handlers
        Route::prefix('tobacco')->group(function () {
            Route::post('/get', [tobaccoController::class, 'get'])->name('admin.tobacco.get');
            Route::post('/store', [tobaccoController::class, 'store'])->name('admin.tobacco.store');
            Route::post('/update/{id}', [tobaccoController::class, 'update'])->name('admin.tobacco.update');
            Route::post('/destroy/{id}', [tobaccoController::class, 'destroy'])->name('admin.tobacco.destroy');
        });
      // bowl handlers
        Route::prefix('bowls')->group(function () {
            Route::post('/get', [bowlsController::class, 'get'])->name('admin.bowls.get');
            Route::post('/store', [bowlsController::class, 'store'])->name('admin.bowls.store');
            Route::post('/update/{id}', [bowlsController::class, 'update'])->name('admin.bowls.update');
            Route::post('/destroy/{id}', [bowlsController::class, 'destroy'])->name('admin.bowls.destroy');
        });
    });
  });


# client part
    Route::get('/', function () {
        $home = home::first();
        return view('home', compact('home'));
    });

    Route::get('/hookahs', function () {
        $home = home::first();
        $hookahs_query = hookah::orderByDesc('id');
        $hookahs = $hookahs_query->paginate(0);

        $tobacco_query = tobacco::orderByDesc('id');
        $tobacco = $tobacco_query->paginate(0);

        $bowls_query = bowls::orderByDesc('id');
        $bowls = $bowls_query->paginate(0);

        return view('hookahs', compact('home', 'hookahs', 'tobacco', 'bowls'));
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
