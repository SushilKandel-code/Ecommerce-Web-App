<?php

use Illuminate\Support\Facades\Route;
use App\Models\Products;

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

Route::get('/create_product', function () {
    $products = Products::create([
        'product_name'=>'Laptop',
        'product_desc'=> 'This is Laptop',
        'price'=> '96,000',
        'image'=>''
    ]);

});

Route::get('/get_product', function () {
    $products = Products::get();
    return $products;
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $products = Products::get();
    return view('home',['products'=>$products]);
});
