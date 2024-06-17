<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
return view('dashboard.index');
});


//if you are using navigation button then comment 
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


//For navigation button using PageController only.
//=========SECTION-2================================

// Route::get('/home',[PageController::class,'home'])->name('home');
// Route::get('/about',[PageController::class,'about'])->name('about');
// Route::get('/contact',[PageController::class,'contact'])->('contact');

//END SECTION-2 =====================================