<?php
//Artist routes
Route::get('/', 'PagesController@home');
Route::post('/artist/search', 'ArtistController@search');
Route::get('/artist/{artist}', 'ArtistController@show');
Route::get('/artists', 'ArtistController@index');
Route::get('/addArtistForm', 'ArtistController@addArtistForm');
Route::post('/artist/add', 'ArtistController@addArtist');
Route::post('/artist/{artist}/delete', 'ArtistController@deleteArtist');
Route::post('/artist/{artist}/edit', 'ArtistController@editArtist');
Route::patch('/artist/{artist}/update', 'ArtistController@update');

//Song routes
Route::post('/song/{artist}/addSongForm', 'SongController@addSongForm');
Route::post('/song/{artist}/addSong', 'SongController@addSong');
Route::post('/song/{song}/delete', 'SongController@deleteSong');
