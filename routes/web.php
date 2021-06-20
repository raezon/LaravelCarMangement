<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EmployeController;

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

Route::get('/', [CustomAuthController::class, 'index'])->name('login');
/*
Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
});*/
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user'); 
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
 Route::get('/home', [App\Http\Controllers\CustomAuthController::class, 'index'])->name('home');

/* rote formulaire*/
Route::get('bon', [CustomAuthController::class, 'dotation'])->name('reçu_de_bon');  
Route::get('gestionnaire', [CustomAuthController::class, 'gestionnaire'])->name('gestionnaire'); 

/* data table employe*/
//Route::get('/employe', [EmployeController::class, 'employe'])-> name('employe');



/**Route::get('/emp', [Controlleremploye::class, 'emp'])-> name('emp');**/

/**** users table** 
Route::get('/regestration_users', [EmployeController::class, 'regestration_users'])-> name('regestration_users');
Route::post('/regestration_user', [EmployeController::class, 'regestration_user'])-> name('regestration_user');
Route::get('/table_users', [EmployeController::class, 'table_users'])-> name('table_users');
*/
Route::resource('employee', 'App\\Http\\Controllers\\Employe\EmployeeController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
