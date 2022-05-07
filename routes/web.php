<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MollieController;

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
    return redirect()->route('home');
});

Auth::routes();

/**Home Route**/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**Frontend Routes**/
Route::get('/webshop', App\Http\Livewire\Frontend\Webshop::class)->name('webshop');
Route::get('/webshop-{slug}',App\Http\Livewire\Frontend\Detailpage::class)->name('detailpage');
Route::get('/mycart',App\Http\Livewire\Frontend\Mycart::class)->name('mycart');
Route::get('/checkout', App\Http\Livewire\Frontend\Checkout::class)->name('checkout');
Route::get('/contact', App\Http\Livewire\Frontend\Contact::class)->name('contact');

/**Payment Routes**/
//Route::get('mollie-payment',[App\Http\Livewire\Frontend\Checkout::class,'preparePayment'])->name('mollie.payment');
Route::get('payment-success',[App\Http\Livewire\Frontend\Checkout::class, 'paymentSuccess'])->name('payment.success');
Route::get('/paymentsuccess', App\Http\Livewire\Frontend\Paymentsuccess::class)->name('paymentsuccess');

/**Backend Routes**/
Route::group(['prefix'=>'backend', 'middleware'=>'admin'], function(){
    Route::get('/users', App\Http\Livewire\IndexUser::class)->name('users.index');
    Route::get('/cars', App\Http\Livewire\Cars\Index::class)->name('cars.index');
});


