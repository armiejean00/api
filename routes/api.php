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

// Route::get('/user',[UserController::class, 'index']);

// Route::match(['put','patch','post','get'],'/updateUserInfo', function(){
//     return 'Rawr';
// });

// Route::get('/users', function (Request $request){
//     return $request->name . ' - '. $request->email;
// });
