<?php


use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MenuItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WishlistsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the 'web' middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/', [WebsiteController::class,'index'])->name('website.home');
Route::get('/menu/{slug?}', [WebsiteController::class,'menu'])->name('website.menu');
Route::get('/about-usa', [WebsiteController::class,'abouts'])->name('website.about');
Route::get('/contact', [WebsiteController::class,'contact'])->name('website.contact');
Route::get('/shop-details/{id}', [WebsiteController::class,'shopDeals'])->name('website.shopDetails');
Route::get('/cart-shop-details', [WebsiteController::class,'cartShopDeals'])->name('website.cartShopDetails');


//CartController
Route::get('add-to-cart/{id}', [CartController::class,'addToCart'])->name('addToCart');
Route::post('cart/single-add/{menuItem}',[CartController::class,'singleAddToCart'])->name('singleAddToCart');
Route::put('update-cart/{id}', [CartController::class,'updateCart'])->name('updateCart');
Route::delete('remove-from-cart/{id}', [CartController::class,'removeFromCart'])->name('removeFromCart');

//WishlistsController
Route::get('wishlist/count', [WishlistsController::class,'wishListCount'])->name('wishlist-count');
Route::delete('remove-wishlist/{id}', [WishlistsController::class,'removeWishlist'])->name('remove-wishlist');



Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');


//RestaurantController

//CategoryController

Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('/admin/categories/{id}', [CategoryController::class, 'show'])->name('admin.categories.show');
Route::get('/admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::put('/admin/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

//MenuItemController
Route::get('/admin/menuItems', [MenuItemController::class, 'index'])->name('admin.menuItems.index');
Route::get('/admin/menuItems/create', [MenuItemController::class, 'create'])->name('admin.menuItems.create');
Route::post('/admin/menuItems', [MenuItemController::class, 'store'])->name('admin.menuItems.store');
Route::get('/admin/menuItems/{id}', [MenuItemController::class, 'show'])->name('admin.menuItems.show');
Route::get('/admin/menuItems/{id}/edit', [MenuItemController::class, 'edit'])->name('admin.menuItems.edit');
Route::put('/admin/menuItems/{id}', [MenuItemController::class, 'update'])->name('admin.menuItems.update');
Route::delete('/admin/menuItems/{id}', [MenuItemController::class, 'destroy'])->name('admin.menuItems.destroy');

//AboutController
Route::get('/admin/about', [AboutController::class, 'index'])->name('admin.about.index');
Route::get('/admin/about/create', [AboutController::class, 'create'])->name('admin.about.create');
Route::post('/admin/about', [AboutController::class, 'store'])->name('admin.about.store');
Route::get('/admin/about/{about}', [AboutController::class, 'show'])->name('admin.about.show');
Route::get('/admin/about/{about}/edit', [AboutController::class, 'edit'])->name('admin.about.edit');
Route::put('/admin/about/{about}', [AboutController::class, 'update'])->name('admin.about.update');
Route::delete('/admin/about/{about}', [AboutController::class, 'destroy'])->name('admin.about.destroy');


//ContactController
Route::get('/admin/contact', [ContactController::class, 'index'])->name('admin.contact.index');
Route::get('/admin/contact/create', [ContactController::class, 'create'])->name('admin.contact.create');
Route::post('/admin/contact', [ContactController::class, 'store'])->name('admin.contact.store');
Route::get('/admin/contact/{contact}', [ContactController::class, 'show'])->name('admin.contact.show');
Route::get('/admin/contact/{contact}/edit', [ContactController::class, 'edit'])->name('admin.contact.edit');
Route::put('/admin/contact/{contact}', [ContactController::class, 'update'])->name('admin.contact.update');
Route::delete('/admin/contact/{contact}', [ContactController::class, 'destroy'])->name('admin.contact.destroy');

