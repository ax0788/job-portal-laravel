<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployerRegisterController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Models\Job;
use Illuminate\Routing\RouteGroup;
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
    return redirect()->route('login');
});





Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('job/{id}/{job}', [JobController::class, 'show'])->name('jobs.show');


Route::get('company/{id}/{company}', [CompanyController::class, 'show'])->name('company.index');

Route::get('/saved', [HomeController::class, 'savedJobs'])->name('savedJobs');



// Route::middleware(['Seeker'])->group(function () {
Route::controller(UserController::class)
    ->prefix('user')
    ->as('user.')
    ->group(function () {
        Route::get('/profile', 'index')->name('profile.index');
        Route::post('/profile/store', 'store')->name('profile.store');
        Route::post('/coverletter', 'coverletter')->name('profile.coverletter');
        Route::post('/resume', 'resume')->name('profile.resume');
        Route::post('/avatar', 'avatar')->name('profile.avatar');
    });


// });






//employer Register
Route::get('employer/register',  [EmployerRegisterController::class, 'employerRegIndex'])->name('employerRegister.index');
Route::post('employer/register', [EmployerRegisterController::class, 'employerRegister'])->name('employer.registeration');

Route::post('/applications/{id}', [JobController::class, 'apply'])->name('apply');


// Route::middleware(['Employer'])->group(function () {

//Company
Route::controller(CompanyController::class)
    ->prefix('company')
    ->as('company.')
    ->group(function () {
        Route::get('/{id}/{company}', 'index')->name('index');
        Route::get('/create', 'create')->name('view');
        Route::post('/create', 'store')->name('store');
        Route::post('/coverphoto', 'coverPhoto')->name('coverphoto');
        Route::post('/logo', 'companyLogo')->name('logo');
    });

//Jobs
Route::controller(JobController::class)
    ->prefix('job')
    ->as('job.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/{id}/edit', 'update')->name('update');
        Route::get('/current', 'currentJob')->name('current');
        Route::get('/applications', 'applicant')->name('applicant');
        Route::get('/list', 'Joblist')->name('list');
    Route::get('/search', 'searchJobs')->name('search');
    });
// });

//Save and Unsave Jobs

Route::controller(FavouriteController::class)
->group(function () {
    Route::post('/save/{id}', 'saveJob')->name('saveJob');
    Route::post('/unsave/{id}', 'unsaveJob')->name('unsaveJob');
});