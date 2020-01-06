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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/portfolio_details/{id}', 'HomeController@portfolio_details')->name('portfolio_details');
Route::get('/blog_details/{id}', 'HomeController@blog_details')->name('blog_details');
Route::post('/blog_comment', 'HomeController@blog_comment')->name('user_comment');

//user contact section of front page.......
Route::post('/home', 'HomeController@usercontact')->name('usercontact');


Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin','as' => 'admin.'], function(){

	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	Route::get('/', 'DashboardController@index')->name('admin');
	Route::get('/dashboard', 'DashboardController@index')->name('back');


	//Slider Controller Start Now................
	Route::resource('/slider', 'SliderController');
	Route::get('/slider/create', 'SliderController@create')->name('slider.create');
	Route::post('/slider/store', 'SliderController@store')->name('slider.store');
	Route::get('/slider/edit/{id}', 'SliderController@edit')->name('slider.edit');

	Route::post('/slider/update/{id}', 'SliderController@update')->name('slider.update');
	Route::get('/slider/delete/{id}', 'SliderController@destroy')->name('slider.destroy');

	Route::get('/slider/active/{id}', 'SliderController@active')->name('slider.active');
	Route::get('/slider/unactive/{id}', 'SliderController@unactive')->name('slider.unactive');


	//Slider Controller Start Now................
	Route::resource('/about', 'AboutmeController');
	Route::get('/about/create', 'AboutmeController@create')->name('about.create');
	Route::post('/about/store', 'AboutmeController@store')->name('about.store');
	Route::get('/about/edit/{id}', 'AboutmeController@edit')->name('about.edit');

	Route::post('/about/update/{id}', 'AboutmeController@update')->name('about.update');
	Route::get('/about/delete/{id}', 'AboutmeController@destroy')->name('about.destroy');


	//Category Controller Start Now................
	Route::resource('/category', 'CategoryController');
	Route::get('/category/create', 'CategoryController@create')->name('category.create');
	Route::post('/category/store', 'CategoryController@store')->name('category.store');
	Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');

	Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');
	Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category.destroy');

	Route::get('/category/active/{id}', 'CategoryController@active')->name('category.active');
	Route::get('/category/unactive/{id}', 'CategoryController@unactive')->name('category.unactive');


	//Portfolio Controller Start Now................
	Route::resource('/portfolio', 'PortfolioController');
	Route::get('/portfolio/create', 'PortfolioController@create')->name('portfolio.create');
	Route::post('/portfolio/store', 'PortfolioController@store')->name('portfolio.store');
	Route::get('/portfolio/edit/{id}', 'PortfolioController@edit')->name('portfolio.edit');

	Route::post('/portfolio/update/{id}', 'PortfolioController@update')->name('portfolio.update');
	Route::get('/portfolio/delete/{id}', 'PortfolioController@destroy')->name('portfolio.destroy');

	Route::get('/portfolio/active/{id}', 'PortfolioController@active')->name('portfolio.active');
	Route::get('/portfolio/unactive/{id}', 'PortfolioController@unactive')->name('portfolio.unactive');



	//Blog Controller Start Now................
	Route::resource('/blog', 'BlogController');
	Route::get('/blog/create', 'BlogController@create')->name('blog.create');
	Route::post('/blog/store', 'BlogController@store')->name('blog.store');
	Route::get('/blog/edit/{id}', 'BlogController@edit')->name('blog.edit');

	Route::post('/blog/update/{id}', 'BlogController@update')->name('blog.update');
	Route::get('/blog/delete/{id}', 'BlogController@destroy')->name('blog.destroy');

	Route::get('/blog/active/{id}', 'BlogController@active')->name('blog.active');
	Route::get('/blog/unactive/{id}', 'BlogController@unactive')->name('blog.unactive');


	Route::get('/blog/blogcomment', 'BlogCommentController@blogcomment')->name('blog.comment');
	Route::get('/blog/delete/{id}', 'BlogCommentController@comment_destroy')->name('blog_comment.destroy');


	//User's Contact Controller Section Start Now................
	Route::get('/user/comments', 'UserContactController@user_comment')->name('user.comment');
	Route::get('/user/comments/reply/{id}', 'UserContactController@replys')->name('user.comment.reply');
	Route::post('/user/comments/send/{id}', 'UserContactController@send')->name('user.comment.send');
	Route::get('/user/comments/destroy/{id}', 'UserContactController@destroy')->name('user.comment.destroy');


	//Blog Controller Start Now................
	Route::resource('/contact', 'AddcontactController');
	Route::get('/contact/create', 'AddcontactController@create')->name('contact.create');
	Route::post('/contact/store', 'AddcontactController@store')->name('contact.store');
	Route::get('/contact/edit/{id}', 'AddcontactController@edit')->name('contact.edit');

	Route::post('/contact/update/{id}', 'AddcontactController@update')->name('contact.update');
	Route::get('/contact/delete/{id}', 'AddcontactController@destroy')->name('contact.destroy');

	Route::get('/contact/active/{id}', 'AddcontactController@active')->name('contact.active');
	Route::get('/contact/unactive/{id}', 'AddcontactController@unactive')->name('contact.unactive');

});