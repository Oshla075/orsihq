<?php

use App\Http\Controllers\Admin\Maincontroller;

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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
    Alert::info('Welcome');
    return view('Admin.Pages.dashboard');
});


Route::get('admin/mem_reg_form',[Maincontroller::class,'mem_reg_form'])->name('admin.mem_reg_form');

