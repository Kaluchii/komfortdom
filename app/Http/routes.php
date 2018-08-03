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

Route::get('/',         'FrontController@getIndex');
Route::get('/thanks',    'FrontController@getThanks');


Route::post('/captcha',          'Back\MailController@Captcha');
Route::post('/feedback/mail',    'Back\MailController@send');


Route::auth();
Route::group(['middleware' => 'auth', 'prefix' => 'adm'],function(){

    Route::get('/',                  'AdminController@getIndex');
    Route::get('/main',              'AdminController@getMain');
    Route::get('/about',             'AdminController@getAbout');
    Route::get('/gallery',           'AdminController@getGallery');
    Route::get('/flats',             'AdminController@getFlats');
    Route::get('/flats/{id}',        'AdminController@getFlatsItem');
    Route::get('/contacts',          'AdminController@getContacts');
    Route::get('/course',            'AdminController@getCourse');
    Route::get('/meta',              'AdminController@getMeta');
    Route::get('/mails',             'AdminController@getMails');



    // Таксономия проекта. Визуальная зависимость данных.
    Route::get('/taxonomy', 'Back\TaxonomyController@showTaxonomy');

    // Служебные роуты
    Route::post('/save', 'Back\SaveController@save');

    // Создание нового элемента группы
    Route::post('/newItemRow', 'Back\GroupItemController@newRow');
    Route::post('/newItemBox', 'Back\GroupItemController@newBox');
    Route::post('/newImage', 'Back\GroupItemController@newImageItem');

    // Роут удаление элемента группы
    Route::post('/removeItem', 'Back\GroupItemController@removeItem');
});

