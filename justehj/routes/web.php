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
    return view('home');
});



Route::get('news', 'NewsController@index');

Route::get('news/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('news-details', compact('post'));
});



Route::get('notices', 'NoticesController@index');

Route::get('notices/{slug}', function($slug){
	$notice = App\Notice::where('slug', '=', $slug)->firstOrFail();
	return view('notices-details', compact('notice'));
});


Route::get('hists', 'HistsController@index');

Route::get('hists/{slug}', function($slug){
	$hist = App\Hist::where('slug', '=', $slug)->firstOrFail();
	return view('hist-details', compact('hist'));
});



Route::get('p/{slug}', 'PagesController@show');

// Route::get('{slug}', 'PagesController@show');


Route::get('events', 'EventController@index');
// Route::get('events/{slug}', 'EventController@show');

Route::get('events/{slug}', function($slug){
	$event = App\Event::where('slug', '=', $slug)->firstOrFail();
	return view('events-details', compact('event'));
});


Route::get('assignments', 'AssignmentController@index');
// Route::get('events/{slug}', 'EventController@show');

Route::get('assignments/{slug}', function($slug){
	$assignment = App\Assignment::where('slug', '=', $slug)->firstOrFail();
	return view('assignments-details', compact('assignment'));
});


Route::get('teachers', 'TeacherController@index');
// Route::get('events/{slug}', 'EventController@show');

Route::get('teachers/{slug}', function($slug){
	$teacher = App\Teacher::where('slug', '=', $slug)->firstOrFail();
	return view('teacher-details', compact('teacher'));
});


Route::get('admissions', 'AdmissionlistsController@index');
// Route::get('events/{slug}', 'EventController@show');

Route::get('admissions/{slug}', function($slug){
	$admissionlist = App\Admissionlist::where('slug', '=', $slug)->firstOrFail();
	return view('admissionlists-details', compact('admissionlist'));
});


Route::get('videos', 'VideoController@index');
// Route::get('events/{slug}', 'EventController@show');

Route::get('videos/{slug}', function($slug){
	$video = App\Video::where('slug', '=', $slug)->firstOrFail();
	return view('video-details', compact('video'));
});



Route::get('about', function () {
    return view('about');
});



Route::get('welcome', function() {
	return view('welcome');
});


// Route::get('/posts', function (){
//     $posts = Post::orderBy('created','desc')->get();
//     return view('posts', [
//         'posts' => $posts
//     ]); 
// });



Route::get('principals-desk', function () {
    return view('principal');
});




// Route::get('assignments', function () {
//     return view('assignments');
// });


// Route::get('/contact', [
// 	'uses' => 'ContactMessageController@create'
// ]);

// Route::post('/contact', [
// 	'uses' => 'ContactMessageController@store',
// 	'as' => 'contact.store'
// ]);



Route::get('contact', 'ContactController@show');
Route::post('contact', 'ContactController@mail');

Route::group(['prefix' => 'ad/admin'], function () {
    Voyager::routes();
});
