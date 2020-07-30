<?php

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

Route::get('/', 'Frontend\PageController@index')->name('pages.index');


Route::get('/ajax_upload', 'Frontend\PageController@index');

Route::post('/ajax_upload/action', 'Frontend\PageController@action')->name('ajaxupload.action');
// Route::get('/', 'Frontend\PageController@index')->name('pages.index');
Route::get('/wallpapers', 'Frontend\PageController@wallpaper')->name('pages.wallpapers');
Route::get('/carpets', 'Frontend\PageController@carpet')->name('pages.carpets');
Route::get('/fabrics', 'Frontend\PageController@fabrics')->name('pages.fabrics');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return redirect(route("admin.login"));
    });
    Route::get('login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminAuth\LoginController@login')->name('admin.login');
    Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('admin.password.update');
    Route::get('password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('logout', 'AdminAuth\LoginController@logout')->name('admin.logout');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', 'Admin\PageController@index')->name('admin.pages.home');
    // Categories
    Route::resource('/categories', 'Admin\CategoriesController');
    Route::get('/category/image-delete/{id}', 'Admin\CategoriesController@delete')->name('category.delete');

    // Image Utility
    Route::get('/image-gallery/selected', 'Admin\ImagesController@selectedImage')->name('image-gallery.selected');
    Route::get('/image-gallery/image/deselect', 'Admin\ImagesController@deselectImage')->name('image-gallery.deselect');
    Route::get('/pagination/fetch-data', 'Admin\ImagesController@fetchData')->name('pagination.fetch-data');
    Route::post('/upload-image', 'Admin\ImagesController@upload')->name('images.upload');
    Route::post('/delete-image', 'Admin\ImagesController@delete')->name('images.delete');

    // Types
    Route::resource('types', 'Admin\TypesController');
    Route::get('posts/create/{slug}', 'Admin\PostsController@create')->name('posts.create');
    Route::get('posts/{slug}', 'Admin\PostsController@index')->name('posts.index');
    Route::post('posts/{slug}', 'Admin\PostsController@store')->name('posts.store');
    Route::get('posts/{slug}/{id}/edit', 'Admin\PostsController@edit')->name('posts.edit');
    Route::put('posts/{slug}/{id}', 'Admin\PostsController@update')->name('posts.update');
    Route::delete('posts/{slug}/{id}', 'Admin\PostsController@destroy')->name('posts.destroy');
    Route::get('/types/image-delete/{id}/{postId}/{image}', 'Admin\PostsController@delete')->name('type.delete');

    // Contact Inquiries
    Route::get('/general-settings/create', "Admin\GeneralSettingController@create")->name("general-settings.create");
    Route::post('/general-settings', "Admin\GeneralSettingController@store")->name("general-settings.store");
    Route::get('/general-settings/edit', "Admin\GeneralSettingController@edit")->name("general-settings.edit");
    Route::put('/general-settings', "Admin\GeneralSettingController@update")->name("general-settings.update");
    Route::resource('contact-enquiries', 'Admin\ContactEnquiryController');

    Route::get('/change-password', 'AdminAuth\ChangePasswordController@changePassword')->name('admin.change-password.edit');
    Route::put('/change-password', 'AdminAuth\ChangePasswordController@updatePassword')->name('admin.change-password.update');
});

Route::get('/create-symlink', function () {
    $projectFolder = base_path() . '/../';
    // The file that you want to create a symlink of
    $source = $projectFolder . "/3jcRCPACuQtF5aKa/storage/app/public";
    // The path where you want to create the symlink of the above
    $destination = $projectFolder . "/storage";

    if (file_exists($destination)) {
        if (is_link($destination)) {
            return "<h1>Symlink already exists</h1>";
        }
    } else {
        symlink($source, $destination);
        return "<h1>Symlink created successfully</h1>";
    }
});

Route::get('/remove-symlink', function () {
    $projectFolder = base_path() . '/../';
    $destination = $projectFolder . "/storage";
    if (file_exists($destination)) {
        if (is_link($destination)) {
            unlink($destination);
            return "<h1>Removed symlink</h1>";
        }
    } else {
        return "<h1>Symlink does not exist</h1>";
    }
});
