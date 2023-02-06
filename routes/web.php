<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\AdviceController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ShowNoticeController;
use App\Http\Controllers\UserNoticeController;
use App\Http\Controllers\GformController;
use App\Http\Controllers\UrlWorkController;
use App\Http\Controllers\UrlIntController;
use App\Http\Controllers\GformUpdateController;
use App\Http\Controllers\WorkshopCRT;
use App\Http\Controllers\InterviewCRT;
use App\Http\Controllers\WorkArchiveController;
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
Route::get('/', [IndexController::class, 'index']);
Route::get('/advice', [AdviceController::class, 'index']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/rework', [UrlWorkController::class, 'rework']);
route::get('/reint', [UrlIntController::class, 'reint']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('/redirect', [HomeController::class, 'redirect']);
route::get('/admin', [HomeController::class, 'admin']);
route::get('/post', [PostController::class, 'addview']);
route::post('/upload_internship', [PostController::class, 'upload']);
route::get('/users', [InternController::class, 'show']);
Route::get('/company', [CompanyController::class, 'show']);
Route::get('/delete/{id}', [HomeController::class, 'delete']);
Route::get('/del_com/{id}', [CompanyController::class, 'delete']);
route::get('/user_company', [UserController::class, 'show']);
route::get('/post_notice', [NoticeController::class, 'addview']);
route::post('/post_notice_add', [NoticeController::class, 'upload']);
route::get('/notice', [ShowNoticeController::class, 'notice']);
Route::get('/deletenotice/{id}', [ShowNoticeController::class, 'deletenotice']);
route::get('/user_notice', [UserNoticeController::class, 'user_notice']);
route::get('/updatenotice/{id}', [ShowNoticeController::class, 'updatenotice']);
route::get('/gform', [GformController::class, 'addview']);
route::post('/workshop', [GformController::class, 'workshop']);
route::post('/interview', [GformController::class, 'interview']);
route::get('/gform_update', [GformUpdateController::class, 'show']);
route::get('/gform_update', [WorkshopCRT::class, 'show']);
Route::get('/del/{id}', [WorkshopCRT::class, 'del']);
route::get('/interview_gform_update', [InterviewCRT::class, 'interview']);
Route::get('/delete/{id}', [InterviewCRT::class, 'delete']);
route::post('/work_url_post', [WorkArchiveController::class, 'work_url_post']);


