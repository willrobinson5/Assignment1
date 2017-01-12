<?php
Route::get('/', 'PagesController@home');
Route::get('/artist', 'ArtistController@index');
Route::post('/artist/search', 'ArtistController@search');
