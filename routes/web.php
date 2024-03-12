<?php

use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;
use Illuminate\Support\Facades\Route;

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


Route::get('/qr', function () {
    $qrcode = new DNS2D();
    echo $qrcode->getBarcodeHTML('4445645656', 'QRCODE');
});

Route::get('/bar', function () {
    $barcode = new DNS1D();
    echo $barcode->getBarcodeHTML('4445645656', 'PHARMA');
});
