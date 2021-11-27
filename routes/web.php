<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------ng-include src="" scope="" onload=""></ng-include>-----------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


 // đăng nhập
Route::get('login','ControllerMy_Admin@login')->name('login');
Route::post('login','ControllerMy_Admin@postlogin')->name('login');
// //đăng xuất
Route::get('logout','ControllerMy_Admin@logout')->name('logout');

// frontend
require_once('frontend.php');
// admin
Route::group(['prefix'=>'admin','middleware'=>'checkadmin'],function(){
    //category
    Route::group(['prefix'=>'category'],function(){

            // thêm danh mục
        Route::get('addcategory','ControllerCategory@addcategory')->name('addcategory');
        Route::post('addcategory','ControllerCategory@postcategory')->name('addcategory');
                //xóa danh mục
        Route::get('removecategory/{id}','ControllerCategory@removecategory')->name('removecategory');
                //sửa danh mục
        Route::get('editcategory/{id}','ControllerCategory@editcategory')->name('editcategory');
                // post update
        Route::post('editcategory/{id}','ControllerCategory@posteditcategory')->name('editcategory');
                // danh sách danh mục
        Route::get('listcategory','ControllerCategory@danhsach')->name('listcategory');
        //tìm kiếm danh mục
        Route::get('searchcategory','ControllerCategory@searchcategory')->name('searchcategory');

    });
        //product
    Route::group(['prefix'=>'product','namespace'=>'product'],function(){
            //them san pham
        Route::get('addproduct','ControllerProduct@addproduct')->name('addproduct');
        Route::post('addproduct','ControllerProduct@postproduct')->name('addproduct');
            //danh sách sản phẩm
        Route::get('listproduct','Controllerproduct@listproduct')->name('listproduct');
            //xóa sản phẩm (listproduct)
        Route::get('removeproduct/{id}','Controllerproduct@removeproduct')->name('removeproduct');
            //sửa sản phẩm
        Route::get('editproduct/{id}','ControllerProduct@editproduct')->name('editproduct');
        Route::post('editproduct/{id}','ControllerProduct@posteditproduct')->name('editproduct');
        //tìm kiếm sản phẩm
        Route::get('searchproduct','ControllerProduct@searchproduct')->name('searchproduct');
         Route::get('active-product/{id}','ControllerProduct@active_product')->name('active-product');
        // xóa địa chỉ
        Route::get('unactive-product/{id}','ControllerProduct@unactive_product')->name('unactive-product');
    });

        //Baner
    Route::group(['prefix'=>'banner','namespace'=>'banner'],function(){
            //list
        Route::get('listBanner','ControllerBanner@listBanner')->name('listBanner');
            //thêm banner
        Route::get('addbanner','ControllerBanner@addbanner')->name('addbanner');
        Route::post('addbanner','ControllerBanner@postlistbanner')->name('addbanner');
            // Xóa banner
        Route::get('removebanner/{id}','ControllerBanner@removebanner')->name('removebanner');
            // sửa banner
        Route::get('editbanner/{id}','ControllerBanner@editbanner')->name('editbanner');
        Route::post('editbanner/{id}','ControllerBanner@posteditbanner')->name('editbanner');
         //tìm kiếm banner
        Route::get('searchbanner','ControllerBanner@searchbanner')->name('searchbanner');
    });
        //admin
    Route::group(['prefix'=>'adminuser'],function(){
            // thêm admin
        Route::get('addadmin','ControllerUser@getlistadmin')->name('getlistadmin');
        Route::post('addadmin','ControllerUser@postlistadmin')->name('addadmin');
        //list admin
        Route::get('listadmin','ControllerUser@listadmin')->name('listadmin');
        //Xoá admin
        Route::get('removeadmin/{id}','ControllerUser@removeadmin')->name('removeadmin');
        // sửa admin
        Route::get('editadmin/{id}','ControllerUser@editadmin')->name('editadmin');
        Route::post('editadmin/{id}','ControllerUser@posteditadmin')->name('posteditadmin');

    });
    Route::group(['prefix'=>'user'],function(){
         // tài khoản người dùng
       Route::get('list_user','ControllerUser@list_user')->name('list_user');
         // xóa tài khoản người dùng
       Route::get('remove_user/{id}','ControllerUser@remove_user')->name('remove_user');
   });
    // method pay
    Route::group(['prefix' => 'methodpay'],function(){
        //thêm phương thức thanh toán
        Route::get('addmethodpay','Controller_Method_Pay@getaddmethodpay')->name('getaddmethodpay');
        Route::post('addmethodpay','Controller_Method_Pay@postlistmethodpay')->name('addmethodpay');
        // list method pay
        Route::get('listaddmethodpay','Controller_Method_Pay@listaddmethodpay')->name('listaddmethodpay');
        // xóa method
        Route::get('removemethodpay/{id}','Controller_Method_Pay@removemethodpay')->name('removemethodpay');
        // sửa method
        Route::get('editmethodpay/{id}','Controller_Method_Pay@editmethodpay')->name('editmethodpay');
        Route::post('editmethodpay/{id}','Controller_Method_Pay@posteditmethodpay')->name('editmethodpay');
          //tìm kiếm phương thức thanh toán
        Route::get('searchpay','Controller_Method_Pay@searchpay')->name('searchpay');
    });
    // ship method
    Route::group(['prefix' => 'shipmethod'],function(){
        //thêm phương thức giao hàng
        Route::get('getaddmethodship','Controller_Method_Ship@getaddmethodship')->name('getaddmethodship');
        Route::post('addmethodship','Controller_Method_Ship@addmethodship')->name('addmethodship');
        // list method pay
        Route::get('listaddmethodship','Controller_Method_Ship@listaddmethodship')->name('listaddmethodship');
        // xóa method
        Route::get('removemethod/{id}','Controller_Method_Ship@removemethod')->name('removemethod');
        // sửa method
        Route::get('editmethod/{id}','Controller_Method_Ship@editmethodship')->name('editmethod');
        Route::post('editmethod/{id}','Controller_Method_Ship@posteditmethodship')->name('editmethod');
         //tìm kiếm phương thức giao hàng
        Route::get('searchship','Controller_Method_Ship@searchship')->name('searchship');
    });
     // địa chỉ
    Route::group(['prefix' => 'contact'],function(){
        // thêm địa chỉ
        Route::get('addcontact','ControllerContact@addcontact')->name('contact');
        Route::post('addcontact','ControllerContact@postcontact')->name('postcontact');
        // danh sách địa chỉ
        Route::get('listcontact','ControllerContact@listcontact')->name('listcontact');
        // xóa địa chỉ
        Route::get('removecontact/{id}','ControllerContact@removecontact')->name('removecontact');
    });
    Route::group(['prefix' => 'comment'],function(){

        Route::get('listcomment','Controllercomment@listcomment')->name('listcomment');
        Route::get('unactive-comment/{id}','Controllercomment@unactive_comment')->name('unactive-comment');
        Route::get('active-comment/{id}','Controllercomment@active_comment')->name('active-comment');
        // xóa địa chỉ
        Route::get('removecomment/{id}','Controllercomment@removecomment')->name('removecomment');
        Route::get('searchcomment','Controllercomment@searchcomment')->name('searchcomment');
    });

    // tin tức sự kiện
    Route::group(['prefix'=>'blogs'],function(){
        // thêm tin tức (add blogs)
        Route::get('addblog','ControllerBlogs@addblog')->name('addblog');
        Route::post('addblog','ControllerBlogs@postaddblog')->name('addblog');
        // danh sách tin tức sự kiện (list blogs)
        Route::get('listblogs','ControllerBlogs@listblogs')->name('listblogs');
        // xóa tin tức sự kiện (remove blogs)
        Route::get('removeblogs/{id}','ControllerBlogs@removeblogs')->name('removeblogs');
        // sửa tin tức sự kiện (edit blogs)
        Route::get('editblog/{id}','ControllerBlogs@editblog')->name('editblog');
        Route::post('editblog/{id}','ControllerBlogs@posteditblog')->name('editblog');
        // tìm kiếm danh mục
        Route::get('searchblogs','ControllerBlogs@searchblogs')->name('searchblogs');
    });
    // đơn hàng
    Route::group(['prefix'=>'order'],function(){
        // danh sách đơn hàng
     Route::get('list_order','Controllerlist_order@list_order')->name('list_order');
       // xóa đơn hàng
     Route::get('remove_order/{id}','Controllerlist_order@remove_order')->name('remove_order');
       // chi tiết đơn hàng
     Route::get('order_detail/{id}','Controllerlist_order@order_detail')->name('order_detail');
 });
});


