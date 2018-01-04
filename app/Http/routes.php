<?php
use App\Personne;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    dump(DB::select('SELECT * from personnes'));
    dump(DB::table('personnes')->get());
    dd(Personne::find(1));
    return view('welcome');
});

Route::get('/info', function () {
   dd(phpinfo()); 
});

Route::get('/db', function () {
    dd( App\Personne::find(1) );
});

Route::controller('/personnes','PersonneController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
