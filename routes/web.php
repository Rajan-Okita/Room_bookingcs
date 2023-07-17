<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\SlotsController;
use App\Http\Controllers\LoginController;

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
    return view('welcome');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/{provider}/redirect',[ProviderController::class,'redirect']);

Route::get('/auth/{provider}/callback',[ProviderController::class,'callback']);
Route::get('/admin', [AdminController::class, 'admin']);
Route::post('/add-subjects',[AdminController::class,'add_subjects'])->name('add-subjects');
Route::get('/members',[MembersController::class,'show']);
Route::get('delete/{id}',[MembersController::class,'delete']);
Route::get('edit/{id}',[MembersController::class,'edit']);
Route::post('edit',[MembersController::class,'update']);
Route::get('/timetable',[TimetableController::class,'show_timetables']);
Route::get('clear/{id}',[TimetableController::class,'delete_timetables']);
Route::get('update/{id}',[TimetableController::class,'edit_timetables']);
Route::get('/locations',[SlotsController::class,'empty_locations']);
Route::get('/slots',[SlotsController::class,'empty_locations'])->name('find.empty.locations');
Route::post('/slots',[SlotsController::class,'empty_locations'])->name('find.empty.locations');
Route::post('try',[TimetableController::class,'update_timetables']);
Route::get('/adminDashboard',function(){
    return view('adminDashboard');
});
//Route::get('/members',function(){
//    return view('list');
//});

Route::get('gettimetables',[TimetableController::class,'gettimetables']);
Route::get('/booking', function () {
    return view('booking');
});

Route::get('/rooms', function () {
    return view('rooms');
});


Route::get('/contacts', function () {
    return view('contacts');

});

Route::get('/notification', function () {
    return view('notification');

});

Auth::routes();
Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/dashboard",[HomeController::class, 'userHome'])->name('dashboard');
});

Route::middleware(['auth','user-role:editor'])->group(function()
{
    Route::get("/adminDashboard",[HomeController::class, 'editorHome'])->name('adminDashboard');
});

Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/adminDashboard",[HomeController::class, 'adminHome'])->name('adminDashboard');
});
require __DIR__.'/auth.php';
