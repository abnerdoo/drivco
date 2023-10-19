<?php

use App\Livewire\FormSellCar;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;

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

Route::get('/', \App\Http\Controllers\HomeController::class);
Route::post('payment', [CheckOutController::class, 'checkout'])->name('payment-vnpay');
Route::get('login',function (){
  return 'Đây là trang đăng nhập';
})->name('login');
Route::get('handle-payment', [CheckOutController::class, 'handlePayment'])->name('handlePayment');
//Route::get('test', function () {
//  $array = [
//    'abc',
//    'bcd'
//  ];
//  $sv = new Service();
//  $sv->service_name = 'Cơ Bản';
//  $sv->price = 90000;
//  $sv->description = json_encode($array);
//  $sv->expiration_date = now();
//  return $sv->save();
//  $input = " |    yellow      |      red |      blue     |";
//  // nếu muốn nhập nhiều mô tả hãy follow theo dạng des1 | des2
//  $array = explode('|', $input);
//  $array = array_map('trim', $array);
//  $array = array_filter($array);
//  $array = array_values($array);
//
//  dd($array);
//});
//Route::get('service', [ServiceController::class,'index']);
Route::get('/', \App\Http\Controllers\HomeController::class)->name('/');


Route::get('/dang-tin-ban-xe', FormSellCar::class)->name('dang-tin');

Route::get('/info', [HomeController::class, 'info']);
Route::get('/service', [ServiceController::class, 'index'])->name('service');
