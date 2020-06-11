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

Route::get('/', function () {
    return view('pages/index');
});

Route::get('image/upload','ImageUploadController@fileCreate');
Route::post('image/upload/store','ImageUploadController@fileStore');
Route::post('image/delete','ImageUploadController@fileDestroy');

Route::get('w','ImageController@show');
Route::post('upload','ImageController@upload')->name('upload');

//  user pages routes
Route::get('index','User_pagesController@show_index');
Route::get('about','User_pagesController@show_about');
Route::get('projects','User_pagesController@show_projects');
Route::get('contact','User_pagesController@show_contact');
Route::get('product','User_pagesController@show_product');
Route::get('partners','User_pagesController@show_partners');
Route::get('project_detail/{id}/{project_name}','User_pagesController@show_project_detail');
Route::get('product_detail/{id}/{product_name}','User_pagesController@show_product_detail');


// Admin pages routes
Route::get('admin','Admin_pagesController@show_mainPage');


// partner controller
Route::get('partner_list','partnerController@partner_list');
Route::get('partner_add','partnerController@partner_add');
Route::post('partner_insert','partnerController@partner_insert');
Route::get('partner_edit{id}','partnerController@partner_edit');
Route::get('partner_delete{id}','partnerController@partner_delete');
Route::post('partner_update{id}','partnerController@partner_update');

// Product controller
Route::get('product_list','productController@product_list');
Route::get('product_add','productController@product_add');
Route::post('product_insert','productController@product_insert');
Route::get('product_delete{id}','productController@product_delete');
Route::get('product_edit{id}','productController@product_edit');
Route::post('product_update{id}','productController@product_update');

// project controller
Route::get('project_list','projectController@project_list');
Route::get('project_add','projectController@project_add');
Route::post('project_insert','projectController@project_insert');
Route::get('project_edit{id}','projectController@project_edit');
Route::get('project_delete{id}','projectController@project_delete');
Route::get('project_update{id}','projectController@project_update');

// employee pages
Route::get('employee_list','employeeController@show_employee_list');
Route::get('add_employee','employeeController@show_add_employee');
Route::post('insert_employee','employeeController@show_insert_employee');
Route::get('delete_employee{id}','employeeController@delete_employee');
Route::get('edit_employee{id}','employeeController@edit_employee');
Route::post('update_employee{id}','employeeController@update_employee');