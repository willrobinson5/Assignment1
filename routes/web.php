<?php
Route::get('/', 'PagesController@home');
Route::post('/artist/search', 'ArtistController@search');
Route::get('/artist/{artist}', 'ArtistController@show');
Route::get('/artists', 'ArtistController@index');
