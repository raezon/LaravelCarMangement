<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Employe\EmployeeController;
use App\Http\Controllers\DemandeSansChau\DemandeSansChauController;
use App\Http\Controllers\DemandeAvecChau\DemandeAvecChauController;
use App\Http\Controllers\Voiture\VoitureController;
use App\Http\Controllers\demandedotation\demande_de_dotation_en_carburantsController;
use App\Http\Controllers\demandedotation\Gesdemande_de_dotation_en_carburantsController;
use App\Http\Controllers\recuBonDotation\RecuBonDotationController;
use App\Http\Controllers\users\usersController;
use App\Http\Controllers\DemandeSansChau\GesDemandeSansChauController;
use App\Http\Controllers\DemandeAvecChau\GesDemandeAvecChauController;


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

/* data table employe*/
//Route::get('/employe', [EmployeController::class, 'employe'])-> name('employe');



/**Route::get('/emp', [Controlleremploye::class, 'emp'])-> name('emp');**/

/**** users table** 
Route::get('/regestration_users', [EmployeController::class, 'regestration_users'])-> name('regestration_users');
Route::post('/regestration_user', [EmployeController::class, 'regestration_user'])-> name('regestration_user');
Route::get('/table_users', [EmployeController::class, 'table_users'])-> name('table_users');
*/
Route::resource('employes', EmployeeController::class);
Route::resource('voitures', VoitureController::class);
Route::resource('DemandeSansChau', DemandeSansChauController::class);
Route::resource('DemandeAvecChau', DemandeAvecChauController::class);
Route::resource('demande_de_dotation_en_carburants', demande_de_dotation_en_carburantsController::class);
Route::resource('RecuBonDotation', RecuBonDotationController::class);
Route::resource('users', usersController::class);
Route::resource('GesDotation_en_carburants', Gesdemande_de_dotation_en_carburantsController::class);
Route::resource('GesDemandeSansChau', GesDemandeSansChauController::class);
Route::resource('GesDemandeAvecChau',GesDemandeAvecChauController::class);

Auth::routes();