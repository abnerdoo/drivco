<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\WishlishController;
use App\Livewire\CarListingSystem;
use App\Livewire\SingleBrandCategory;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('homepage');
});

Route::controller(CarController::class)->group(function () {
    Route::get('/dang-tin-ban-xe', 'sellCar')->name('sellCar');
    Route::get('/dang-tin-mua-xe', 'buyCar')->name('buyCar');
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('/dich-vu', 'index')->name('service.list');
    Route::get('/dich-vu/{idService}', 'detail')->name('service.detail');
});

Route::controller(CheckOutController::class)->group(function () {
    // payment
    Route::post('/payment/{idService}', 'checkout')->name('payment-vnpay');
    // result after payment
    Route::get('/ket-qua', 'result')->name('resultAfterPayment');
});

Route::controller(SettingsController::class)->group(function () {
    Route::get('/cai-dat', 'settings')->name('settings');
    Route::get('/profile', 'profile')->name('profile');

    Route::get('/day-tin/{carID}', 'pushFeature')->name('day-tin');
    Route::post('/day-tin/{carID}', 'confirmPush')->name('confirmPush');

    Route::get('/quan-ly-tin-mua', 'needBuy');
    // cái này cần sửa lại
    Route::get('/thong-tin', 'infoUser');
    Route::get('/nap-tien', 'recharge')->name('recharge');
    Route::post('/nap-tien', 'rechargeMoney')->name('recharge.submit');
    Route::get('/ket-qua-nap-tien', 'resultRecharge')->name('resultRecharge');

    Route::get('/lich-su-nap-tien', 'paymentHistory')->name('paymentHistory');
});

Route::get('/single-category', SingleBrandCategory::class);

Route::get('/danh-sach-xe', CarListingSystem::class);

Route::controller(WishlishController::class)->group(function () {
    Route::get('/yeu-thich', 'index')->name('wishlish')->middleware('auth');
});

Auth::routes();

Route::get('/test', function () {
    $service = Service::find(5);

    $array = preg_split("/\r\n|\n|\r/", $service['description']);

    return $array;
});
