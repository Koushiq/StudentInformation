<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    
    return view('login');
});

Route::post('/', [LoginController::class, 'verifyLogin']);

Route::get('/admin',function(){

    return redirect('/');

});

Route::get('/student',function(){

    return redirect('/');
});


Route::middleware(['sess'])->group(function(){

   

    Route::group(['middleware'=>['role']],(function(){

        Route::get('/admin/home',function(){
            return view('home');
        });

        Route::get('/admin/home/getAllStudents', [UserController::class, 'getAllStudents']);
        Route::put('/admin/home/updateStudent', [UserController::class, 'updateStudent']);

        Route::get('/student/home',function(){
            return view('student');
        });

    }));

});