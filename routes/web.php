<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpeechController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ImageUploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
Use App\Http\Controllers\MyController;
use App\Http\Controllers\usercontroller;
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


Route::get('image', function () {
    return view('imageUpload');
});

Route::view("/speech","speech");
Route::view("/cap","cap");
//Route::get("/record", [SpeechController::class,'index']);
Route::get("/capture", [VideoController::class,'index']);

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');
Route::post('video-upload', [ ImageUploadController::class, 'videoUploadPost' ])->name('video.upload.post');
Route::get('ImgRead', [ SpeechController::class, 'index' ]);

Route::post('/save',[ImageUploadController::class,'recVidUpload']);




Route::get('/', function () {
    return view('land');
});

Route::view('in','in');

Route::view('text','text');
Route::view('textoutpt','textoutpt');
Route::view('speech','speech');
Route::view('img','imageUpload');
Route::view('video','videoUpload');
Route::view('outpt','outpt');
Route::view('inpt','inpt');


Route::view('reg','reg');
// Route::post('reg', [UserController::class,'addData']);

Route::view('land','land');


Route::post('SpeechOutput',[MyController::class,'SpeechOutput']);
Route::get('SpeechOutput',[MyController::class,'SpeechOutput']);

Route::get('UploadOutput', [ MyController::class, 'Upload' ]);
Route::post('UploadOutput', [ MyController::class, 'UploadPost' ]);

Route::post('/save',[MyController::class,'recVidUpload']);

Route::get('/recommend',[MyController::class,'recommend']);
Route::post('/recommend',[MyController::class,'recommend']);
Route::get('speech', function () {
    return view('speech_page');
});
//-------text----------
Route::post('text_out',[MyController::class,'Text']);
Route::post('image_inp', function () {
    $randomImg=rand(1,13);

    return view('inputimage')->with($randomImg);
});
//--------text----------

//Route::get('register', [ UserController::class, 'addData' ]);
//Route::post('register', [ UserController::class, 'addData' ]);

//Route::get('login', [ LoginController::class, 'login' ]);
//Route::post('login', [ LoginController::class, 'login' ]);

//Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Routes
     */
    //Route::get('logout', [ LoginController::class, 'perform' ]);
//});
Route::get('home', function () {
    return view('home');
});

Route::post('result',[MyController::class,'index']);

Route::get('comic', function () {
    return view('comic');
});

Route::post('result1',[MyController::class,'comic']);

Route::get('logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('login','login');
Route::view('register','register');
Route::post('login',[usercontroller::class,'login']);
Route::post('register',[usercontroller::class,'register']);

// Route::view("login","login");
