<?php

use App\Http\Controllers\barController;
use App\Http\Controllers\bowlsController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\hookahController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\takeawayController;
use App\Http\Controllers\tobaccoController;
use App\Models\bar;
use App\Models\bowls;
use App\Models\home;
use App\Models\hookah;
use App\Models\services;
use App\Models\takeaway;
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
      // bar editor link
        Route::get('/bar', [barController::class, 'index'])->name('admin.bar.index');
      // services editor link
        Route::get('/services', [servicesController::class, 'index'])->name('admin.services.index');
      // takeaway editor link
        Route::get('/take-a-way', [takeawayController::class, 'index'])->name('admin.takeaway.index');
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
      // bar handlers
        Route::prefix('bar')->group(function () {
            Route::post('/get', [barController::class, 'get'])->name('admin.bar.get');
            Route::post('/store', [barController::class, 'store'])->name('admin.bar.store');
            Route::post('/update/{id}', [barController::class, 'update'])->name('admin.bar.update');
            Route::post('/destroy/{id}', [barController::class, 'destroy'])->name('admin.bar.destroy');
        });
      // services handlers
        Route::prefix('services')->group(function () {
            Route::post('/get', [servicesController::class, 'get'])->name('admin.services.get');
            Route::post('/store', [servicesController::class, 'store'])->name('admin.services.store');
            Route::post('/update/{id}', [servicesController::class, 'update'])->name('admin.services.update');
            Route::post('/destroy/{id}', [servicesController::class, 'destroy'])->name('admin.services.destroy');
        });
      // takeaway handlers
        Route::prefix('takeaway')->group(function () {
            Route::post('/get', [takeawayController::class, 'get'])->name('admin.takeaway.get');
            Route::post('/store', [takeawayController::class, 'store'])->name('admin.takeaway.store');
            Route::post('/update/{id}', [takeawayController::class, 'update'])->name('admin.takeaway.update');
            Route::post('/destroy/{id}', [takeawayController::class, 'destroy'])->name('admin.takeaway.destroy');
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
        $hookahs = $hookahs_query->get();

        $tobacco_query = tobacco::orderByDesc('id');
        $tobacco = $tobacco_query->get();

        $bowls_query = bowls::orderByDesc('id');
        $bowls = $bowls_query->get();

        return view('hookahs', compact('home', 'hookahs', 'tobacco', 'bowls'));
    })->name('menu.hookahs');

    Route::get('/bar', function () {
        $beerFirst = bar::where('category' , '=' , 'beer' )->first();
        $beerSecond = bar::where('category' , '=' , 'beer' )->skip(1)->first();
        $bar_query = bar::orderByDesc('id');
        $bar = $bar_query->get();
        $home = home::first();

        return view('bar', compact('home', 'bar', 'beerFirst', 'beerSecond'));
    })->name('menu.bar');

    Route::get('/services', function () {
        $services_query = services::orderByDesc('id');
        $services = $services_query->get();
        $home = home::first();
        return view('services', compact('home', 'services'));
    })->name('menu.services');

    Route::get('/take-a-way', function () {
        $home = home::first();

        $delivery = takeaway::first();

        $count = takeaway::count();
        $skip = 1;
        $limit = $count - $skip;
        $takeaway_query = takeaway::skip($skip)->take($limit)->get();

        $takeaway = $takeaway_query;

        return view('takeaway', compact('home', 'takeaway', 'delivery'));
    })->name('menu.takeAway');
