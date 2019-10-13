<?php

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





Auth::routes();

Route::group(['middleware' => 'auth'], function(){
  Route::get('/', function () {
      return view('welcome');
  });

Route::get('/home', function(){
  if (auth::user()->admin == 0) {
    return view('/home');
  }else{
    $user['user'] = \App\User::all();
    return view('admin.dashboard');
  }
  });
// Route::get('edit', ['as' => 'edit', 'uses' => 'profile@edit']);
  //     return view('admin.profile.edit');

Route::resource('contract', 'contract');
Route::resource('contractType', 'contractType');
Route::resource('profile', 'profile');

});
