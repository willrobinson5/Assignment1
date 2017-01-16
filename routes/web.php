<?php
Route::get('/', 'PagesController@home');
Route::get('/artist', 'ArtistController@index');
Route::post('/artist/search', 'ArtistController@search');
Route::get('/artist/{artist}', 'ArtistController@show');
