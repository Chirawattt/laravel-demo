<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\MemberController;
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
// 

Route::prefix('user')->group(function () {
    Route::get('/', function() {
        echo 'ยินดีต้อนรับ หน้าแรกของ User';
    });
   
    Route::get('/show/{id}', [userController::class, 'show']);
    
    Route::get('/{id}/{name?}', function ($id, $name='defaultValue') {
        echo 'ID ของคุณคือ '.$id.'<br>';
        echo 'ชื่อของคุณคือ '.$name;
    })->name('user_id_name?');
    
});

Route::get('/', function () {
    // return view('test', array(
    //     'name' => 'จีรวัฒน์ ญานะ', 
    //     'age' => 23, 
    //     'email' => 'chirawat.yana@hotmail.com'
    // )); 
    // or use compact('name', 'age', 'email') 
    // the difference is we can't change the key name of array

    $name = 'จีรวัฒน์ ญานะ';
    $age = 19;
    $email = 'Chirawat.yana@hotmail.com';
    $activities = [];

    return view('test', compact('name', 'age', 'email', 'activities'));
});

// Route::resource('member', 'App\Http\Controllers\MemberController');
Route::get('/member', [MemberController::class, 'index']);

Route::fallback(function () {
    echo 'ไม่พบหน้าที่คุณต้องการ';
});