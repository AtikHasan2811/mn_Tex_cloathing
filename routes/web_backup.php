<?php

// Front Controller
Route::get('/', 'FrontController@index')->name('index');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/profile','FrontController@profile')->name('profile');
Route::get('/sister-concerns','FrontController@sisterConcerns')->name('sisterConcerns');
Route::get('/message-md','FrontController@mdMessage')->name('mdMessage');

Route::get('/service','FrontController@service')->name('service');
Route::get('/service-details','FrontController@serviceDetails')->name('serviceDetails');

Route::get('/project','FrontController@project')->name('project');
Route::get('/project-details/{id}','FrontController@projectDetails')->name('projectDetails');

Route::get('/mission','FrontController@mission')->name('mission');
Route::get('/vision','FrontController@vision')->name('vision');

Route::get('/product','FrontController@product')->name('product');
Route::get('/product-details/{id}','FrontController@productDetails')->name('productDetails');

Route::get('/team','FrontController@team')->name('team');

Route::get('/news','FrontController@news')->name('news');
Route::get('/news-details','FrontController@newsDetails')->name('newsDetails');

Route::get('/machineries','FrontController@machineries')->name('machineries');
Route::get('/machineries-details/{id}','FrontController@machineriesDetails')->name('machineriesDetails');

Route::get('/gallery','FrontController@gallery')->name('gallery');
Route::get('/career','FrontController@career')->name('carrer');
Route::get('/faq','FrontController@faq')->name('faq');
Route::get('/contact','FrontController@contact')->name('contact');

// Message Controller
Route::post('/insertMessage','MessageController@store')->name('insertMessage');
Route::get('/dashboard/message','MessageController@index')->name('messageView');
Route::get('/dashboard/deleteMessage/{id}','MessageController@destroy')->name('deleteMessage');

// Back Controller
//Route::get('/dashboard','BackController@dashboard')->name('dashboard');
//Route::get('/create-slider','BackController@createSlider')->name('createSlider');
//Route::get('/view-slider','BackController@viewSlider')->name('viewSlider');






// Back Controller
// Route::get('/dashboard','BackController@dashboard')->name('dashboard');
// Route::get('/create-slider','BackController@createSlider')->name('createSlider');
// Route::get('/view-slider','BackController@viewSlider')->name('viewSlider');





//...................for backend..........................
Route::post('/image/store','PhotoController@store')->name('store');
Route::get('/dashboard','backendController@view_dashboard')->name('dashboard')->middleware('admin');
Route::get('/photoview','PhotoController@photoview');
Route::delete('photodestroy/{id}','PhotoController@photodestroy')->name('photodestroy');
Route::get('/photoedit/{id}','PhotoController@photoedit')->name('photoedit');
Route::post('/photoupdate','PhotoController@photoupdate')->name('photoupdate');
Route::get('/sum','PhotoController@sum')->name('sum');


//...................about.................
Route::post('/about/store','AboutController@store')->name('store');
Route::get('/aboutview','AboutController@index')->name('admin_about');
Route::delete('photodestroy/{id}','AboutController@photodestroy')->name('photodestroy');
Route::post('/aboutupdate','AboutController@aboutupdate')->name('aboutupdate');



//...................advantageview.................
Route::get('/advantageview','AdvantageController@index');
Route::post('/advantage/store','AdvantageController@store')->name('store');
Route::delete('advantagedestroy/{id}','AdvantageController@photodestroy')->name('photodestroy');
Route::post('/advantageupdate','AdvantageController@advantageupdate')->name('advantageupdate');


//..................certificate.................
Route::get('/certificateview','CertificateController@index');
Route::post('/certificate/store','CertificateController@store')->name('store');
Route::delete('certificatedestroy/{id}','CertificateController@certificatedestroy')->name('photodestroy');
Route::post('/certificateupdate','CertificateController@certificateupdate')->name('certificateupdate');



//..................company.................
Route::get('/companyview','CompanyController@index');
Route::post('/company/store','CompanyController@store')->name('store');
Route::delete('companydestroy/{id}','CompanyController@companydestroy')->name('photodestroy');
Route::post('/companyupdate','CompanyController@companyupdate')->name('certificateupdate');



