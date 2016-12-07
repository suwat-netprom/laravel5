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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact/{name}', function ($name) {
    return 'Contact Page '.$name;
});

Route::get('/about', function () {
    $info = [
        "codingthailand.com",
        "suwat@gmail.com",
        "085-9661118"
    ];
    return view('about')->with("info",$info);
});

Route::get('/site', function () {
    $name = "นาย John";
    //return view('site.index'); //กรณ๊ใช้ or
    return view('site.index',[
        'name'=>$name
    ]);
});


Route::get('/product','ProductController@index');

Route::resource('/panda','PandaController');

Route::resource('/typefood','TypeFoodController');

Route::get('/typefood/show/{id}','TypeFoodController@show');

Route::get('/insert','TypeFoodController@insert');
Route::get('/typefood/delete/{id}','TypeFoodController@delete');






Route::auth();

Route::get('/home', 'HomeController@index');








//4

//



