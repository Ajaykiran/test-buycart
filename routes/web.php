<?php
use App\Http\Controllers\FormController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginauthcontroller;
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

/*login auth*/
Route::get('/login', [loginauthcontroller::class,'login']);
Route::get('/register', [loginauthcontroller::class,'register']);
Route::post('/register-user',[loginauthcontroller::class,'registerUser'])->name('register-user');


Route::get('/dash', function () {
    return view('dash.dashboard');
});


Route::get('form', [FormController::class, 'form']);

Route::get('/custform', [OrderController::class, 'create']);
Route::Post('/orders', [OrderController::class, 'store'])->name('ord');

Route::get('product.proform', [productController::class, 'pro_create']);
Route::Post('/product', [productController::class, 'pro_store'])->name('pro');


Route::get('/', [productController::class, 'userbooking']);


Route::get('product.product', [productController::class, 'pro']);
Route::get('list', [OrderController::class, 'list']);
Route::get('delete/{id}', [OrderController::class, 'delete']);
Route::get('delete/{id}', [productController::class, 'delete']);
