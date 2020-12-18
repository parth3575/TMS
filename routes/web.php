<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});



Route::group(['middleware' => ['auth', 'admin']], function () {

    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard');
    // });
    Route::get('/dashboard','Admin\DashboardController@dashboard');

    Route::get('/user_table','Admin\DashboardController@getuserdata'); //view users
    Route::get('/add_user','Admin\UserController@add_user'); //goto insert(add) page
    Route::post('/store_user','Admin\UserController@store_user'); //insert
    Route::get('/update_user/{id}','Admin\UserController@update_user'); //update form
    Route::put('/update_user_done/{id}','Admin\UserController@update_user_done'); //update done
    Route::delete('/user_delete/{id}','Admin\UserController@user_delete'); //delete


    Route::get('/language','Admin\DashboardController@getlanguages'); //view languages
    Route::get('/add_lang','Admin\LanguageController@add_lang'); //goto insert(add) page
    Route::post('/store_lang','Admin\LanguageController@store_lang'); //insert
    Route::get('/update_language/{id}','Admin\LanguageController@update_language'); //update form
    Route::put('/update_lang_done/{id}','Admin\LanguageController@update_lang_done'); //update done
    Route::delete('/lang_delete/{id}','Admin\LanguageController@lang_delete'); //delete


    Route::get('/questions','Admin\DashboardController@getquestions'); //view questions
    Route::get('/add_questions','Admin\QuestionController@add_questions'); //goto insert(add) page
    Route::post('/store_que','Admin\QuestionController@store_que'); //insert
    Route::get('/update_questions/{id}','Admin\QuestionController@update_questions'); //update form
    Route::put('/update_que_done/{id}','Admin\QuestionController@update_que_done'); //update done
    Route::delete('/que_delete/{id}','Admin\QuestionController@que_delete'); //delete
    // Route::get('/upload_excel','Admin\QuestionController@upload_excel'); //goto import page
    // Route::post('/import_excel/import','Admin\QuestionController@import'); //import excel file


    Route::get('/admin_profile','Admin\DashboardController@getprofile');

    // Route::get('user-edit','Admin\DashboardController@useredit');

    /*Excel import export*/
    // Route::get('export', 'ImportExportController@export')->name('export');
    Route::get('/upload_excel', 'ImportExportController@importExportView');
    Route::post('/import_excel/import', 'ImportExportController@import')->name('import');

    Route::get('/results_view','Admin\DashboardController@getresults');

});

Route::get('contact','Users@contact');

Route::get('tests','Users@tests');

Route::get('profile','Users@profile');

Route::get('mcqs/{id}','Users@mcqs');

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('contact-us', 'ContactController@getContact');
Route::post('contact-us', 'ContactController@saveContact');

// for image upload
Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

Route::post('/add_marks','ResultController@add_marks'); //insert
Route::get('/results','ResultController@result');
