<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\ComentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Categoryes\BedNumberController;
use App\Http\Controllers\Categoryes\RoomNumberController;
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
Route::get('/',[Controller::class, 'home'])->name('home');
Route::get('/about',[Controller::class, 'about'])->name('about');
Route::get('/property',[Controller::class, 'property'])->name('property');
// Route::get('/blog',[Controller::class, 'blog'])->name('blog');
Route::get('/contact',[Controller::class, 'contact'])->name('contact');
Route::get('/property-single',[Controller::class, 'propertySingle'])->name('property-single');
// Route::get('/blog-single',[Controller::class, 'blogSingle'])->name('blog-single');
Route::get('/agents-grid',[Controller::class, 'agentsGrid'])->name('agents-grid');
// Route::get('/agent-single',[Controller::class, 'agentSingle'])->name('agent-single');
Route::post('/messageStore', [Controller::class, 'messagestore'])->name('messageStore');
Route::post('/comentStore', [Controller::class, 'comentstore'])->name('comentStore');


Route::prefix('/admin')->middleware('auth')->group(function(){
    Route::get('/',[AdminController::class, 'message'])->name('admin');
    Route::resource('room', RoomController::class);
    Route::resource('about', AboutController::class);
    Route::resource('service', ServicesController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('agents', AgentController::class);
    Route::get('message',[AdminController::class, 'message']);
    Route::get('coment',[AdminController::class, 'coment']);
    Route::resource('bed', BedNumberController::class);
    Route::resource('roomnumber',RoomNumberController::class);
   
});
 

require __DIR__.'/auth.php';
 