//..................contact.................
Route::get('/contactview','ContactController@index');
Route::post('/contact/store','ContactController@store')->name('store');
Route::delete('contactdestroy/{id}','ContactController@contactdestroy')->name('photodestroy');
Route::post('/contactupdate','ContactController@contactupdate')->name('certificateupdate');


//..................contact.................
Route::get('/faqview','FRQController@index');
Route::post('/faq/store','FRQController@store')->name('store');
Route::delete('faqdestroy/{id}','FRQController@faqdestroy')->name('faqdestroy');
Route::post('/faqupdate','FRQController@faqupdate')->name('faqupdate');

//..................gallary.................
Route::get('/gallaryview','GallaryController@index');
Route::post('/gallary/store','GallaryController@store')->name('store');
Route::delete('gallarydestroy/{id}','GallaryController@gallarydestroy')->name('faqdestroy');
Route::post('/gallaryupdate','GallaryController@gallaryupdate')->name('faqupdate');

//..................machine.................
Route::get('/machineryview','MachineryController@index');
Route::post('/machinery/store','MachineryController@store')->name('store');
Route::delete('machinerydestroy/{id}','MachineryController@machinerydestroy')->name('faqdestroy');
Route::post('/machineryupdate','MachineryController@machineryupdate')->name('faqupdate');



//..................news.................
Route::get('/newsview','NewsController@index');
Route::post('/news/store','NewsController@store')->name('store');
Route::delete('newsdestroy/{id}','NewsController@newsdestroy')->name('newsdestroy');
Route::post('/newsupdate','NewsController@newsupdate')->name('newsupdate');



//..................product.................
Route::get('/productview','ProductController@index');
Route::post('/product/store','ProductController@store')->name('store');
Route::delete('productdestroy/{id}','ProductController@productdestroy')->name('productdestroy');
Route::post('/productupdate','ProductController@productupdate')->name('productupdate');


//...................project Controller................
Route::get('/projectview','ProjectController@index');
Route::post('/project/store','ProjectController@store')->name('store');
Route::delete('projectdestroy/{id}','ProjectController@projectdestroy')->name('projectdestroy');
Route::post('/projectupdate','ProjectController@projectupdate')->name('projectupdate');

//...................serviceview.................
Route::get('/serviceview','ServiceController@index');
Route::post('/service/store','ServiceController@store')->name('store');
Route::delete('servicedestroy/{id}','ServiceController@servicedestroy')->name('servicedestroy');
Route::post('/serviceupdate','ServiceController@serviceupdate')->name('serviceupdate');


//...................sisterview.................
Route::get('/sisterview','SisterController@index');
Route::post('/sister/store','SisterController@store')->name('store');
Route::delete('sisterdestroy/{id}','SisterController@sisterdestroy')->name('sisterdestroy');
Route::post('/sisterupdate','SisterController@sisterupdate')->name('sisterupdate');


//...................Slider.................
Route::get('/sliderview','SliderController@index');
Route::post('/slider/store','SliderController@store')->name('store');
Route::delete('sliderdestroy/{id}','SliderController@sliderdestroy')->name('sliderdestroy');
Route::post('/sliderupdate','SliderController@sliderupdate')->name('sliderupdate');

//...................team.................
Route::get('/teamview','TeamController@index');
Route::post('/team/store','TeamController@store')->name('store');
Route::delete('teamdestroy/{id}','TeamController@teamdestroy')->name('teamdestroy');
Route::post('/teamupdate','TeamController@teamupdate')->name('teamupdate');



//Admin Controller Authentication Auth Admin Login Admin Register
Route::get('/dashboard/admin-login','AdminController@adminLogin')->name('adminLogin');
Route::get('/dashboard/admin-register','AdminController@adminRegister')->name('adminRegister');
Route::post('/dashboard/insertAdmin','AdminController@insertAdmin')->name('insertAdmin');
Route::post('/dashboard/loginCheck','LoginController@loginCheck')->name('loginCheck');
Route::get('/dashboard/logout','LoginController@logout')->name('logout');