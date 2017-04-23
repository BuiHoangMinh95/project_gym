<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');
Route::get('/pass',function(){
	echo Hash::make("12345");
});

Route::controllers([
 	'auth' => 'Auth\AuthController',
 	'password' => 'Auth\PasswordController',
 ]);
//tạo trang đăng nhập
Route::get('admin/dangnhap',"Admin\UserController@getdangnhapadmin");
Route::post('admin/dangnhap',"Admin\UserController@postdangnhapadmin");
// // end( tao trang dang nhap)
//Route::get('/admin',"Admin\UserController@getdangnhapadmin");
//Route::Controllers(array("auth"=>"Auth\AuthController"));
Route::group(["prefix"=>"admin",'middleware' => 'App\Http\Middleware\AdminLoginMiddleware'],function(){

//list user
	Route::get("/user","Admin\UserController@list_user");
	// Route::get("/user/delete/{id}","Admin\UserController@delete_user");
	// //edit user
	// Route::get("/user/edit/{id}","Admin\UserController@edit_user");
	// //do edit user
	// Route::post("/user/edit/{id}","Admin\UserController@do_edit_user");
	// //add
	// Route::get("/user/add","Admin\UserController@add_user");
	// Route::post("/user/add","Admin\UserController@do_add_user");

//list bomon +chi tiet bomon

//list bomon
	Route::get("/bomon","Admin\BoMonController@list_bomon");
	
	Route::get("/bomon/xoa/{id}","Admin\BoMonController@delete_bomon");
	//edit bomon
	Route::get("/bomon/sua/{id}","Admin\BoMonController@edit_bomon");
	//do edit user
	Route::post("/bomon/sua/{id}","Admin\BoMonController@do_edit_bomon");
	//add
	Route::get("/bomon/add","Admin\BoMonController@add_bomon");
	Route::post("/bomon/add","Admin\BoMonController@post_bomon");
//endlistbomon

//list chitietbomon
	 Route::get("/chitietbomon","Admin\ChiTietBoMonController@list_chitietbomon");
	 // Route::get("/bomon/xoa/{id}","Admin\ChiTietBoMonController@delete_bomon");
	// //edit bomon
	 Route::get("/chitietbomon/sua/{id}","Admin\ChiTietBoMonController@edit_chitietbomon");
	// //do edit
	 Route::post("/chitietbomon/sua/{id}","Admin\ChiTietBoMonController@do_edit_chitietbomon");
	// //add
	Route::get("/chitietbomon/add","Admin\ChiTietBoMonController@add_chitietbomon");
	 Route::post("/chitietbomon/add","Admin\ChiTietBoMonController@post_chitietbomon");
//endlist chitietbomon

//end list loaibomon+chitietbomon


//list theloaitintuc
	 //list
	 Route::get("/theloaitintuc","Admin\TheLoaiTinTucController@list_theloaitintuc");
	//add theloaitintuc
	Route::get("/theloaitintuc/add","Admin\TheLoaiTinTucController@add_theloaitintuc");
	Route::post("/theloaitintuc/add","Admin\TheLoaiTinTucController@post_theloaitintuc");
	//delete the loai tin tuc
	Route::get("/theloaitintuc/xoa/{id}","Admin\TheLoaiTinTucController@delete_theloaitintuc");
	//edit the loai tin tuc
	Route::get("/theloaitintuc/sua/{id}","Admin\TheLoaiTinTucController@edit_theloaitintuc");
	Route::post("/theloaitintuc/sua/{id}","Admin\TheLoaiTinTucController@do_edit_theloaitintuc");
//end the loai tin tuc

//list tin tuc
	//list
	Route::get("/tintuc","Admin\TinTucController@list_tintuc");
	//add theloaitintuc
	Route::get("/tintuc/add","Admin\TinTucController@add_tintuc");
	Route::post("/tintuc/add","Admin\TinTucController@post_tintuc");
//endlisttintuc

//list giao an bo mon
	//list
	Route::get("/giaoan","Admin\GiaoanController@list_giaoan");
	//add giao an
	Route::get("/giaoan/add","Admin\GiaoanController@add_giaoan");
	Route::post("/giaoan/add","Admin\GiaoanController@post_giaoan");


//logout
	Route::get("/logout",function(){
		Auth::logout();
		return redirect('admin/dangnhap');
	});
});
//-------------
//==================
//fontend
//begin trang chu
Route::get('/', function () {
    return redirect('/trangchu');    
});
Route::get('/trangchu',"TrangchuController@Trangchu");
//nguodungdangnhap
Route::get('/dangnhap',"TrangchuController@getdangnhap");
Route::post('/dangnhap',"TrangchuController@postdangnhap");
//nguoidungdangki
Route::get('/dangki',"TrangchuController@getdangki");
Route::post('/dangki',"TrangchuController@postdangki");


Route::get('/logout',function(){
	Auth::logout();
	return redirect('/trangchu');
});
//end nguoi dung dang nhap
//---end trang chu
//giaoan
Route::get('/giaoan',"GiaoanController@list_quanli");
Route::get('/giaoan/{id}',"GiaoanController@chitietgiaoan");
//------------------------------

//--quan li main 
Route::get('/main',"MainController@main");
//---quan li tap luyen
Route::get('quanlibaitap',"QuanlitapluyenController@List_quanlibaitap");
//chitiet ngaytap
Route::get('quanlibaitap/chitiet/{id}',"QuanlitapluyenController@List_chitietquanlibaitap");




//them ngay tap
Route::post('themngaytap/{id}',"QuanlitapluyenController@post_themngaytap");
//xoa ngaytap
Route::get('quanlibaitap/xoa/{id}',"QuanlitapluyenController@xoa_ngaytap");

Route::get('quanlibaitap/sua/{id}',"QuanlitapluyenController@sua_ngaytap_get");
Route::post('quanlibaitap/sua/{id}',"QuanlitapluyenController@sua_ngaytap");

//sua ngaytap
//-----------------



//them bai tap

Route::get('thembaitap',"QuanlitapluyenController@get_them_baitap");
Route::post('thembaitap',"QuanlitapluyenController@them_baitap");
//sua baitap
Route::get('quanlibaitap/chitiet/suabaitap/{id}',"QuanlitapluyenController@get_sua_baitap");
Route::post('quanlibaitap/chitiet/suabaitap/{id}',"QuanlitapluyenController@post_sua_baitap");

//-------------endfontend
//==================