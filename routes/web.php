<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoodPlanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionForumController;
use App\Http\Controllers\ResponseForumController;
use App\Http\Controllers\SearchController;
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

Route::get('/inscription/{user}', [InscriptionController::class, 'index'])->name( 'inscription');
Route::get('/inscription/attenteConfirmation/{id}', [InscriptionController::class, 'attenteConfirmation'])->name('attenteConfirmation');
Route::post('/inscription/store', [InscriptionController::class, 'store'])->name('inscription.store');


Route::prefix('/ajax')->name('ajax.')->group(function () {
    Route::get('/inscription/form/description/{name}', [AjaxController::class, 'formInscriptionDescription'])->name('inscription.form.description');
    Route::get('/inscription/form/parent', [AjaxController::class, 'formInscriptionParent'])->name('inscription.form.parent');
    Route::get('/inscription/form/babysitter', [AjaxController::class, 'formInscriptionBabysitter'])->name('inscription.form.babysitter');
    Route::get('/inscription/form/children/{name}', [AjaxController::class, 'formInscriptionChildren'])->name('inscription.form.children');
    Route::get('/inscription/aborded/{id}', [UserController::class, 'destroy'])->name('inscription.destroy');
});


Route::prefix('/select')->name('select.')->group(function () {
    Route::get('/ByCPOrLocalite', [SelectController::class, 'ByCPOrLocalite'])->name('ByCPOrLocalite');
    Route::get('/ByBabysitterName', [SelectController::class, 'ByBabysitterName'])->name('ByBabysitterName');
});

Route::get('/searchForm', [SearchController::class, 'searchForm'])->name('searchForm');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/reception', [HomeController::class, 'reception'])->name('reception');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');

Route::resource('goodPlan', GoodPlanController::class);
Route::resource('activity', ActivityController::class);
Route::post('/activityInscription', [ActivityController::class, 'activityParent'])->name('activity.inscription');
Route::resource('forum', QuestionForumController::class);
Route::post('forum/{question}/response', [ResponseForumController::class, 'store'])->name('response.store');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/superAdmin', [DashboardController::class, 'SuperAdminDashboard'])->name('superAdmin');
    Route::get('/admin', [DashboardController::class, 'AdminDashboard'])->name('admin');
    Route::get('/babysitter', [DashboardController::class, 'BabysitterDashboard'])->name('babysitter');
    Route::get('/parent', [DashboardController::class, 'ParentDashboard'])->name('parent');
});

require __DIR__.'/auth.php';
