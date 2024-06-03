<?php



use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
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
Route::get('/about', [WebsiteController::class,'about'])->name('website.about');
Route::get('/book-table', [WebsiteController::class,'bookTable'])->name('website.bookTable.blade.php');
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

//DashboardController
Route::get('/dashboard',[DashboardController::class,'index'])->name('Admin.dashboard.index');

//RestaurantController

//CategoryController

Route::get('/categories', [CategoryController::class, 'index'])->name('Admin.categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('Admin.categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('Admin.categories.store');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('Admin.categories.show');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('Admin.categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('Admin.categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('Admin.categories.destroy');

//MenuItemController
Route::get('/menuItems', [MenuItemController::class, 'index'])->name('Admin.menuItems.index');
Route::get('/menuItems/create', [MenuItemController::class, 'create'])->name('Admin.menuItems.create');
Route::post('/menuItems', [MenuItemController::class, 'store'])->name('Admin.menuItems.store');
Route::get('/menuItems/{id}', [MenuItemController::class, 'show'])->name('Admin.menuItems.show');
Route::get('/menuItems/{id}/edit', [MenuItemController::class, 'edit'])->name('Admin.menuItems.edit');
Route::put('/menuItems/{id}', [MenuItemController::class, 'update'])->name('Admin.menuItems.update');
Route::delete('/menuItems/{id}', [MenuItemController::class, 'destroy'])->name('Admin.menuItems.destroy');




