<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth','verified');

Route::get('/view_center', [AdminController::class, 'view_center']);
Route::post('/add_center', [AdminController::class, 'add_center']);
Route::get('/delete_center/{id}', [AdminController::class, 'delete_center']);

Route::get('/view_type_info', [AdminController::class, 'view_type_info']);
Route::post('/add_type_info', [AdminController::class, 'add_type_info']);
Route::get('/delete_type_info/{id}', [AdminController::class, 'delete_type_info']);

Route::get('/view_fliere', [AdminController::class, 'view_fliere']);
Route::post('/add_fliere', [AdminController::class, 'add_fliere']);
Route::get('/delete_fliere/{id}', [AdminController::class, 'delete_fliere']);
//Route Student

Route::get('/view_student', [AdminController::class, 'view_student']);
Route::post('/add_student', [AdminController::class, 'add_student']);
Route::get('/show_student', [AdminController::class, 'show_student']);
Route::get('/delete_student/{id}', [AdminController::class, 'delete_student']);
Route::get('/update_student/{id}', [AdminController::class, 'update_student']);
Route::post('/update_student_confirm/{id}', [AdminController::class, 'update_student_confirm']);
//Route utilisateur
Route::get('/view_utilisateur', [AdminController::class, 'view_utilisateur']);


//Route Information
Route::get('/view_information', [AdminController::class, 'view_information']);
Route::post('/add_information', [AdminController::class, 'add_information']);
Route::get('/show_information', [AdminController::class, 'show_information']);
Route::get('/delete_information/{id}', [AdminController::class, 'delete_information']);
Route::get('/edit_information/{id}', [AdminController::class, 'edit_information']);
Route::post('/update_information_confirm/{id}', [AdminController::class, 'update_information_confirm']);
Route::get('/demande', [AdminController::class, 'demande']);
Route::get('/print_pdf/{id}', [AdminController::class, 'print_pdf']);
Route::get('/envoi_email/{id}', [AdminController::class, 'envoi_email']);
Route::post('/envoi_user_email/{id}', [AdminController::class, 'envoi_user_email']);
Route::get('/search', [AdminController::class, 'searchdata']);



Route::get('/presentation', [HomeController::class, 'presentation']);
Route::get('/directition', [HomeController::class, 'directition']);
Route::get('/administration', [HomeController::class, 'administration']);
Route::get('/print_pdf_home/{id}', [HomeController::class, 'print_pdf_home']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/contact', [HomeController::class, 'contact']);


Route::get('/info', [HomeController::class, 'info']);
Route::get('/envoi_info', [HomeController::class, 'envoi_info']);
Route::post('/add_demande', [HomeController::class, 'add_demande']);
Route::get('/search', [HomeController::class, 'searchdata']);
Route::get('/student_search', [HomeController::class, 'student_search']);

// Nos formations
Route::get('/informatique', [HomeController::class, 'informatique']);
Route::get('/electro_mecanique', [HomeController::class, 'electro_mecanique']);
Route::get('/adminis', [HomeController::class, 'adminis']);
Route::get('/viste_center4', [HomeController::class, 'viste_center4']);
