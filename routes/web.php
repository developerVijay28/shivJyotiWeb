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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/shivJyoti', function(){
//     return view('shivJyoti.index');
// });
Route::resource('/shivJyoti','ShowAdminNews');
Route::get('/shivAbout', function(){
    return view('shivJyoti.about');
});
Route::get('/shivCourse', function(){
    return view('shivJyoti.allCourse');
});
Route::get('/shivEvent', function(){
    return view('shivJyoti.event');
});
Route::get('/shivContact', function(){
    return view('shivJyoti.contactUs');
});
Route::get('/shivAddmission', function(){
    return view('shivJyoti.Addmission');
});
Route::get('/shivAward', function(){
    return view('shivJyoti.award');
});
Route::get('/shivSeminar', function(){
    return view('shivJyoti.seminar');
});
Route::get('/shivprinciple', function(){
    return view('shivJyoti/aboutsUs.principleDesk');
});
Route::get('/shivmanager', function(){
    return view('shivJyoti/aboutsUs.manager');
});
Route::get('/shivCommitee', function(){
    return view('shivJyoti/aboutsUs.managingCommite');
});
Route::get('/shivMission', function(){
    return view('shivJyoti/aboutsUs.missionandVision');
});
Route::get('/shivStaff', function(){
    return view('shivJyoti/aboutsUs.ourStaff');
});
Route::get('/shivSchoolInfo', function(){
    return view('shivJyoti/aboutsUs.schoolInfo');
});
Route::get('/shivSchoolArea', function(){
    return view('shivJyoti/aboutsUs.areaSchool');
});
Route::get('/shivSchoolLibrary', function(){
    return view('shivJyoti/aboutsUs.library');
});
Route::get('/shivSchoolTransport', function(){
    return view('shivJyoti/aboutsUs.transport');
});
Route::get('/shivSchoolEnrollment', function(){
    return view('shivJyoti/aboutsUs.enrollmetDetails');
});
Route::get('/shivSchoolAddmission', function(){
    return view('shivJyoti/addmission.documentaion');
});
Route::get('/shivSchoolTiming', function(){
    return view('shivJyoti/addmission.schoolTiming');
});
// Route::get('/shivSchoolActities', function(){
//     return view('shivJyoti/schoolTour.activities');
// });
Route::resource('shivSchoolActities','ShowPhotoActivities');

Route::get('/shivSchoolAnnual', function(){
    return view('shivJyoti/schoolTour.annual');
});
// admin site
Route::get('/adminPanel',function(){
    return view('adminPanel.dashbord');
});
// Route::get('/adminPost',function(){
//     return view('adminPanel.post');
// });
// Route::get('/adminNews',function(){
//     return view('adminPanel.news');
// });
// Route::get('/adminPhoto',function(){
//     return view('adminPanel.photoadd');
// });
// admin pgoto add section
Route::group(['middleware'=>'admin','as'=>'admin.'],function(){
    Route::resource('/adminPhoto','PhotoAdd');
    Route::resource('/adminPost','AdminPost');
    Route::resource('/adminNews','AdminNews');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
