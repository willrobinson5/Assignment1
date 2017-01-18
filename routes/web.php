<?php
Route::get('/', 'PagesController@home');
Route::post('/artist/search', 'ArtistController@search');
Route::get('/artist/{artist}', 'ArtistController@show');
Route::get('/artists', 'ArtistController@index');
Route::get('/add', 'AddController@addSong');
Route::post('/artist/add', 'AddController@addArtist');
