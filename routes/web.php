<?php

use App\Http\Controllers\DiskusiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JawabanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', [HomeController::class, 'profile']);
});

Route::resource('diskusi', DiskusiController::class, [
            'only' => [
                'create',
                'store'
            ]
        ])
        ->middleware(['auth']);
Route::get('comment/{diskusi_id}', [JawabanController::class, 'create'])->name('comment-create')->middleware(['auth']);
Route::post('comment/store', [JawabanController::class, 'store'])->name('comment-store')->middleware(['auth']);

Route::resource('diskusi', DiskusiController::class, [
                'only' => [
                    'index',
                    'show'
                ]
            ]);

require __DIR__.'/auth.php';
