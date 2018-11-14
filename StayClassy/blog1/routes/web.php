<?php

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


Route::get('/login','UserController@userlogin')->name('user.userlogin');
Route::post('/login','UserController@uservarify')->name('user.uservarify');
Route::get('/','UserController@index')->name('user.index');

Route::get('/sign','UserController@signup')->name('user.sign');
Route::post('/sign','UserController@store')->name('user.store');
Route::get('/logout','UserController@logout')->name('user.logout');

Route::get('/category/{name}','UserController@category')->name('user.category');
Route::get('/type/{name}','UserController@type')->name('user.type');
Route::get('/newarrival','UserController@newarrival')->name('user.newarrival');
Route::get('/Offers','UserController@offers')->name('user.offers');

Route::get('/details/{id}','UserController@details')->name('user.details');
Route::post('/details/{id}','UserController@cart')->name('user.cart');





Route::get('/checkout/{id}','UserController@checkout')->name('user.checkout');
Route::post('/checkout/{id}','UserController@varify1')->name('user.varify1');

Route::get('/voucher/{id}','UserController@voucher')->name('user.voucher');
Route::get('/travelling','UserController@travelling')->name('user.travel');
Route::get('/office','UserController@office')->name('user.office');
Route::get('/gents','UserController@gents')->name('user.gents');

Route::get('/ajax/addCart', 'AjaxController@addCart')->name('ajax.addCart');
Route::get("/cartshow",'UserController@cartshow')->name('user.cartshow');
Route::post("/cartshow",'UserController@orderstore')->name('user.orderstore');
Route::get("/cartupdate/edit/{id}",'UserController@cartedit')->name('user.cartedit');
Route::post("/cartupdate/edit/{id}",'UserController@cartupdate')->name('user.cartupdate');
Route::get("/cartshow/remove/{id}",'UserController@cartremove')->name('user.cartremove');


//Admin section

Route::get('/admin/signup','AdminController@adminsignup')->name('admin.adminsignup');
Route::post('/admin/signup','AdminController@store')->name('admin.adminsignup');

Route::get('/admin','AdminController@login')->name('admin.login');
Route::post('/admin','AdminController@varify')->name('admin.varify');
Route::get('/admin/logout','AdminController@adminlogout')->name('admin.adminlogout');

Route::get('/index','AdminController@index')->name('admin.index');
Route::get('/admin/layout','AdminController@layout');
Route::get('/admin/manage/user','AdminController@manageuser')->name('admin.manageuser');
Route::get('/admin/manage/user/remove/{id}','AdminController@destroy')->name('admin.destroy');

Route::get('/product','ProductController@index')->name('product.index');

Route::get('/productadd','ProductController@create')->name('product.create');
Route::post('/productadd','ProductController@store')->name('product.store');

Route::get('/order','OrderController@order')->name('order.order');
Route::get('/order/details','OrderController@orderdetails')->name('order.orderdetails');

Route::get('/stuffadd','StuffController@create')->name('stuff.create');
Route::post('/stuffadd','StuffController@store')->name('stuff.store');

Route::get('/stuff','StuffController@stufflist')->name('stuff.stufflist');

Route::get('/stuff/edit/{id}','StuffController@edit')->name('stuff.edit');
Route::post('/stuff/edit/{id}','StuffController@update')->name('stuff.update');
Route::get('/stuff/remove/{id}','StuffController@destroy')->name('stuff.destroy');

Route::get('/slider','LayoutController@slider')->name('layout.slider');
Route::get('/left','LayoutController@left')->name('layout.left');
Route::get('/right','LayoutController@right')->name('layout.right');

Route::get('/social','FooterController@create')->name('footer.create');
Route::post('/social','FooterController@store')->name('footer.store');
Route::get('/social/edit/{id}','FooterController@edit')->name('footer.edit');
Route::post('/social/edit/{id}','FooterController@update')->name('footer.update');

Route::get('/quality','FooterController@qualitycreate')->name('footer.qualitycreate');
Route::post('/quality','FooterController@qualitystore')->name('footer.qualitystore');

Route::get('/quality/edit/{id}','FooterController@qualityedit')->name('footer.qualityedit');
Route::post('/quality/edit/{id}','FooterController@qualityupdate')->name('footer.qualityupdate');

Route::get('/return-policy','FooterController@returnpolicycreate')->name('footer.returnpolicycreate');
Route::post('/return-policy','FooterController@returnpolicystore')->name('footer.returnpolicystore');

Route::get('/return-policy/edit/{id}','FooterController@returnpolicyedit')->name('footer.returnpolicyedit');
Route::post('/return-policy/edit/{id}','FooterController@returnpolicyupdate')->name('footer.returnpolicyupdate');

Route::get('/shipping','FooterController@shippingcreate')->name('footer.shippingcreate');
Route::post('/shipping','FooterController@shippingstore')->name('footer.shippingstore');

Route::get('/shipping/edit/{id}','FooterController@shippingedit')->name('footer.shippingedit');
Route::post('/shipping/edit/{id}','FooterController@shippingupdate')->name('footer.shippingupdate');

Route::get('/customer-service','FooterController@customercreate')->name('footer.customercreate');
Route::post('/customer-service','FooterController@customerstore')->name('footer.customerstore');

Route::get('/customer-service/edit/{id}','FooterController@customeredit')->name('footer.customeredit');
Route::post('/customer-service/edit/{id}','FooterController@customerupdate')->name('footer.customerupdate');

Route::get('/contact','FooterController@contactcreate')->name('footer.contactcreate');
Route::post('/contact','FooterController@contactstore')->name('footer.contactstore');

Route::get('/contact/edit/{id}','FooterController@contactedit')->name('footer.contactedit');
Route::post('/contact/edit/{id}','FooterController@contactupdate')->name('footer.contactupdate');

Route::get('/policy','FooterController@policycreate')->name('footer.policycreate');
Route::post('/policy','FooterController@policystore')->name('footer.policystore');

Route::get('/policy/edit/{id}','FooterController@policyedit')->name('footer.policyedit');
Route::post('/policy/edit/{id}','FooterController@policyupdate')->name('footer.policyupdate');

Route::get('/about','FooterController@aboutcreate')->name('footer.aboutcreate');
Route::post('/about','FooterController@aboutstore')->name('footer.aboutstore');

Route::get('/about/edit/{id}','FooterController@aboutedit')->name('footer.aboutedit');
Route::post('/about/edit/{id}','FooterController@aboutupdate')->name('footer.aboutupdate');
