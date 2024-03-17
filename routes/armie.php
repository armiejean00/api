<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/project1',function() {
//     return 'Hello lorem ipsum dolor set amet consectitum';
// });

// // Route::get('/user',[UserController::class, 'index']);

// // Route::post('/armie',function() {
// //     return 'api 2ns';
// // });

// Route::match(['put','patch','post','get'],'/updateUserInfo', function(){
//     return 'Rawr';
// });
// Route::any('/updateUserInfo', function(){
//     return 'API';
// });

Route::get('/users', function(Request $request){
    return $request->email;
});


Route::get('/users', function (Request $request){
    return $request->name . ' - '. $request->email;
});

Route::get('/get',function() {
    return 'GET: Hello lorem ipsum dolor set amet consectitum';
});

Route::post('/post',function() {
    return 'POST: Hello lorem ipsum dolor set amet consectitum';
});

Route::put('/put/{id}',function() {
    return 'PUT: Hello lorem ipsum dolor set amet consectitum';
});

Route::patch('/patch/{id}',function() {
    return 'PATCH: Hello lorem ipsum dolor set amet consectitum';
});

Route::delete('/delete/{id}',function() {
    return 'DELETEE: Hello lorem ipsum dolor set amet consectitum';
});

Route::any('/any',function() {
    return 'ANY: Hello lorem ipsum dolor set amet consectitum';
});

Route::get('/users',[UserController::class,'index']);