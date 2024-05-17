<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Vite;
use App\Http\Controllers\CrudCustomerUsersController;
use App\Models\CustomerUser;

Route::get('/', function () {
    return view('welcome');
});

Route::get('header', function () {
    return view('header');
});

Route::get('home', function () {
    return view('auth.home');
});


Route::get('Login', [CrudCustomerUsersController::class, 'viewLogin'])->name('viewLogin');
Route::post('Login', [CrudCustomerUsersController::class, 'login'])->name('login');
Route::get('Register', [CrudCustomerUsersController::class, 'viewRegister'])->name('viewRegister');
Route::post('Register', [CrudCustomerUsersController::class, 'formRegister'])->name('formRegister');

Route::get('resetPassword1', [CrudCustomerUsersController::class, 'viewResetPassword1'])->name('viewResetPassword1');
Route::post('resetPassword1', [CrudCustomerUsersController::class, 'formResetPassword1'])->name('formResetPassword1');


Route::get('resetPassword2', [CrudCustomerUsersController::class, 'viewResetPassword2'])->name('viewResetPassword2');
Route::post('resetPassword2', [CrudCustomerUsersController::class, 'formResetPassword2'])->name('formResetPassword2');

Route::get('resetPassword3', [CrudCustomerUsersController::class, 'viewResetPassword3'])->name('viewResetPassword3');
Route::post('resetPassword3', [CrudCustomerUsersController::class, 'formResetPassword3'])->name('formResetPassword3');


Route::match(['get', 'post'], 'sellerCus', [CrudCustomerUsersController::class, 'sellerCus'])->name('user.sellerCus');
Route::match(['get', 'post'], 'seller', [CrudCustomerUsersController::class, 'viewSeller'])->name('seller.viewSeller');
// Route::post('seller', [CrudCustomerUsersController::class, 'arrangeProduct'])->name('seller.arrangeProduct');

Route::post('deleteProduct', [CrudCustomerUsersController::class, 'deleteProduct'])->name('seller.deleteProduct');

Route::get('updateProduct', [CrudCustomerUsersController::class, 'viewUpdateProduct'])->name('seller.viewUpdateProduct');
Route::post('updateProduct', [CrudCustomerUsersController::class, 'updateProduct'])->name('seller.updateProduct');

Route::get('product', [CrudCustomerUsersController::class, 'viewAddProduct'])->name('seller.viewAddProduct');
Route::post('product', [CrudCustomerUsersController::class, 'addProduct'])->name('seller.addProduct');
Route::get('product_detail', [CrudCustomerUsersController::class, 'viewDetailProduct'])->name('seller.viewDetailProduct');

Route::get('viewProductCate', [CrudCustomerUsersController::class, 'viewProductCate'])->name('user.viewProductCate');
Route::get('viewProductPage', [CrudCustomerUsersController::class, 'viewProductPage'])->name('user.viewProductPage');
Route::match(['get', 'post'], 'product_detailIndexCustomerUser', [CrudCustomerUsersController::class, 'viewDetailProductIndexCusTomerUser'])->name('user.detailIndexCustomerUser');
Route::post('arrangeIndexUserCustomer', [CrudCustomerUsersController::class, 'arrangeIndexUserCustomer'])->name('user.arrangeIndexUserCustomer');

Route::post('searchProduct', [CrudCustomerUsersController::class, 'searchProduct'])->name('user.searchProduct');
Route::post('comment', [CrudCustomerUsersController::class, 'formComment'])->name('user.formComment');
Route::get('account/profile', [CrudCustomerUsersController::class, 'viewUserProfile'])->name('user.viewUserProfile');
Route::post('account/profile', [CrudCustomerUsersController::class, 'updateUserProfile'])->name('user.UpdateUserProfile');
//
Route::get('adminUserCustomer', [CrudCustomerUsersController::class, 'viewAdminUserCustomer'])->name('admin.viewAdminUserCustomer');
Route::get('adminSeller', [CrudCustomerUsersController::class, 'viewAdminSeller'])->name('admin.viewAdminSeller');

Route::get('deleteAdminSeller', [CrudCustomerUsersController::class, 'deleteAdminSeller'])->name('admin.deleteAdminSeller');
Route::get('deleteAdminCustomerUser', [CrudCustomerUsersController::class, 'deleteAdminCustomerUser'])->name('admin.deleteAdminCustomerUser');

