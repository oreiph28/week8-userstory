<?php

/*
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::resource('posts','PostsController');

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/test3', function () {
    return view('test3');
});

/*
route::get('/about',function(){
return view('pages/about');

});
*/



/*
route::get('/users/{id}/{name}',function($name,$id){
print'Hello: '.$name.'.'.'<br>';
print 'Your id is: '.$id;
});
*/

/*
route::get('/users/{tsgbrybyrbtb}',function($id){
return 'this is user '.$id;
});
*/

/*
Route::get('/1', function () {
  //return view('1');
    //return 'Hello world';
    //echo "string";

    print "<font color='#3F34FF'>"."<h1>"."<i>"."Hello world!"."</i>"."</h1>"."</font>.<br>";


    print "<img src='file://C:/Users/oreip/Documents/nibblebits/nibblebits/images/nelio1.png' width='192' height='192' alt='nelio' title='' />.<br>";
    print "Hello world!<br>";
    print "Hello world2!<br>";
    print "Hello world!<br>";
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
