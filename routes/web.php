<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\front\Post@post_list');
Route::get('/post/{id}','App\Http\Controllers\front\Post@post_detail');
Route::get('/page/{id}','App\Http\Controllers\front\Post@page');

Route::view('admin/login','admin/login');
Route::post('admin/login_auth','App\Http\Controllers\admin@login');
Route::group(['middleware'=>['Login_First']], function(){
    Route::get('admin/posts','App\Http\Controllers\admin\Post@posts_list');
    Route::view('admin/post_add','admin/post/post_add');
    Route::post('admin/post/submit','App\Http\Controllers\admin\Post@post_submit');
    Route::get('admin/posts/post_edit/{id}','App\Http\Controllers\admin\Post@post_edit');
    Route::post('admin/posts/post_update/{id}','App\Http\Controllers\admin\Post@post_update');
    Route::get('admin/posts/delete/{id}', 'App\Http\Controllers\admin\Post@post_delete');

    Route::get('admin/pages','App\Http\Controllers\admin\Page@pages_list');
    Route::view('admin/page_add','admin/page/page_add');
    Route::post('admin/page/submit','App\Http\Controllers\admin\Page@page_submit');
    Route::get('admin/pages/page_edit/{id}','App\Http\Controllers\admin\Page@page_edit');
    Route::post('admin/pages/page_update/{id}','App\Http\Controllers\admin\Page@page_update');
    Route::get('admin/pages/delete/{id}', 'App\Http\Controllers\admin\Page@page_delete');

    Route::get('admin/contact/list', 'App\Http\Controllers\admin\Contact@all_contact');
});

Route::get('/admin/logout', function () {
    session()->forget('name');
    return redirect('admin/login');
});