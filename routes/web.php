<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Studentcontroller;
use App\Models\student;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\Rolecontroller;
use App\abc\abc;
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

//Route::get('/{student?}', function (student $student) {
//                    return $student->marks;
//});

Route::post('store', [AdminController::class, 'store']);
Route::get('create', [AdminController::class, 'create'])->name('insert');
Route::get('list', [AdminController::class, 'index'])->name('list')->middleware('test');

Route::get('delete/{id}', [AdminController::class, 'delete'])->name('delete');
Route::get('edit/{id}', [AdminController::class, 'edit'])->name('update');
Route::post('update', [AdminController::class, 'update']);
Route::get('index', [MemberController::class, 'index'])->name('index');
Route::view('country', 'country.create')->name('insert_country');
Route::post('create',    [Countrycontroller::class, 'create']);
Route::get('country_index', [Countrycontroller::class, 'index'])->name('country_list');
Route::get('status/{id}',  [CountryController::class, 'change_status'])->name('status');
Route::get('/', function () {
   return abc::test(); 
});
Route::get('addrole',  [Rolecontroller::class, 'create']);
Route::get('/index2/{id}',  [AdminController::class, 'index2']);

Route::get('search',  [AdminController::class, 'search']);
