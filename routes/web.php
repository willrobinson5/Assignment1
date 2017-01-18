<?php
Route::get('/', 'PagesController@home');
Route::post('/artist/search', 'ArtistController@search');
Route::get('/artist/{artist}', 'ArtistController@show');
Route::get('/artists', 'ArtistController@index');
Route::get('/addForm', 'ArtistController@addForm');
Route::post('/artist/add', 'ArtistController@addArtist');
Route::post('/artist/{artist}/delete', 'ArtistController@deleteArtist');
Route::post('/artist/{artist}/edit', 'ArtistController@editArtist');
Route::patch('/artist/{artist}/update', 'ArtistController@update');
