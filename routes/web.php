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

Route::get('/', 'AcmeController@index');
Route::get('/form', 'FormController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/questions', 'QuestionController@index');
Route::post('/questions',['uses'=>'QuestionController@store','as'=>'question.store'] );
Route::post('/answers',['uses'=>'AnswerController@store','as'=>'answer.store'] );

