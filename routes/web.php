<?php

use Illuminate\Support\Facades\Auth;
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

Route::post("/send_request" , [homepageController::class ,'send_request']);
Route::get("view_product/{id}" , [homepageController::class,'view_product']);
Route::get("view_category/{text}" , [homepageController::class,'view_category']);
Route::get('/signup', function () {
    return view('auth.signup');
});
Route::get('/signin', function () {
    // $user=Auth::user();

if(!Auth::check()){
return view('auth.signin');
}


    return redirect( '/admin'
);


})->name('signin');
Route::get("/signout" , [authController::class,'logout']);
Route::post("signup" , [authController::class,'signup']);
Route::post("/signin" , [authController::class,'signin']);

// admin routes
// Route::get('/admin', function () {
//     return view('admin.index');
// });
Route::get("admin" , [adminController::class,'admin'])->name('admin')->middleware('admin');
Route::get("manage_services" , [serviceController::class,'services']);
Route::post("add_service" , [serviceController::class,'add_service']);
Route::get("change_service_status/{id}" , [serviceController::class,'change_service_status']);
Route::get("delete_service/{id}" , [serviceController::class,'delete_service']);
Route::get("queries_inbox" ,[adminController::class ,'get_queries'] );
Route::get("change_q_status/{id}" , [adminController::class,'change_status']);
Route::get("delete_querie/{id}" , [adminController::class,'delete_querie']);
Route::get("create_user/{id}" , [adminController::class,'create_user']);
Route::get("create_user1/{id}" , [adminController::class,'create_user1']);
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
Route::get("change_c_status/{id}" , [adminController::class,'change_c_status']);
Route::get('/manage_shop_banner' , [adminController::class , 'manage_shop_banner']);
Route::post("/add_banner" , [adminController::class ,'add_banner']);
Route::get('change_banner_status/{id}', [adminController::class, 'change_banner_status']);
Route::get("delete_banner/{id}" , [adminController::class,'delete_banner']);

Route::get("cabletv_req" , [adminController::class,'cabletv_req']);
Route::get('change_cable_req_status/{id}', [adminController::class, 'change_cable_req_status']);
Route::get("delete_cable_req/{id}" , [adminController::class,'delete_cable_req']);
Route::get("contact_req" , [adminController::class,'contact_req']);
Route::get('change_contact_req_status/{id}', [adminController::class, 'change_contact_req_status']);
Route::get("delete_contact_req/{id}" , [adminController::class,'delete_contact_req']);
Route::get("m_review" , [adminController::class,'m_review']);
Route::get('change_review_status/{id}', [adminController::class, 'change_review_status']);
Route::get("delete_review/{id}" , [adminController::class,'delete_review']);
Route::get("edit_pr/{id}" , [adminController::class,'edit_pr']);

Route::post("edit_product/{id}" , [adminController::class,'edit_product']);
// adminn routes for pg ends
// admin routes
// authentication

// user routes
Route::get("enquire_service/{id}" , [homepageController::class ,'enquire']);

Route::post("send_enquiry/{id}" , [homepageController::class ,'send_enquiry']);
// Route::get('/shop', function () {
//     return view('luthra_shop');
// });

Route::get("/shop" , [homepageController::class ,'shop']);
Route::get("/products" , [homepageController::class ,'products']);
// user routes ends
Route::any("search" , [HomepageController::class,'search']);

Route::get('/contact_us', function () {
    return view('contact_us');
});
Route::post("send_message" , [homepageController::class ,'send_message']);
Route::get('/about_us', function () {
    return view('about_us');
});
Route::post('review' , [HomepageController::class , 'review']);
Route::get('/privacy_policy', function () {
    return view('privacy');
});
Route::get('/isp', function () {
    return view('isp');
});