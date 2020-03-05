<?php

/** Frontend Route **/
Route::get('/', function () {
    return view('web.index');
})->name('web.index');



// Route::get('/New-password', function () {
//     return view('web.new-password');
// })->name('web.new-password');


