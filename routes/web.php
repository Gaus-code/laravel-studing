<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    return view('welcome');
});
Route::get('/test', function (){
    return view('hello');
});

Route::get('/test/articles', function (){
    $articles = [
        [
            'id' => 1,
            'title' => 'title1',
        ],
        [
            'id' => 2,
            'title' => 'title2',
        ],
        [
            'id' => 3,
            'title' => 'title3',
        ],
    ];
    return view('pages.articles', [
        'articles' => $articles
    ]);
});

Route::get('/test/article', function (){
    return view('pages.article');
});

Route::get('/test/user/{id}/name/{name}', function ($id, $name){
    return "<h1>Привет! Меня зовут $name! Мне $id лет!</h1>";
});
