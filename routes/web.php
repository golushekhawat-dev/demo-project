<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('admin/index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/logout',[App\Http\Controllers\LogoutController::class,'logout']); 


 Route::get('/dashboard',[App\Http\Controllers\AdminController::class,'dashboard']); 
 Route::get('/form',[App\Http\Controllers\AdminController::class,'form']);  

// website
Route::get('/index',[App\Http\Controllers\websiteController::class,'index']);
  

// slider




Route::get('/sliderview',[App\Http\Controllers\SliderController::class,'index']);

// get method used forms
Route::get('/slidercreate',[App\Http\Controllers\SliderController::class,'create']); 
 


Route::POST('/Sliders',[App\Http\Controllers\SliderController::class,'store']); 

// update
Route::get('slideredit/{id}',[App\Http\Controllers\SliderController::class,'edit']); 

// edit
Route::post('sliderupdate/{id}',[App\Http\Controllers\SliderController::class,'update']);

// delete
Route::get('sliderdestroy/{id?}',[App\Http\Controllers\SliderController::class,'destroy']);

Route::get('sliderpdelete/{id?}',[App\Http\Controllers\SliderController::class,'sliderdelete']);


// service

Route::get('/serviceview',[App\Http\Controllers\ServiceController::class,'index']);

// get method used forms
Route::get('/servicecreate',[App\Http\Controllers\ServiceController::class,'create']); 
 


Route::POST('/Services',[App\Http\Controllers\ServiceController::class,'store']); 

// update
Route::get('serviceedit/{id}',[App\Http\Controllers\ServiceController::class,'edit']); 

// edit
Route::post('serviceupdate/{id}',[App\Http\Controllers\ServiceController::class,'update']);

// delete
Route::get('servicedestroy/{id?}',[App\Http\Controllers\ServiceController::class,'destroy']);

Route::get('servicepdelete/{id?}',[App\Http\Controllers\ServiceController::class,'servicedelete']);


// about

Route::get('/aboutview',[App\Http\Controllers\AboutController::class,'index']);

// get method used forms
Route::get('/aboutcreate',[App\Http\Controllers\AboutController::class,'create']); 
 


Route::POST('/Abouts',[App\Http\Controllers\AboutController::class,'store']); 

// update
Route::get('aboutedit/{id}',[App\Http\Controllers\AboutController::class,'edit']); 

// edit
Route::post('aboutupdate/{id}',[App\Http\Controllers\AboutController::class,'update']);

// delete
Route::get('aboutdestroy/{id?}',[App\Http\Controllers\AboutController::class,'destroy']);

Route::get('aboutpdelete/{id?}',[App\Http\Controllers\AboutController::class,'aboutdelete']);


// Portfolio

Route::get('/galleryview',[App\Http\Controllers\GalleryController::class,'index']);

// get method used forms
Route::get('/gallerycreate',[App\Http\Controllers\GalleryController::class,'create']); 
 


Route::POST('/Gallerys',[App\Http\Controllers\GalleryController::class,'store']); 

// update
Route::get('galleryedit/{id}',[App\Http\Controllers\GalleryController::class,'edit']); 

// edit
Route::post('galleryupdate/{id}',[App\Http\Controllers\GalleryController::class,'update']);

// delete
Route::get('gallerydestroy/{id?}',[App\Http\Controllers\GalleryController::class,'destroy']);

Route::get('gallerypdelete/{id?}',[App\Http\Controllers\GalleryController::class,'gallerydelete']);


// contact

Route::get('/contactview',[App\Http\Controllers\ContactController::class,'index']);

// get method used forms
Route::get('/index',[App\Http\Controllers\ContactController::class,'create']); 
 


Route::POST('/Contacts',[App\Http\Controllers\ContactController::class,'store']); 

// delete
Route::get('contactdestroy/{id?}',[App\Http\Controllers\ContactController::class,'destroy']);

Route::get('contactpdelete/{id?}',[App\Http\Controllers\ContactController::class,'contactdelete']);
