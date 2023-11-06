<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\adminController;
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

Route::get('/test', function () {
    return view('index');
});

Route::get('/' , [homepageController::class,'index']);
Route::get('/luthra_pg' , [homepageController::class,'get_pg']);
Route::get("luthra_pg/{id}" , [homepageController::class,'room_detail']);

Route::get('/luthra_cabletv', function () {
    return view('cable_tv');
});
Route::get('/shop', function () {
    return view('luthra_shop');
});
Route::post("/send_request" , [homepageController::class ,'send_request']);

Route::get('/signup', function () {
    return view('auth.signup');
});
Route::get('/signin', function () {
    return view('auth.signin');
});
Route::post("signup" , [authController::class,'signup']);
Route::post("signin" , [authController::class,'signin']);

// admin routes
// Route::get('/admin', function () {
//     return view('admin.index');
// });
Route::get("admin" , [adminController::class,'services']);
Route::get("manage_services" , [serviceController::class,'services']);
Route::post("add_service" , [serviceController::class,'add_service']);
Route::get("change_service_status/{id}" , [serviceController::class,'change_service_status']);
Route::get("delete_service/{id}" , [serviceController::class,'delete_service']);
Route::get("queries_inbox" ,[adminController::class ,'get_queries'] );
Route::get("change_q_status/{id}" , [adminController::class,'change_status']);
Route::get("delete_querie/{id}" , [adminController::class,'delete_querie']);
Route::get("create_user/{id}" , [adminController::class,'create_user']);
Route::get("users" , [adminController::class,'users_lists']);
Route::get("delete_u/{id}" , [adminController::class,'delete_u']);
Route::get("change_u_status/{id}" , [adminController::class,'change_u_status']);
// admin routes for pg
Route::get("manage_facilities" , [adminController::class,'add_facilities']);
Route::post("add_category" , [adminController::class,'add_category']);
Route::post("add_facility_cat" , [adminController::class,'add_facility_cat']);

Route::get("delete_cats/{id}" , [adminController::class,'delete_cats']);
Route::get("delete_cats_facility/{id}" , [adminController::class,'delete_cats_facility']);
Route::get("change_f_status/{id}" , [adminController::class,'change_f_status']);
Route::get("manage_rooms" , [adminController::class,'add_room']);
Route::post("add_rooms" , [adminController::class,'add_rooms']);
Route::get("delete_r/{id}" , [adminController::class,'delete_r']);
Route::get("change_r_status/{id}" , [adminController::class,'change_r_status']);
Route::get("get_pg_data" , [adminController::class,'get_pg_data']);
Route::get('/import_data', function () {
    return view('admin.import_data');
});
Route::get("upload_gallery/{id}" , [adminController::class,'upload_gallery']);
Route::post("upload_room_gallery/{id}" , [adminController::class,'upload_room_gallery']);
Route::post("import_users" , [adminController::class,'uploadUsers']);
Route::get("/manage_shop_cat" , [adminController::class ,'manage_shop_cat']);
Route::post("/add_shop_cat" , [adminController::class ,'add_shop_cat']);
Route::get('change_shop_cats/{id}', [adminController::class, 'change_shop_cats']);
Route::get("delete_shop_cats/{id}" , [adminController::class,'delete_shop_cats']);
Route::get('/manage_shop_products' , [adminController::class , 'manage_shop_products']);
Route::post("/add_product" , [adminController::class ,'add_products']);
Route::get('change_pr_status/{id}', [adminController::class, 'change_pr_status']);
Route::get("delete_pr/{id}" , [adminController::class,'delete_pr']);
Route::get("upload_pr_gallery/{id}" , [adminController::class,'upload_pr_gallery']);
Route::post("upload_gallery_pr/{id}" , [adminController::class,'upload_gallery_pr']);
// adminn routes for pg ends
// admin routes
// authentication

// user routes
Route::get("enquire_service/{id}" , [homepageController::class ,'enquire']);

Route::post("send_enquiry/{id}" , [homepageController::class ,'send_enquiry']);

// user routes ends