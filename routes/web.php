<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerpage;
use App\Http\Controllers\productcontroller;


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

Route::get('/ ',  [controllerpage::class,'login'] );
Route::get('/logout ', function()
{
    Session::forget('user');
    return redirect('/');
});
Route::get('/cartlist ',  [productcontroller::class,'cartlist'] );
Route::POST('/submit',[controllerpage::class,'submit'] );       //post method
Route::POST('/createsubmit',[controllerpage::class,'csubmit'] );     //post method
Route::get('/createAccount',[controllerpage::class,'createAccount']);
Route::get('/shop',[productcontroller::class,'shop']);
Route::get('/feedback',[controllerpage::class,'feedback']);
// id wala page
Route::get('detail/{id}',[productcontroller::class,'detail']);
Route::get('/homepage',  [productcontroller::class,'index'] );
Route::post('/add_to_cart',[productcontroller::class,'addToCart']);
Route::get('/removeproduct/{id}',[productcontroller::class,'removeproduct']);
Route::get('/ordernow',[productcontroller::class,'orderNow']);
Route::get('/orderlist',[productcontroller::class,'orderlist']);
Route::POST('/orderplace',[productcontroller::class,'orderplace']);





