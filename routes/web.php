<?php
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
// assessment form post start
Route::post('assessment/data/post', [FrontendController::class, 'assessment_data_post']);

// ====for footer pages start====
Route::get('privacy/policy', [FrontendController::class, 'privacy_policy'])->name('privacy.policy');
// ====for footer pages end====

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
