<?php

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

Route::redirect('/','/admin');
Route::group(['prefix'=>'admin','namespace'=>'AdminControllers'],function(){
    Route::post('/','LoginController@login')->name('login');
    Route::post('/signup','SignupController@signup')->name('signup');
    Route::get('/logout','LogoutController@logout')->name('logout');
});
Route::group(['prefix'=>'employee','namespace'=>'EmployeeControllers','middleware'=>'checkToken'],function(){
    Route::post('/add','AddController@addEmployee')->name('add');
    Route::delete('delete','DeleteController@deleteEmployee')->name('delete');
    Route::put('/modify','ModifyController@modifyEmployee')->name('put');
    Route::get('/display','DisplayCOntroller@displayEmployees')->name('display');
});
Route::any('{catchall}', function() {
    return ['message'=>'Incorrect url'];
})->where('catchall', '.*');
