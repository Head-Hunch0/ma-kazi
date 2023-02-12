<?php

use App\Http\Controllers\listings;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UserController;
use App\Mail\MailNotify;
use App\Models\listings as ModelsListings;
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

// Route::get('/', function () {
//         return view('listings');
//     });

Route::get('/login', function () {
        return view('test');
    });

    Route::get('/', [listings::class, 'index'])->name('index');
    
    // all listing routes
    Route::prefix('/listings')->group(function (){

    Route::get('/all', [listings::class, 'All']);
    
    Route::get('/create', [listings::class, 'CreateForm'])->middleware('auth');

    Route::post('/store', [listings::class, 'StoreJob'])->middleware('auth');

    Route::get('/apply/{id}', [listings::class, 'Apply']);

    Route::post('/application/{id}', [MailController::class, 'Application']);

    Route::get('/{id}/edit', [listings::class, 'EditJob'])->middleware('auth');

    Route::post('/{id}/update', [listings::class, 'UpdateJob'])->middleware('auth');

    Route::get('/{id}/delete', [listings::class, 'DeleteJob'])->middleware('auth');

    Route::get('/{id}', [listings::class, 'GetListing']);

    });

    Route::prefix('/user')->group(function (){

        Route::get('/register',[UserController::class, 'CreateForm'])->middleware('guest');

        Route::post('/store', [UserController::class, 'StoreUser']);

        Route::get('/logout', [UserController::class, 'LogOut'])->middleware('auth');

        Route::get('/login/form',[UserController::class, 'loginform'])->name('login')->middleware('guest');

        Route::post('/login',[UserController::class, 'login'])->middleware('guest');
    });

    Route::post('/subscibe', [SubscriberController::class, 'subscribe']);

    Route::get('/send',[MailController::class, 'index']);

