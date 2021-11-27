<?php
Route::get('/','FrontendController@index')->name('home');


Route::get('/about','FrontendController@about')->name('about');


Route::get('comment','BlogController@getcomment')->name('coment');
Route::get('comment','BlogController@postcomment')->name('coment');
Route::get('/blog','BlogController@blog')->name('blog');
Route::get('/blogDetails/{id}','BlogController@blogDetails')->name('blogDetails');
Route::post('/blogDetails/{id}','BlogController@postblog')->name('blogDetails');


Route::get('/contact_us','FrontendController@contact_us')->name('contact_us');
Route::post('/contact_us','FrontendController@Postcontact_us')->name('contact_us');
Route::get('/faq','FrontendController@faq')->name('faq');



Route::get('/product','ProductController@product')->name('product');
Route::get('/cat-product/{id}','ProductController@catproduct')->name('cat-product');
Route::get('/product_detail/{id}','ProductController@product_detail')->name('product_detail');
Route::post('/product_detail/{id}','ProductController@postproduct')->name('product_detail');






Route::get('/shopping_cart','shoppingcartController@shopping_cart')->name('shopping_cart');
Route::get('/shopping_1','CheckordersController@Checkout')->name('shopping_1');
Route::post('/shopping_1','CheckordersController@PostCheckout')->name('shopping_1');
Route::get('/add-cart/{id}','FrontendController@Addcart')->name('add-cart');
Route::get('/add-cart-quantity/{id}/{quantity}','FrontendController@Addcart')->name('add-cart-quantity');
Route::get('/remove/{id}','FrontendController@DeleteItemCart')->name('remove');
Route::get('/remove-shopping-cart/{id}','shoppingcartController@DeleteItemShopCart')->name('remove-shopping-cart');
Route::get('/save-shopping-cart/{id}/{quanty}','shoppingcartController@SaveItemShopCart')->name('save-shopping-cart');
Route::get('/Save-all','shoppingcartController@SaveAllItemShopCart')->name('Save-all');
Route::get('/Dell-all','shoppingcartController@DellAllItemShopCart')->name('Dell-all');










Route::get('/signup','login_sing_upController@getsingup')->name('signup');
Route::post('/signup','login_sing_upController@postsingup')->name('signup');
Route::get('/update_user/{id}','login_sing_upController@getUser')->name('update_user');
Route::post('/update_user/{id}','login_sing_upController@postUser')->name('postUser');
Route::get('/update_password/{id}','login_sing_upController@getPassword')->name('update_password');
Route::post('/update_password/{id}','login_sing_upController@postPassword')->name('postPassword');
Route::get('/signin','login_sing_upController@getsingin')->name('signin');
Route::post('/signin','login_sing_upController@postsingin')->name('signin');
Route::get('/Forgot_password','login_sing_upController@getFromResetpassword')->name('Forgot_password');
Route::post('/Forgot_password','login_sing_upController@sendCodeResetpassword');
Route::get('/reset_password','login_sing_upController@Resetpassword')->name('reset_password');
Route::post('/reset_password','login_sing_upController@SaveResetpassword');
Route::get('/logout','login_sing_upController@getlogout')->name('logout');

Route::get('search','ProductController@search')->name('search');
Route::get('search-head','ProductController@head_search')->name('head_search');


?>	