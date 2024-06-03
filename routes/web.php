<?php



use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MenuItemController;
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
Route::get('/menu', [WebsiteController::class,'menu'])->name('website.menu');
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
Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard.index');

//RestaurantController

//CategoryController

Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('admin.categories.show');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

//MenuItemController
Route::get('/menuItems', [MenuItemController::class, 'index'])->name('admin.menuItems.index');
Route::get('/menuItems/create', [MenuItemController::class, 'create'])->name('admin.menuItems.create');
Route::post('/menuItems', [MenuItemController::class, 'store'])->name('admin.menuItems.store');
Route::get('/menuItems/{id}', [MenuItemController::class, 'show'])->name('admin.menuItems.show');
Route::get('/menuItems/{id}/edit', [MenuItemController::class, 'edit'])->name('admin.menuItems.edit');
Route::put('/menuItems/{id}', [MenuItemController::class, 'update'])->name('admin.menuItems.update');
Route::delete('/menuItems/{id}', [MenuItemController::class, 'destroy'])->name('admin.menuItems.destroy');




