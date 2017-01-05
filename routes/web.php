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

Route::get('/logout', function () {
  Auth::logout();

  return redirect('/jjj');
});


/*Route::get('/auth0/callback', function() {
   dd(Auth0::getUser());
});
*/
Route::get('/login', function () {
  Auth::login();

  return redirect('/home');
});

Route::get('/home', [
  'middleware' => ['auth'],
  'uses' => function () {
   return redirect('/');
}]);

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'ListController@show');
