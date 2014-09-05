<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('hello');
});

//Route::get('attendances', function()
//{
//	return View::make('attendances.index');
//});

Route::get('input_Attendances','AttendanceController@input_Attendances');

Route::get('create_Attendances_Report','AttendanceController@create_Attendances_Report');

Route::get('edit_Attendances','AttendanceController@edit_Attendances');

Route::get('show_All','AttendanceController@show_All');

Route::get('show_Attendances','AttendanceController@show_Attendances');

Route::get('input_By_Date','AttendanceController@input_By_Date');

Route::get('attendance_input','AttendanceController@attendance_input');

Route::get('show_By_Date','AttendanceController@show_By_Date');

Route::get('showList_By_Date','AttendanceController@showList_By_Date');

Route::get('show_By_Name','AttendanceController@show_By_Name');

Route::get('showList_By_Name','AttendanceController@showList_By_Name');

Route::get('course_commence','AttendanceController@course_commence');

//Route::get('attendances.success_input', function()
//{
//    return View::make('attendances.success_input');
//});

Route::resource('attendances','AttendanceController');

/*
Route::get('/input_Attendances',function()
{
    return View::make('attendances.input_Attendances');

});

Route::get('/show_Attendances',function()
{
    return View::make('attendances.show_Attendances');

});

Route::get('/create_Attendances_Report',function()
{
    return View::make('attendances.create_Attendances_Report');
});

Route::get('/edit_Attendances',function()
{
    return View::make('attendances.edit_Attendances');
});

Route::get('/edit_Attendances',function()
{
    return View::make('attendances.edit_Attendances');
});

Route::get('/showAll', 'AttendanceController@showAll');
Route::get('/showAll', function()
{
    return View::make('attendances/show_All_attendances');
});
*/


