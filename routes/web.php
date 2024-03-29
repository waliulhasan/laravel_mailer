<?php

use App\Http\Controllers\Admin\MailSendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/send-email', [MailSendController::class, 'sendEmail']);

Route::get('/upload-image', [MailSendController::class, 'showForm']);
Route::post('/upload-image', [MailSendController::class, 'processImage']);
