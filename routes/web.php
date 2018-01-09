<?php

use App\Mail\Feedback;
use Illuminate\Http\Request;

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

Route::get('/', function() {
    return view('index');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/experience', function() {
    return view('experience');
});

Route::post('/feedback/mail', function(Request $request) {
    \Mail::to('franksideriojr@gmail.com')->send(new Feedback($request->message, $request->email));
});
