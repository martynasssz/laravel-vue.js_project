<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



// Route::get('bookables', function (Request $request){
//     return Bookable::all();
// });

// Route::get('bookables/{id}', function (Request $request, $id) {
//     //return Bookable::find($id);
//     return Bookable::findOrFail($id); //try to find something or it will fail. With no found code if this not found in database.
// });

//Route::get('bookables', 'Api\BookableController@index');
//Route::get('bookables/{id}', 'Api\BookableController@show');

Route::apiResource('bookables', 'Api\BookableController')->only(['index', 'show']);
Route::get('bookables/{bookable}/availability', 'Api\BookableAvailabilityController')
    ->name('bookables.availability.show');
Route::get('bookables/{bookable}/reviews', 'Api\BookableReviewController')
    ->name('bookables.reviews.index');

Route::get('bookables/{bookable}/price', 'Api\BookablePriceController')
    ->name('bookables.price.show');    

Route::get('/booking-by-review/{reviewKey}', 'Api\BookingByReviewController')
    ->name('booking.by-review.show');

Route::apiResource('reviews', 'Api\ReviewController')->only(['show', 'store']);    

Route::post('checkout', 'Api\CheckoutController')->name('checkout');
