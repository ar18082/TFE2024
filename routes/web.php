<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('inscription', ['id' => $request->route('id')]);
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/resend', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::get('/inscription', [InscriptionController::class, 'index'])->name( 'inscription');
Route::get('/inscription/attenteConfirmation', [InscriptionController::class, 'attenteConfirmation'])->name('attenteConfirmation');


Route::prefix('/ajax')->name('ajax.')->group(function () {
    Route::get('/inscription/form/description/{name}', [AjaxController::class, 'formInscriptionDescription'])->name('inscription.form.description');
    Route::get('/inscription/form/parent', [AjaxController::class, 'formInscriptionParent'])->name('inscription.form.parent');
    Route::get('/inscription/form/babysitter', [AjaxController::class, 'formInscriptionBabysitter'])->name('inscription.form.babysitter');
    Route::get('/inscription/form/children/{name}', [AjaxController::class, 'formInscriptionChildren'])->name('inscription.form.children');
});


Route::prefix('/select')->name('select.')->group(function () {
    Route::get('/searchByCPOrLocalite', [SelectController::class, 'searchByCPOrLocalite'])->name('searchByCPOrLocalite');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/reception', [HomeController::class, 'reception'])->name('reception');

Route::get('/user', [UserController::class, 'index'])->name('user.index');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
