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

Route::get('/gallery',function(){
    return view('gallery');
});
//END SECTION-1 ====================


//For navigation button using PageController only.
//=========SECTION-2================================

// Route::get('/home',[PageController::class,'home']);
// Route::get('/about',[PageController::class,'about']);
// Route::get('/gallery',[PageController::class,'gallery']);

//END SECTION-2 =====================================