<?php

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

Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home')->middleware('admin')->middleware('can:see-trainees');

Route::group(['prefix' => 'admin','middleware' => 'can:see-trainer, can:see-admin'], function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    //trainer
    Route::resource('trainers', 'TrainerController');
    //trainee
    Route::resource('trainees', 'TraineeController');
    Route::get('show-test', 'TraineeController@showTest')->name('trainees.show_test');
    //phase
    Route::resource('phases', 'PhaseController');
    //schedule
    Route::resource('schedules', 'ScheduleController');
    Route::get('trainee_schedule/{id}', 'ScheduleController@getTraineeSchedule')->name('schedules.trainee_schedule');
    //course
    Route::resource('courses', 'CourseController');
    Route::post('addTraineeIntoCourse', 'CourseController@addTraineeIntoCourse')->name('courses.add_trainee_into_course');
    Route::post('removeTraineeFromCourse/{id}', 'CourseController@removeTraineeFromCourse')->name('courses.remove_trainee_from_course');
    //test
    Route::resource('tests', 'TestController');
    Route::put('updateContent/{id}', 'TestController@updateContent')->name('tests.update_content');
});

Route::get('/trainee_schedule', 'TraineeController@getSchedule')->name('trainee.trainee_schedule')->middleware('admin')->middleware('can:see-trainers');
