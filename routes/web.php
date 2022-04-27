<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Categoryes\Category_itemControlller;
use App\Http\Controllers\Categoryes\CategoryController;
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
Route::get('/',[SiteController::class, 'home'])->name('home');
Route::get('/about',[SiteController::class, 'about'])->name('about');
Route::get('/property',[SiteController::class, 'property'])->name('property');
Route::get('/contact',[SiteController::class, 'contact'])->name('contact');
Route::get('/property-single/{id?}',[SiteController::class, 'propertySingle'])->name('property-single');
Route::post('/messageStore', [SiteController::class, 'messagestore'])->name('messageStore');
Route::post('/comentStore', [SiteController::class, 'comentstore'])->name('comentStore');
Route::get('search',[SiteController::class, 'search'])->name('search');
Route::get('lang/{lang}', function($lang){
    session(['lang'=>$lang]);
    return back();
});
Route::prefix('/admin')->middleware('auth')->group(function(){
    Route::get('/',[AdminController::class, 'message'])->name('admin');
    Route::resource('room', RoomController::class);
    Route::resource('about', AboutController::class);
    Route::resource('service', ServicesController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('agents', AgentController::class);
    Route::get('message',[AdminController::class, 'message']);
    Route::get('coment',[AdminController::class, 'coment']);
    Route::resource('category', CategoryController::class);
    Route::resource('item',Category_itemControlller::class);
    Route::get('/zakaz/{zakaz?}',[AdminController::class, 'zakaz'])->name('zakaz');
    Route::get('/x',[AdminController::class, 'x'])->name('viewzakaz');
    Route::get('/zakaz/{zakaz?}',[AdminController::class, 'delzakaz'])->name('delzakaz');

});
require __DIR__.'/auth.php';
 