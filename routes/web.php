<?php


use App\Http\Controllers\loginauthcontroller;
use App\Http\Controllers\ordercontroller;
use App\Http\Controllers\productController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 vijay
use Illuminate\Support\Facades\Route;

main





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
Route::post('/login-user',[loginauthcontroller::class,'loginUser'])->name('login-user');


vijay
Route::get('/success', function () {
    return view('auth.registration-success');
});

Route::get('/login-user', function () {
    return view('login');
})->name('login.form');

Route::post('/login', function () {
    $credentials = request()->only('username', 'password');

    if (Auth::attempt($credentials)) {
        request()->session()->put('username', $credentials['username']);

        return redirect()->route('home');
    }

    return back()->withErrors([
        'message' => 'Invalid credentials'
    ]);
})->name('login');

Route::get('/success', function () {
    return view('auth.registration-success');
});

main




  
Route::get('/dash', function () {
    return view('dash.dashboard');
});







Route::get('/use', [productController::class, 'userbooking']);
Route::get('/', [productController::class, 'userbooking']);



Route::get('product.proform', [productController::class, 'pro_create']);
Route::Post('/product', [productController::class, 'pro_store'])->name('pro');

Route::get('product.product', [productController::class, 'pro']);

Route::get('delete/{id}', [productController::class, 'delete']);

Route::get('edit/{id}', [productController::class, 'edit']);
Route::put('update/{id}',[productController::class, 'updates'])->name('update');
Route::get('orderform/{id}', [ordercontroller::class, 'orderform']);
Route::post('/order', [ordercontroller::class, 'store'])->name('order');





Route::get('form', [FormController::class, 'form']);

Route::get('/custform', [OrderController::class, 'create']);
Route::Post('/orders', [OrderController::class, 'store'])->name('ord');

Route::get('product.proform', [productController::class, 'pro_create']);
Route::Post('/product', [productController::class, 'pro_store'])->name('pro');

Route::get('product.product', [productController::class, 'pro']);
Route::get('list', [OrderController::class, 'list']);
Route::get('delete/{id}', [productController::class, 'delete']);
Route::get('edit/{id}', [productController::class, 'edit']);
Route::put('update/{id}',[productController::class, 'updates'])->name('update');

