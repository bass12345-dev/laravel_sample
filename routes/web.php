<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::prefix('user')->group(function  () {

        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
        Route::get('/songs', [App\Http\Controllers\Admin\SongsController::class, 'index']);
        Route::get('/artist', [App\Http\Controllers\Admin\ArtistController::class, 'index']);
        Route::get('/setlist', [App\Http\Controllers\Admin\SetlistController::class, 'index']);
        Route::get('/setlist/table-view', [App\Http\Controllers\Admin\SetlistController::class, 'table_view']);
        Route::get('/singers', [App\Http\Controllers\Admin\SingerController::class, 'index']);
        Route::get('/members', [App\Http\Controllers\Admin\MemberController::class, 'index']);
        Route::get('/sipra', [App\Http\Controllers\Admin\SipraController::class, 'index']);
        Route::get('/view-artist-songs', [App\Http\Controllers\Admin\ArtistController::class, 'index']);
        Route::get('/view-songs', [App\Http\Controllers\Admin\SongsController::class, 'view_song']);
}); 





// Route::prefix('user')->group(function  () {

//         Route::get('/dashboard', [App\Http\Controllers\User\DashboardController::class, 'index']);
//         Route::get('/songs', [App\Http\Controllers\User\SongsController::class, 'index']);
//         Route::get('/setlist', [App\Http\Controllers\User\SetlistController::class, 'index']);
//         Route::get('/singers', [App\Http\Controllers\User\SingerController::class, 'index']);
        
// });


Route::post('/auth/verify', 'App\Http\Controllers\Auth\LoginController@verify');


                            //Type


Route::post('/songs/ap-type', 'App\Http\Controllers\Admin\SongsController@add_song_type');
Route::get('/songs/get-types', 'App\Http\Controllers\Admin\SongsController@get_types');
Route::post('/songs/delete-type', 'App\Http\Controllers\Admin\SongsController@delete_type');


                            //Songs


Route::post('/songs/au-song', 'App\Http\Controllers\Admin\SongsController@add_song');
Route::get('/songs/get-songs', 'App\Http\Controllers\Admin\SongsController@get_songs');
Route::post('/songs/delete-songs', 'App\Http\Controllers\Admin\SongsController@delete_song');
Route::post('/songs/add-singer-songs', 'App\Http\Controllers\Admin\SongsController@add_singer_songs');


                            //Artists

Route::post('/songs/ap-artist', 'App\Http\Controllers\Admin\ArtistController@add_artist');
Route::get('/songs/get-artists', 'App\Http\Controllers\Admin\ArtistController@get_artists');
Route::get('/songs/search_artist', 'App\Http\Controllers\Admin\ArtistController@search_artist');
Route::post('/songs/delete-artist', 'App\Http\Controllers\Admin\ArtistController@delete_artist');


                            //Members
Route::get('/get-members', 'App\Http\Controllers\Admin\MemberController@get_members');
Route::get('/get-singer-members', 'App\Http\Controllers\Admin\MemberController@get_singer_members');
Route::post('/songs/ap-member', 'App\Http\Controllers\Admin\MemberController@add_member');
Route::post('/songs/delete-member', 'App\Http\Controllers\Admin\MemberController@delete_member');

                            // Sessions
Route::get('/get-singer-sessions', 'App\Http\Controllers\Admin\MemberController@get_singer_sessions');


                            //Singer Songs
Route::get('/get-singer-songs', 'App\Http\Controllers\Admin\SongsController@get_singer_songs');
Route::post('/get_singer_songs', 'App\Http\Controllers\Admin\SongsController@get_singer_songs1');

                            //Gigs
Route::get('/get-gigs', 'App\Http\Controllers\Admin\SetlistController@get_gigs');
Route::post('setlist/ap-gig', 'App\Http\Controllers\Admin\SetlistController@add_gig');

                            //Sipra
Route::get('/songs/sipra-songs', 'App\Http\Controllers\Admin\SongsController@get_sipra_songs');
Route::post('/songs/update-sipra-status', 'App\Http\Controllers\Admin\SongsController@update_sipra_status');