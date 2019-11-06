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
Route::group(['namespace'=>'User'],function(){
	//login as user
	Route::get('login','UserController@login')->name('user.home');
	Route::post('login','UserController@isLogined')->name('login');
	Route::any('logout','UserController@logout')->name('logout');
	//|---app Paths---
	Route::group(['middleware'=>'auth:web'],function(){
		Route::get('/', function () {
		    return view('Issue_Tracking.index');
		})->name('home');
		//** Dynamic List Part
		Route::group(['prefix'=>'lists','namespace'=>'DynamicList'],function(){
				Route::get('view','ListController@view')->name('lists.view');
				Route::get('show','ListController@index')->name('lists.show');
				Route::post('store','ListController@store')->name('lists.store');
				Route::any('delete','ListController@delete')->name('lists.delete');
		});
		//** Issues Part
		Route::group(['prefix'=>'issues','namespace'=>'Issue'],function(){
				Route::get('view','IssueController@view')->name('issues.view');
				Route::get('show','IssueController@index')->name('issues.show');
				Route::get('create','IssueController@create')->name('issues.create');
				Route::post('store','IssueController@store')->name('issues.store');
				Route::post('update','IssueController@update')->name('issues.update');
		});
	});
});
