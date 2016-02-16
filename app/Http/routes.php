<?php
Route::get('/', ['as' =>'trangchu','uses' => 'PageController@index']);
Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('admin',['as' => 'admin','middleware' => 'auth','uses' => 'TrangchuContronller@index']);
Route::group(['prefix' =>'admin','middleware' => 'auth'],function(){
	Route::group(['prefix' => 'category'],function(){
		Route::get('add',['as' => 'admin.category.getAdd','uses' => 'CategoryController@getAdd']);
		Route::post('add',['as' => 'admin.category.postAdd','uses' => 'CategoryController@postAdd']);
		Route::get('list',['as' => 'admin.category.getList','uses' => 'CategoryController@getList']);
		Route::get('delete/{id}',['as' => 'admin.category.getDelete','uses' => 'CategoryController@getDelete']);
		Route::get('edit/{id}',['as' => 'admin.category.getEdit ','uses' => 'CategoryController@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.category.postEdit','uses' => 'CategoryController@postEdit']);
	});
	Route::group(['prefix' => 'product'],function(){
		Route::get('add',['as' => 'admin.product.getAdd','uses' => 'ProductContoller@getAdd']);
		Route::post('add',['as' => 'admin.product.postAdd','uses' => 'ProductContoller@postAdd']);
		Route::get('list',['as' => 'admin.product.getList','uses' => 'ProductContoller@getList']);
		Route::get('delete/{id}',['as' => 'admin.product.getDelete','uses' => 'ProductContoller@getDelete']);
		Route::get('edit/{id}',['as' => 'admin.product.getEdit','uses' => 'ProductContoller@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.product.postEdit','uses' => 'ProductContoller@postEdit']);
		Route::get('delimg/{id}',['as' => 'admin.product.getDelImg','uses' => 'ProductContoller@getDelImg']);
		Route::get('listdanhgia',['as' => 'admin.product.listDanhgia','uses' => 'ProductContoller@getDanhgia']);
	});
	Route::group(['prefix' => 'tintuc'],function(){
		Route::get('add',['as' => 'admin.tintuc.getAdd','uses' => 'TintucController@getAdd']);
		Route::post('add',['as' => 'admin.tintuc.postAdd','uses' => 'TintucController@postAdd']);
		Route::get('list',['as' =>'admin.tintuc.getList','uses' => 'TintucController@getList']);
		Route::get('delete/{id}',['as' =>'admin.tintuc.getDelete','uses' => 'TintucController@delete']);
		Route::get('edit/{id}',['as' =>'admin.tintuc.getEdit','uses' => 'TintucController@getEdit']);
		Route::post('edit/{id}',['as' =>'admin.tintuc.getEdit','uses' => 'TintucController@postEdit']);
	});
	Route::group(['prefix' => 'cart'],function(){
		Route::get('list',['as' => 'admin.cart.getCart','uses' => 'CartController@listcart']);
		Route::get('delete/{id}',['as' => 'admin.cart.getDelete','uses' => 'CartController@delete']);
		Route::get('update/{id}',['as' => 'admin.cart.getCapnhat','uses' => 'CartController@update']);
	});
});
Route::get('san-pham',['as' => 'sanpham','uses' => 'PageController@category']);
Route::get('dang-ky',['as' => 'dangky','uses' => 'PageController@getDangky']);
Route::post('dang-ky',['as' => 'dangky','uses' => 'PageController@postDangky']);
Route::get('gio-hang',['as' => 'giohang','uses' => 'PageController@giohang']);
Route::get('addtocart/{id}',['as' => 'themvaogio','uses' => 'PageController@addtocart']);
Route::get('huy-gio-hang',['as' => 'huygiohang','uses' => 'PageController@huygiohang']);
Route::get('xoa-cart/{id}',['as' => 'xoacart','uses' => 'PageController@xoacart']);
Route::get('update-cart/{id}/{qty}',['as' => 'updatecart','uses' => 'PageController@updatecart']);
Route::get('thanh-toan',['as' => 'thanhtoan','uses' =>'PageController@thanhtoan']);
Route::post('thanh-toan',['as' => 'thanhtoan','uses' =>'PageController@postthanhtoan']);
Route::get('danh-gia',['as' => 'danhgia','uses' =>'PageController@danhgia']);
Route::get('lien-he',['as' => 'lienhe','uses' =>'PageController@lienhe']);
Route::post('lien-he',['as' => 'lienhe','uses' =>'PageController@postlienhe']);
Route::get('administrator/login',['as' => 'administrator.login','uses' => 'Auth\AuthController@getLogin']);
Route::post('administrator/login',['as' => 'administrator.login','uses' => 'Auth\AuthController@postLogin']);
Route::get('administrator/register',['as' => 'administrator.register','uses' => 'Auth\AuthController@getRegister']);
Route::post('administrator/register',['as' => 'administrator.register','uses' => 'Auth\AuthController@postRegister']);
Route::get('{alias}',['as' => 'chitietsanpham','uses' => 'PageController@chitietsanpham']);
Route::get('danh-muc/{alias}',['as' => 'cateparent','uses' => 'PageController@cateparent']);
Route::any('{all?}','PageController@index')->where('all','(.*)');