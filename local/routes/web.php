<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------- ------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', 'loginController@index');
Route::post('/', 'loginController@login');
Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@login');
Route::get('/loginAdmin', 'loginController@indexAdmin');
Route::post('/loginAdmin', 'loginController@loginAdmin');
Route::get('/createaccount', 'loginController@createaccountIndex');
Route::post('/createaccount', 'loginController@createaccount');
Route::group(['middleware' => 'usersession'], function () {
    Route::get('/home', 'homeController@Index');
    Route::get('/about', 'homeController@indexAbout');
    Route::get('/logout', 'homeController@logout');
    Route::get('/topup', 'homeController@topupindex');
    Route::post('/topup', 'homeController@topup');
    Route::get('/courses', 'coursesController@index');
    Route::get('/coursesfilter/{id}', 'coursesController@filter');

    Route::get('/takencoursesfilter/{id}', 'coursesController@filtertaken');
    Route::get('/takencourses', 'coursesController@indextaken');
    Route::get('/profile', 'profileController@Index');
    Route::get('/editprofile', 'profileController@Indexedit');
    Route::post('/editprofile', 'profileController@edit');

    Route::get('/takecourse/{id}', 'coursesController@takecourses');
    Route::get('/streamingPage/{id}', 'streamingController@index');
    Route::get('/streamingPage/{id}/stream/{streamid}', 'streamingController@indexStream');
    Route::post('/streamingPage/{id}/stream/{streamid}', 'streamingController@insertComment');
    Route::get('/deletecommentC/{id}', 'streamingController@deleteComment');

    Route::get('/article', 'articleController@index');
    Route::get('/article/{id}', 'articleController@indexThread');
    Route::post('/article/{id}', 'articleController@insertComment');
    Route::get('/articleFilter/{id}', 'articleController@filter');
    Route::get('/deletecommentA/{id}', 'articleController@deleteComment');
});
Route::group(['middleware' => 'adminsession'], function () {
    Route::get('/homeAdmin', 'adminController@indexAdmin');
    Route::get('/articleAdmin', 'adminController@indexArticle');
    Route::post('/articleAdmin', 'adminController@insertArticle');
    Route::get('/courseAdmin', 'adminController@indexCourse');
    Route::post('/courseAdmin', 'adminController@insertCourse');
    Route::get('/categoryAdmin', 'adminController@indexCategory');

    Route::get('/sectionAdmin/{id}', 'adminController@indexSection');
    Route::post('/sectionAdmin/{id}', 'adminController@insertSection');

    Route::post('/categoryAdmin', 'adminController@insertCategory');
    Route::get('/logout', 'homeController@logout');
});
