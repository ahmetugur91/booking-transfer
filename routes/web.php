<?php



Auth::routes();

Route::get('/test', 'HomeController@test')->name("test");

Route::get('/', 'HomeController@index')->name('home');
Route::get('/pricing', 'HomeController@pricing')->name('pricing');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/about-us', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@contactPost')->name('contact.post');

Route::get('/lang/{lang}', 'HomeController@lang')->name("lang");

Route::post('/mailapi', 'HomeController@mailapi')->name("mailapi");



Route::get('/daily', 'HomeController@daily')->name('daily');




Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/bekleyen', 'AdminController@bekleyen')->name('admin.bekleyen');
Route::get('/admin/onaylanan', 'AdminController@onaylanan')->name('admin.onaylanan');
Route::get('/admin/rezervasyon/{id}', 'AdminController@reservation')->name('admin.reservation');


Route::get('/admin/setConfirm/{id}', 'AdminController@setConfirm')->name('admin.setConfirm');
Route::get('/admin/delete/{id}', 'AdminController@delete')->name('admin.delete');
Route::get('/admin/sendMail/{id}', 'AdminController@sendMail')->name('admin.sendMail');

Route::get('/admin/bolgeler', 'AdminController@regions')->name('admin.regions');
Route::post('/admin/bolgeler/ekle', 'AdminController@createRegion')->name('admin.regions.create');
Route::get('/admin/bolgeler/sil/{id}', 'AdminController@deleteRegion')->name('admin.regions.delete');
Route::post('/admin/region/duzenle/{id}', 'AdminController@editRegion')->name('admin.region.edit');

Route::get('/admin/fiyatlar', 'AdminController@pricing')->name('admin.pricing');
Route::post('/admin/fiyatlar/ekle', 'AdminController@createPricing')->name('admin.pricing.create');
Route::get('/admin/fiyatlar/sil/{id}', 'AdminController@deletePricing')->name('admin.pricing.delete');
Route::post('/admin/fiyatlar/duzenle/{id}', 'AdminController@editPricing')->name('admin.pricing.edit');


Route::get('/admin/hakkimizda', 'AdminController@aboutus')->name('admin.aboutus');
Route::post('/admin/hakkimizda', 'AdminController@aboutusUpdate')->name('admin.aboutus.update');

Route::get('/admin/iletisim', 'AdminController@contact')->name('admin.contact');
Route::post('/admin/iletisim', 'AdminController@contactUpdate')->name('admin.contact.update');