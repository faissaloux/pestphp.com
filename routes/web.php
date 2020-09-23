<?php

use App\Models\Screencast;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ShowScreencastController;

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

Route::get('/docs/team', TeamController::class)->name('team');

Route::get('/screencasts', function () {
    return redirect()->to(route("screencast", Screencast::first()->slug));
})->name('screencasts');

Route::get('/screencasts/{slug}', ShowScreencastController::class)->name('screencast');

Route::get('/docs/{page?}', DocsController::class)->name('docs')->where('page', '.*');
