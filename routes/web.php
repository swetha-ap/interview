<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\regs;
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
route::view('reg','reg');
route::post('reg',[regs::class,'insert']);
route::get('reg',[regs::class,'show']);
route::get('delete/{Id}',[regs::class,'del']);
route::view('update','update');
route::get('update/{Id}',[regs::class,'upd']);
route::post('upd/{Id}',[regs::class,'upda']);
route::view('log','log');
route::post('log',[regs::class,'login']);
route::view('profile','profile');
route::get('profile',[regs::class,'pro']);
route::get('logout',[regs::class,'logout']);