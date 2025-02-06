<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/coba', [CobaController::class, 'index']);
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::post('/templates/whatsapp', [TemplateController::class, 'store'])->name('templates.whatsapp.store');

Route::get('/dashboard/campaign', function () {
    return view('dashboard.campaign.index');
})->middleware('auth');
Route::get('/dashboard/template-message', [TemplateController::class, "index"])->middleware('auth');

Auth::routes(['register' => false, 'password.confirm' => false, "password.email"  => false, "password.request"  => false, "password.update" => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
