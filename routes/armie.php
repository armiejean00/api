<?php

use App\Http\Controllers\Act2Controller;
use App\Http\Controllers\PostController;
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

// Route::get('/users', function(Request $request){
//     return $request->email;
// });


// Route::get('/users', function (Request $request){
//     return $request->name . ' - '. $request->email;
// });

// Route::get('/get',function() {
//     return 'GET: Hello lorem ipsum dolor set amet consectitum';
// });

// Route::post('/post',function() {
//     return 'POST: Hello lorem ipsum dolor set amet consectitum';
// });

// Route::put('/put/{id}',function() {
//     return 'PUT: Hello lorem ipsum dolor set amet consectitum';
// });

// Route::patch('/patch/{id}',function() {
//     return 'PATCH: Hello lorem ipsum dolor set amet consectitum';
// });

// Route::delete('/delete/{id}',function() {
//     return 'DELETEE: Hello lorem ipsum dolor set amet consectitum';
// });

// Route::any('/any',function() {
//     return 'ANY: Hello lorem ipsum dolor set amet consectitum';
// });

// Route::get('/users',[UserController::class,'index']);


// //03-23-2024
// Route::get('/users',function(Request $request) {
//     return $request->name;
// });

// Route::get('/users/{id}',function(string $id) {
//     return 'User ' .$id;
// });

// Route::get('/users/{id}/comments/{comment}',function(string $id, string $commentId) {
//     return 'User ' .$id . 'comment' . $commentId;
// });

// Route::get('/id/{id}',function(Request $request,string $id) {
//     return 'User ' .$id->fname;
// });

// Route::get('/user/{name?}',function(?string $name = "armie") {
//     return $name;
// });

// Route::get('/user/{name}',function(string $name) {
//     // return $name;
// })->where('name', '[A-Za-z]+');

// Route::get('/user/{name}',function(string $name) {

//     return $name;
// })->whereAlpha('name');

// Route::get('/user/{id}',function(string $id) {

//     return $id;
// });


// Route::get('/user/profile',function() {


// })->name('profile');

// Route::get('/user/profile',[UserProfileController::class,'show'])->name('profile');

// route('profile');

// Route::get('/user/{id}/profile',function(string $id){
//     return redirect()->route('logout');

// })->name('profile');
// route('profile',['id'=>100,'photos'=>'yes']);

// Route::get('/user/{id}/profile',function(string $id){
//     return redirect()->route('logout');

// })->middleware(Athenticate::class);

// Route::middleware(Athenticate::class)->group(function(){
//     Route::get('/user/{id}/profile',function(string $id){
 

// });
//  Route::get('/user/{id}/hobby',function(string $id){
    

// });

// });

// Route::controller(UserController::class)->group(function(){
//     Route::get('/orders/{id}'.'show');
// });

// Route::domain('{account}.example.com')->group(function(){

// });



// Route::prefix('student')->group(function(){
// Route::get('/user/{id}/hobby',function(Request $request){

// });
// Route::get('/user/{id}/profile',function(Request $request){

// });
// });
// route('student.profile');
// Route::name('student.')->group(function(){
//    Route::get('/user/{id}/profile',function(Request $request){

// }); 
// })->name('profile');

Route::middleware('extract.token')->group(function(){
 Route::get('/users',[Act2Controller::class,'index']);
 Route::post('/post',[PostController::class,'store']);
 Route::put('/put/{id}',[PostController::class,'update']);
  Route::patch('/users/{user}',[Act2Controller::class,'update']);
  Route::delete('/users/{id}',[PostController::class,'destroy']);
});