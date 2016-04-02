<?php

Route::get('/', function () {
    return view('shop');
});

Route::get('product', function () {
    return view('product');
});

Route::get('cart', function () {
    return view('cart');
});
