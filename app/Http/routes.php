<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// 认证路由
Route::get('/login', 'Auth\AuthController@getLogin')->name('login');
Route::post('/login', 'Auth\AuthController@postLogin')->name('login');
Route::get('/logout', 'Auth\AuthController@getLogout')->name('logout');
// 注册路由
Route::get('/register', 'Auth\AuthController@getRegister')->name('register');
Route::post('/register', 'Auth\AuthController@postRegister')->name('register');
// 邮箱验证
Route::get('/register/confirm/{token}', 'Auth\AuthController@confirmEmail')->name('confirm_email');
// 密码重置
Route::get('/password/email', 'Auth\PasswordController@getEmail')->name('password.reset');
Route::post('/password/email', 'Auth\PasswordController@postEmail')->name('password.reset');
Route::get('/password/reset/{token}', 'Auth\PasswordController@getReset')->name('password.edit');
Route::post('/password/reset', 'Auth\PasswordController@postReset')->name('password.update');
// 默认
Route::get('/', 'IndexController@home')->name('home');
Route::get('/help', 'IndexController@help')->name('help');
Route::get('/about', 'IndexController@about')->name('about');
// 用户
Route::resource('/user', 'UserController');
// 章节
Route::resource('/chapters', 'ChapterController');
// 收集箱
Route::resource('/collections', 'CollectionController');
Route::post('/collections/delete', 'CollectionController@delete')->name('collections.delete');
// 做题记录
Route::resource('/records', 'RecordController');
// 试卷
Route::resource('/papers', 'PaperController');
// 题目
Route::get('/questions/done', 'QuestionController@done')->name('questions.done');
Route::get('/questions/wrong', 'QuestionController@wrong')->name('questions.wrong');

//测试页
Route::get('/tests', function() {
    return view('tests.answer');
});


//试卷页
Route::get('/testpapers', function(){
    return view('thePaper.papers');
});

//错题页
Route::get('/testwrong', function(){
    return view('questions.wrong');
});


//做过的题页面
Route::get('/testDone',function(){
    $active = '';
    return view('questions.done', compact('active'));
});
