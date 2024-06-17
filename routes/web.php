<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
return view('dashboard.index');
});


//if you are using navigation button then we can comment 
//SECTION-1 and uncomment SECTION-2 code

//=========SECTION-1================

Route::get('/home',function(){
return view('home');
});

Route::get('/about',function(){
return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});

//END SECTION-1 ====================


//When using navigation button to redirect to other pages then
//=========SECTION-2================================
//NOTE:DONOT comment these three, otherwise website wont displayed 
//because of controller link inside.
Route::get('/home',[PageController::class,'home'])->name('home');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');

//END SECTION-2 =====================================