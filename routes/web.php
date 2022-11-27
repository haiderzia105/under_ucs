<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PermissionGroupController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\NewsCategoriesController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\NewsAndEventsController;
use App\Http\Controllers\Auth\AdminAuthenticatedSessionController;

use App\Http\Controllers\Front\ContactsController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\NewsEventsController;
use App\Http\Controllers\Front\AllNewsAndEventsController;
use App\Http\Controllers\Front\AllPressReleasesController;
use App\Http\Controllers\Front\PressReleaseController;



use Illuminate\Support\Facades\Route;

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
Route::get('dashboard', [AdminAuthenticatedSessionController::class,'index'])->name('dashboard');
// Route::get('/', function () {
//     return redirect('login');
// });
   /*=============<< Dashboard >>==============*/
   Route::get('/main-admin', 'HomeController@index')->name('main-admin');
   
Route::group(['middleware' => ['auth','verified','IsActive','xss'],'prefix'=>'admin'], function() {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::resource('permission_group',PermissionGroupController::class);
    Route::resource('permission',PermissionController::class);
    Route::resource('role',RoleController::class);
    Route::get('get/roles',[RoleController::class,'getRoles'])->name('getRoles');
    Route::resource('user',UserController::class);
    Route::get('get/users',[UserController::class,'getUsers'])->name('getUsers');

    // Contact Us Admin Route 
    Route::resource('contact-us',AdminContactController::class);
    Route::get('get/contactus',[AdminContactController::class,'getContact'])->name('get-contact');

     //News Categories
     Route::resource('news-categories',NewsCategoriesController::class);
     Route::get('get/news-categories',[NewsCategoriesController::class,'getNewsCategories'])->name('getNewsCategories');
     Route::delete('news-categories-delete/{id}',[NewsCategoriesController::class,'delete'])->name('news-categories.delete');
     Route::get('news-categories-restore/{id}', [NewsCategoriesController::class,'restore'])->name('news-categories.restore');

    //Scheme Of Tags
    Route::resource('tags',TagController::class);
    Route::get('get/tags',[TagController::class,'getTags'])->name('getTags');
    Route::delete('tags-delete/{id}', [TagController::class,'delete'])->name('tags.delete');
    Route::get('tags-restore/{id}', [TagController::class,'restore'])->name('tags.restore');
   
    //News and Events
    Route::resource('tuf-news-and-events',NewsAndEventsController::class);
    Route::get('get/tuf-news-and-events',[NewsAndEventsController::class,'getNewsAndEvents'])->name('getNewsAndEvents');
    Route::delete('tuf-news-and-events-delete/{id}',[NewsAndEventsController::class,'delete'])->name('tuf-news-and-events.delete');
    Route::get('tuf-news-and-events-restore/{id}', [NewsAndEventsController::class,'restore'])->name('tuf-news-and-events.restore');
     //Collab Organization Ck editor Uploads
     Route::post('ckeditor/tuf-news-and-events-upload', [NewsAndEventsController::class,'upload'])->name('tuf-news-and-events-upload');
   
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect(route('login'));
});
require __DIR__.'/auth.php';

// FrontEnd Screens Route
Route::get("/page", function(){
    return view::make("dir.page");
 });
 Route::get('/', function () {
    return view("main.frontend.index");
});
Route::get('user/index', function () {
    return view("main.frontend.index");
})->name('home');

Route::get('user/about', function () {
    return view("main.frontend.screens.about_school");
})->name('about');

Route::get('user/admission', function () {
    return view("main.frontend.screens.admission");
})->name('admission');

Route::get('user/contact', function () {
    return view("main.frontend.screens.contact_us");
})->name('contact');


// Contact Routes
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::resource('contacts',ContactsController::class);
// New and Events Front Controller
Route::get('news-and-events/news-and-events-detail/{slug}', [NewsEventsController::class, 'index'])->name('news-and-events-detail');
Route::get('news-and-events', [AllNewsAndEventsController::class, 'index'])->name('news-and-events');
Route::get('news-and-events-searches',[AllNewsAndEventsController::class, 'pressLiveSearch'])->name('news-and-events-searches');
Route::get('press-release',[AllPressReleasesController::class, 'index'])->name('press-release');
// Route::get('press-release-tag/{slug}',[AllNewsAndEventsController::class, 'tags'])->name('news-and-events-tag');
// Route::get('departments/news-and-events/{slug}',[AllNewsAndEventsController::class, 'NewsDetail'])->name('DptNewsEvents');


