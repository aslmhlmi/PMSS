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
    return view('welcome');
});

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

//DEPLOYMENT//
//Route::get('/medeployment', 'ProjectController@deployment')     ->name('medeployment');


Auth::routes();

// Index/Homepage //
Route::get('/home', 'HomeController@index')                     ->name('index');

// DashBoard //
//Route::get('/dashbord', 'DashboardController@report')     ->name('dashboard');

// ManageEngine //
Route::resource('/projects', 'ProjectController');
// Route::resource('me_deploy', 'ProjectController');
Route::resource('/me_poc', 'me_pocController');
Route::resource('/me_demo', 'me_demoController');

// BinaryNexus //
Route::resource('bn_deploy', 'bn_deployController');
Route::resource('bn_poc', 'bn_pocController');
Route::resource('bn_demo', 'bn_demoController');

// CablingTeam //
Route::resource('/ct_deploy', 'ct_deployController');
Route::resource('/ct_poc', 'ct_pocController');
Route::resource('/ct_demo', 'ct_demoController');

// NetTeam //
Route::resource('/nt_deploy', 'nt_deployController');
Route::resource('/nt_poc', 'nt_pocController');
Route::resource('/nt_demo', 'nt_demoController');

// ProjectBy //

// -- Account Manager -- //
Route::resource('/staffs', 'StaffController');
Route::delete('Staff/destroy/{id}','StaffController@destroy')->name('delete');
//Route::resource('accountmanager', 'AccManagerController');

// -- Engineer --//
Route::resource('/engineer', 'EngineerController');
Route::delete('Engineer/destroy/{id}','EngineerController@destroy')->name('delete');

// GlobalSetting //
//Route::resource('staffs', 'StaffController');
//Route::resource('accountmanager', 'StaffController');
//Route::resource('engineer', 'StaffController');

// GenerateReport //
//Route::resource('report', 'ReportController');
//Route::get('/report', 'ReportController@report')     ->name('reports');















// //START CRUD//
// Route::post('/medeployment', 'ProjectController@store')  ->name('medeployment');
// // Route::post('/medeployment/store', 'ProjectController@create')  ->name('medeployment');
// // Route::post('/medeployment/edit', 'ProjectController@store')    ->name('medeployment');
// // Route::post('/medeployment/destroy', 'ProjectController@create')->name('medeployment');
// //END CRUD//

// //POC//
// Route::get('/mepoc', 'ProjectController@poc')               ->name('mepoc');
// //START CRUD//
// // Route::post('/medeployment/create', 'ProjectController@store')  ->name('medeployment');
// // Route::post('/medeployment/store', 'ProjectController@create')  ->name('medeployment');
// // Route::post('/medeployment/edit', 'ProjectController@store')    ->name('medeployment');
// // Route::post('/medeployment/destroy', 'ProjectController@create')->name('medeployment');
// //END CRUD//

// //DEMO//
// Route::get('/medemo', 'ProjectController@demo')             ->name('medemo');
// // //START CRUD//
// // Route::post('/medeployment/create', 'ProjectController@store')  ->name('medeployment');
// // Route::post('/medeployment/store', 'ProjectController@create')  ->name('medeployment');
// // Route::post('/medeployment/edit', 'ProjectController@store')    ->name('medeployment');
// // Route::post('/medeployment/destroy', 'ProjectController@create')->name('medeployment');
// //END CRUD//

// // Route::post('/mepoc', 'ProjectController@store')           ->name('medemo');
// // Route::post('/medemo', 'ProjectController@store')           ->name('medemo');

// // NetTeam //
// Route::get('/ntdeployment', 'ProjectController@deployment') ->name('ntdeployment');
// Route::get('/ntpoc', 'ProjectController@poc')               ->name('ntpoc');
// Route::get('/ntdemo', 'ProjectController@demo')             ->name('ntdemo');

// // BinaryNexus //
// Route::get('/bndeployment', 'ProjectController@deployment') ->name('bndeployment');
// Route::get('/bnpoc', 'ProjectController@poc')               ->name('bnpoc');
// Route::get('/bndemo', 'ProjectController@demo')             ->name('bndemo');

// // CablingTeam //
// Route::get('/ctdeployment', 'ProjectController@deployment') ->name('ctdeployment');
// Route::get('/ctpoc', 'ProjectController@poc')               ->name('ctpoc');
// Route::get('/ctdemo', 'ProjectController@demo')             ->name('ctdemo');

// // Report //
// Route::get('/report', 'ProjectController@report')           ->name('report');