Route::get('addAdminCustomerUser', [CrudCustomerUsersController::class, 'viewAddAdminCustomerUser'])->name('admin.viewAddAdminCustomerUser');
Route::post('addAdminCustomerUser', [CrudCustomerUsersController::class, 'formAddAdminCustomerUser'])->name('admin.formAddAdminCustomerUser');

Route::get('addAdminSeller', [CrudCustomerUsersController::class, 'viewAddAdminSeller'])->name('admin.viewAddAdminSeller');
Route::post('addAdminSeller', [CrudCustomerUsersController::class, 'formAddAdminSeller'])->name('admin.formAddAdminSeller');

Route::get('updateAdminCustomerUser', [CrudCustomerUsersController::class, 'viewUpdateAdminCustomerUser'])->name('admin.viewUpdateAdminCustomerUser');
Route::post('updateAdminCustomerUser', [CrudCustomerUsersController::class, 'formUpdateAdminCustomerUser'])->name('admin.formUpdateAdminCustomerUser');

Route::get('adminSellerDetail', [CrudCustomerUsersController::class, 'adminSellerDetail'])->name('admin.adminSellerDetail');


Route::get('updateAdminSeller', [CrudCustomerUsersController::class, 'viewUpdateAdminSeller'])->name('admin.viewUpdateAdminSeller');
Route::post('updateAdminSeller', [CrudCustomerUsersController::class, 'formUpdateAdminSeller'])->name('admin.formUpdateAdminSeller');

//
Route::get('account/adminProfile', [CrudCustomerUsersController::class, 'viewAdminProfile'])->name('admin.viewAdminProfile');
Route::post('account/adminProfile', [CrudCustomerUsersController::class, 'updateAdminProfile'])->name('admin.UpdateAdminProfile');

Route::get('account/sellerProfile', [CrudCustomerUsersController::class, 'viewSellerProfile'])->name('seller.viewSellerProfile');
Route::post('account/sellerProfile', [CrudCustomerUsersController::class, 'updateSellerProfile'])->name('seller.UpdateSellerProfile');

Route::get('returnHome', [CrudCustomerUsersController::class, 'returnHome'])->name('returnHome');
Route::get('signout', [CrudCustomerUsersController::class, 'signOut'])->name('signOut');

Route::post('createCart', [CrudCustomerUsersController::class, 'createCart'])->name('user.createCart');
Route::get('viewCart', [CrudCustomerUsersController::class, 'viewCart'])->name('user.viewCart');
Route::get('viewCartInHeader', [CrudCustomerUsersController::class, 'viewCartInHeader'])->name('user.viewCartInHeader');
Route::get('plusProductCart', [CrudCustomerUsersController::class, 'plusProductCart'])->name('user.plusProductCart');
Route::get('subProductCart', [CrudCustomerUsersController::class, 'subProductCart'])->name('user.subProductCart');


Route::get('deleteCart', [CrudCustomerUsersController::class, 'deleteCart'])->name('user.deleteCart');


Route::post('purchaseInProductDetail', [CrudCustomerUsersController::class, 'purchaseInProductDetail'])->name('user.purchaseInProductDetail');
Route::post('purchaseInCart', [CrudCustomerUsersController::class, 'purchaseInCart'])->name('user.purchaseInCart');
Route::post('mailPurchase', [CrudCustomerUsersController::class, 'mailPurchase'])->name('user.mailPurchase');
Route::post('mailPurchaseProductDetail', [CrudCustomerUsersController::class, 'mailPurchaseProductDetail'])->name('user.mailPurchaseProductDetail');

Route::get('auth/google', [CrudCustomerUsersController::class, 'redirectToGoogle'])->name('login-by-google');
Route::get('auth/google/callback', [CrudCustomerUsersController::class, 'handleGoogleCallback']);

Route::get('update', function () {
    return view('auth.update');
});

Route::get('cart', function () {
    return view('auth.cart');
});

Route::get('payment', function () {
    return view('auth.payment');
});

Route::get('header_cart', function () {
    return view('header_cart');
});


Route::get('account/password', function () {
    return view('auth.account.password');
});

