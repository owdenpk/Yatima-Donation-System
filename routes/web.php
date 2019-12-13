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
use App\Notifications\NewUser;
use App\User;
use App\Post;
use App\Models\Abouts;
use App\Mail\NewUserWelcomeMail;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


    Route::get('/', 'CampaignController@welcome');

	Route::get('/post/{id}', function(Request $request, $id){
		$posts = Post::where('id', $id)->get();
		return view('posts')->with('posts', $posts);
	});

	Route::get('/approval', function () {
		return view('organization.approval');
	});

	Route::get('/home', function () {
		return view('home');
	});

	Auth::routes();

	Route::get('/email', function () {
		return new NewUserWelcomeMail();
	});

	Route::middleware(['auth'])->group(function () {
		Route::get('/approval', 'HomeController@approval')->name('approval');
		Route::middleware(['approved'])->group(function () {
			Route::get('/home', 'HomeController@index')->name('home');
		});
	});


	Route::group(['middleware' => ['auth', 'admin']], function () {
		
		Route::get('/dashboard', 'Admin\DashboardController@count');

		Route::get('/users', 'UserController@index')->name('admin.users');
		
		Route::put('/users/{id}/approve', 'UserController@approve')->name('admin.users.approve');

		Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');

		Route::get('/org-edit/{id}','Admin\OrganizationController@orgedit');

		Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');

		Route::put('/org-update/{id}','Admin\OrganizationController@orgupdate');

		Route::post('/save-aboutus','Admin\AboutusController@store');

		Route::post('/org-add','Admin\OrganizationController@orgadd');

		Route::get('/abouts','Admin\AboutusController@index');

		Route::get('/adminprofile/{id}','Admin\DashboardController@admin');

		Route::put('/adminprofile-update/{id}','Admin\DashboardController@adminupdate');

		Route::get('/userreport','Admin\DashboardController@showuser');

		Route::get('/searchuserreport','Admin\DashboardController@searchuser');

		Route::get('/downloaduser','Admin\DashboardController@downloaduser');

		Route::get('/profilereport','Admin\DashboardController@showprofile');

		Route::get('/downloadprofile','Admin\DashboardController@downloadprofile');

		Route::get('/campaignreport','Admin\DashboardController@showcampaign');

		Route::get('/downloadcampaign','Admin\DashboardController@downloadcampaign');

		Route::get('/about-fetch/{id}','Admin\AboutusController@fetch');

		Route::put('/about-us-update/{id}','Admin\AboutusController@aboutupdate');

		Route::delete('/about-us-delete/{id}','Admin\AboutusController@aboutdelete');

		Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

		Route::delete('/org-delete/{id}','Admin\OrganizationController@orgdelete');

		Route::get('/searchorg','Admin\OrganizationController@search');

		Route::get('/searchuser','Admin\DashboardController@search');

		Route::get('/admin_campaigns','Admin\DashboardController@campaigns');

		Route::delete('/campaigndelete/{id}','Admin\DashboardController@campaigndelete');

		Route::get('/reports', function () {
			return view('admin.reports');
		});

	});

	Route::post('follow/{user}', 'FollowsController@store');

	Route::get('/posts', 'PostsController@index');

	Route::get('/p/create', 'PostsController@create');

	Route::post('/p', 'PostsController@store');

	Route::get('/p/{post}', function (\App\Post $post) {
		return view('posts.show', compact('post'));
	});

	Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

	Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

	Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

	Route::get('/campaignlist','CampaignController@index');
