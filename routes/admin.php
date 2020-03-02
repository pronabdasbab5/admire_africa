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

/** Admin Login Route */
Route::get('/admin/login', 'Admin\AdminLoginController@showAdminLoginForm')->name('admin.login');
Route::get('/register/admin', 'Admin\AdminRegisterController@showAdminRegisterForm')->name('admin.register');
Route::get('/admin/logout', 'Admin\AdminLoginController@logout')->name('admin.logout');

Route::post('/admin/login', 'Admin\AdminLoginController@adminLogin');
Route::post('/register/admin', 'Admin\AdminRegisterController@createAdmin');
/** End of Admin Login Route */

Route::group(['middleware'=>'auth:admin','prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('dashboard', 'AdminDashboardController@index')->name('admin.dashboard');

    Route::group(['namespace'=>'Category'],function(){

    	/** New Category Add Form **/
    	Route::get('new-category', 'CategoryController@showCategoryForm')->name('admin.new_category');
    	Route::put('add-category', 'CategoryController@addCategory')->name('admin.add_category');
    	Route::get('category-list', 'CategoryController@categoryList')->name('admin.category_list');
    	Route::get('category-status/{category_id}/{status}', 'CategoryController@changeCategoryStatus')->name('admin.category_status');
    	Route::get('edit-category/{category_id}', 'CategoryController@showEditCategoryForm')->name('admin.edit_category');
    	Route::post('update-category/{category_id}', 'CategoryController@updateCategory')->name('admin.update_category');
    });

    Route::group(['namespace'=>'Membership'],function(){

    	/** New Membership Add Form **/
    	Route::get('new-membership', 'MembershipController@showMembershipForm')->name('admin.new_membership');
    	Route::post('add-membership', 'MembershipController@addMembership')->name('admin.add_membership');
    	Route::get('membership-list', 'MembershipController@membershipList')->name('admin.membership_list');
    	Route::get('edit-membership/{membership_id}', 'MembershipController@showEditMembershipForm')->name('admin.edit_membership');
    	Route::post('update-membership/{membership_id}', 'MembershipController@updateMembership')->name('admin.update_membership');
    });
});
