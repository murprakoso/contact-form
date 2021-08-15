<?php


// use Murprakoso\Contactform\Http\controllers\ContactFormController;

// Route::group(['middleware' => ['web']], function () {
//     Route::get('contact', [ContactFormController::class, 'index']);
//     Route::post('contact', [ContactFormController::class, 'sendMail'])
//         ->name('contact');
// });

Route::group(['namespace' => 'Murprakoso\Contactform\Http\Controllers', 'middleware' => ['web']], function () {
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});
