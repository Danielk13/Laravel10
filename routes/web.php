<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('about',[AdminController::class,'index'])->name('about');

Route::get('blog',[AdminController::class,'index'])->name('blog');

Route::get('article', function(){
    return view('article');
})->name('article');

// Route::get('/', function () {
//     return "<a href='".route('login')."'>Login </a>";
// });

// //ส่งค่าตัวแปรไปแสดงด้วย เช่น /blog/computer
// Route::get('blog/{name}', function($name){
//     return "บทความ $name";
// });

// Route::get('admin/user/kong', function(){
//     return "ยินดีต้อนรับ Admin";
// })->name('login');


Route::fallback(function(){
    return "ไม่พบหน้าเว็บ";
});