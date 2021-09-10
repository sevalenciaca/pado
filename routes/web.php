<?php

namespace App\Http\Controllers;

use App\Models\Relative;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::resource('patients', PatientController::class)->middleware(['auth:sanctum','verified']);
Route::resource('doctors', DoctorController::class)->middleware(['auth:sanctum','verified']);
Route::resource('nurses', NurseController::class)->middleware(['auth:sanctum','verified']);
Route::resource('relatives', RelativeController::class)->middleware(['auth:sanctum','verified']);

Route::get('patients/{patient}/status', [PatientController::class, 'status'])->name('patients.status');

Route::get('relatives/{relative}/assignment', [RelativeController::class, 'assignment'])->name('relatives.assignment');
Route::post('relatives/{relative}/assign', [RelativeController::class, 'assign'])->name('relatives.assign');

Route::get('patients/medical-history/{patient}', [MedicalHistoryController::class, 'show'])->name('medical-histories.show');
Route::get('patients/vital-signs/{patient}', [VitalSignController::class, 'show'])->name('vital-signs.show');
Route::get('patients/diagnostic/{patient}', [DiagnosticController::class, 'show'])->name('diagnostics.show');

Route::middleware(['auth:sanctum','verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');