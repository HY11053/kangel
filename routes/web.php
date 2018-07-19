<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/home', 'HomeController@index');
//前台界面
Route::group(['domain' => 'm.kangel.cn'], function () {
    Route::get('/','Mobile\IndexController@Index');
    Route::get('a/zoujinkangjie','Mobile\ListArticleController@Zoujinkangjie');
    Route::get('html/brand','Mobile\ListArticleController@Vibrand');
    Route::get('a/contact','Mobile\ListArticleController@Contact');
    Route::get('a/zhaoshang','Mobile\ListArticleController@Zhaoshang');
    Route::get('a/fuwu','Mobile\ListArticleController@Service');
    Route::get('a/fengmao','Mobile\ListArticleController@FengmaoLists')->name('fengmao');
    Route::get('a/fengmao/{path}','Mobile\ListArticleController@FengmaoLists')->name('fengmao');
    Route::get('a/{path}','Mobile\ListArticleController@NewsList')->where(['path'=>'[a-zA-Z]+'])->name('listsap');
    Route::get('a/{path}/list_{tid}_{page}.html','Mobile\ListArticleController@NewsList')->name('listspageap')->where(['path'=>'[a-zA-Z]+','tid'=>'[0-9]+','page'=>'[0-9]+']);
    Route::get('a/dongtai/{path}','Mobile\ListArticleController@NewsList')->where(['path'=>'[a-zA-Z]+'])->name('listsa');
    Route::get('a/dongtai/{path}/list_{tid}_{page}.html','Mobile\ListArticleController@NewsList')->name('listspagea')->where(['path'=>'[a-zA-Z]+','tid'=>'[0-9]+','page'=>'[0-9]+']);
    Route::get('{path}','Mobile\ListArticleController@NewsList')->where(['path'=>'[a-zA-Z]+'])->name('lists');
    Route::get('{path}/list_{tid}_{page}.html','Mobile\ListArticleController@NewsList')->name('listspage')->where(['path'=>'[a-zA-Z]+','tid'=>'[0-9]+','page'=>'[0-9]+']);
    Route::get('{path}/{id}.html','Mobile\ArticleController@GetArticles')->name('articles')->where(['id'=>'[0-9]+']);
    Route::get('/a/fengmao/{path}/{id}.html','Mobile\ArticleController@GetArticle')->name('articles')->where(['id'=>'[0-9]+']);
    Route::get('/a/{path}/{id}.html','Mobile\ArticleController@GetArticle')->name('articles')->where(['id'=>'[0-9]+']);
    Route::get('/a/dongtai/{path}/{id}.html','Mobile\ArticleController@GetArticle')->name('articles')->where(['id'=>'[0-9]+']);
});
Route::get('/','Frontend\IndexController@Index');
Route::get('a/zoujinkangjie','Frontend\ListArticleController@Zoujinkangjie');
Route::get('html/brand','Frontend\ListArticleController@Vibrand');
Route::get('a/contact','Frontend\ListArticleController@Contact');
Route::get('a/zhaoshang','Frontend\ListArticleController@Zhaoshang');
Route::get('a/fuwu','Frontend\ListArticleController@Service');
Route::get('a/fengmao','Frontend\ListArticleController@FengmaoLists')->name('fengmao');
Route::get('a/fengmao/{path}','Frontend\ListArticleController@FengmaoLists')->name('fengmao');
Route::get('a/{path}','Frontend\ListArticleController@NewsList')->where(['path'=>'[a-zA-Z]+'])->name('listsap');
Route::get('a/{path}/list_{tid}_{page}.html','Frontend\ListArticleController@NewsList')->name('listspageap')->where(['path'=>'[a-zA-Z]+','tid'=>'[0-9]+','page'=>'[0-9]+']);
Route::get('a/dongtai/{path}','Frontend\ListArticleController@NewsList')->where(['path'=>'[a-zA-Z]+'])->name('listsa');
Route::get('a/dongtai/{path}/list_{tid}_{page}.html','Frontend\ListArticleController@NewsList')->name('listspagea')->where(['path'=>'[a-zA-Z]+','tid'=>'[0-9]+','page'=>'[0-9]+']);
Route::get('{path}','Frontend\ListArticleController@NewsList')->where(['path'=>'[a-zA-Z]+'])->name('lists');
Route::get('{path}/list_{tid}_{page}.html','Frontend\ListArticleController@NewsList')->name('listspage')->where(['path'=>'[a-zA-Z]+','tid'=>'[0-9]+','page'=>'[0-9]+']);
Route::get('{path}/{id}.html','Frontend\ArticleController@GetArticles')->name('articles')->where(['id'=>'[0-9]+']);
Route::get('/a/fengmao/{path}/{id}.html','Frontend\ArticleController@GetArticle')->name('articles')->where(['id'=>'[0-9]+']);
Route::get('/a/{path}/{id}.html','Frontend\ArticleController@GetArticle')->name('articles')->where(['id'=>'[0-9]+']);
Route::get('/a/dongtai/{path}/{id}.html','Frontend\ArticleController@GetArticle')->name('articles')->where(['id'=>'[0-9]+']);