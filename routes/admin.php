<?php

	Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
		Config::set('auth.defines','admin');
		//login as admin
		Route::get('login','AdminController@login')->name('admin.home');
		Route::post('login','AdminController@isLogined')->name('admin.login');
		Route::any('logout','AdminController@logout')->name('admin.logout');
		//|---Admin Paths---
		Route::group(['middleware'=>'admin:admin'],function(){
			Route::get('/',function(){
				return view('Issue_Tracking._admins.index');
			})->name('admin.home');
			// |---Users Paths
			Route::group(['prefix'=>'users'],function(){
				Route::get('view','UserController@view')->name('admin.users.view');
				Route::get('show','UserController@index')->name('admin.users.show');
				Route::get('create','UserController@create')->name('admin.users.create');
				Route::post('store','UserController@store')->name('admin.users.store');
				Route::get('edit/{id}','UserController@edit')->name('admin.users.edit');
				Route::post('update','UserController@update')->name('admin.users.update');
				Route::any('delete','UserController@delete')->name('admin.users.delete');
			});
		});
	});