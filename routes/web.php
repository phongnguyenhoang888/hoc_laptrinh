<?php

use Illuminate\Support\Facades\Route;
// gọi phương thức contoller vào 
use App\Http\Controllers\DemoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TrangTXTController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\EditController;
// từ route =>controller (để xử lý) => trả về view

// hoặc từ route => trả thẳng về view

route::get('/trang_tin_tuc', [DemoController::class, 'index']);
route::get('/trang_register', [RegisterController::class, 'text']);


// phaafn login VIEW-->   CONTROLLER 
route::get('/login', [LoginController::class, 'GetLogin']);
route::post('/login',[LoginController::class, 'PostLogin']);


// phan register VIEW  --> DENCONTROLLER
Route::get('/register',[RegisterController::class, 'Get_thongtin']);
Route::Post('/register',[RegisterController::class, 'Post_thongtin']);

// phan trangtext view --> controller
Route::get('/text_view', [TrangTXTController::class, 'get_project']);
Route::post('/text_view', [TrangTXTController::class, 'Post_project']);
// trang text VIEW sang controller
// Route::get('/trangtext_view_contro',[])


//phần trả về trang ( từ route sang view)

// Route::get('/text_view', function(){
//     return view('text_view');
// });

Route::get('/register', function(){
    return view('register');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/texxt',function (){
    return view('texxt');
});









// quan ly cau thu 
// Route::get("/index_cauthu", function(){
//     return view('index_cauthu');
// });


// trang list
Route::get('/index_cauthu', [AddController::class, 'get_data']);
//trangadd
Route::get('/index_cauthu/trangAdd', [AddController::class, 'get_tt']);
Route::post('/index_cauthu/trangAdd',[AddController::class, 'post_tt']);

// trang edit
Route::get('/trangEdit/{id}', [EditController::class, 'edits']);
Route::post('/trangEdit/{id}', [EditController::class, 'updates']);

?>

