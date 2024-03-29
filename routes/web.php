<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('appointment', [HomeController::class, 'appointments'])->name('view.appointments.index');

Route::post('consultation', [HomeController::class, 'consultations'])->name('customer.consultations.store');

Route::get('operation-plan', [HomeController::class, 'operationPlanPage'])->name('customer.operation-plans.view');

Route::post('operation-plan', [HomeController::class, 'operations'])->name('customer.operation-plans.store');

Route::get('patients-comment', [HomeController::class, 'patientsCommentPage'])->name('customer.patients-comment.view');

Route::post('patients-comment', [HomeController::class, 'patientsComment'])->name('customer.patients-comment.store');

Route::get('getHospitals/{id}', [HomeController::class, 'getHospitals']);

Route::get('department/{id}', [HomeController::class, 'departmentPage'])->name('departments.view');

Route::get('hospital/{id}', [HomeController::class, 'hospitalPage'])->name('hospitals.view');

Route::get('hotel/{id}', [HomeController::class, 'hotelPage'])->name('hotels.view');

Route::get('research/{id}', [HomeController::class, 'ResearchPage'])->name('researches.view');

Route::get('customer/profile', [CustomerController::class, 'index'])->name('customer.profile');

Route::post('customer/profile', [CustomerController::class, 'update'])->name('customer.profile.update');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

