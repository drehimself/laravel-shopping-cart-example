<?php

Route::get('/', function () {
    return redirect('shop');
});

// Route::get('cart', function () {
//     return view('cart');
// });

Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);

Route::resource('cart', 'CartController');


