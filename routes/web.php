<?php


use App\Http\Controllers\admin\CartItemController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MenuItemController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\RestaurantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\OrderItemController;
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

Route::get('/', function () {
    return view('welcome');
});





Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//DashboardController
Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard.index');

//RestaurantController
//Route::resource('restaurants', RestaurantController::class);

Route::get('/restaurant', [RestaurantController::class, 'index'])->name('admin.restaurant.index');
Route::get('/restaurant/create', [RestaurantController::class, 'create'])->name('admin.restaurant.create');
Route::post('/restaurant/create', [RestaurantController::class, 'store'])->name('admin.restaurant.store');
Route::get('/restaurant/{id}', [RestaurantController::class, 'show'])->name('admin.restaurant.show');
Route::get('/restaurant/{id}/edit', [RestaurantController::class, 'edit'])->name('admin.restaurant.edit');
Route::put('/restaurant/{id}', [RestaurantController::class, 'update'])->name('admin.restaurant.update');
Route::delete('/restaurant/{id}', [RestaurantController::class, 'destroy'])->name('admin.restaurant.destroy');


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


//CustomerController
Route::get('/customers', [CustomerController::class, 'index'])->name('admin.customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('admin.customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('admin.customers.store');
Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('admin.customers.show');
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('admin.customers.edit');
Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('admin.customers.update');
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('admin.customers.destroy');


//OrderController
Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders.index');
Route::get('/orders/create', [OrderController::class, 'create'])->name('admin.orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('admin.orders.store');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('admin.orders.show');
Route::get('/orders/{id}/edit', [OrderController::class, 'edit'])->name('admin.orders.edit');
Route::put('/orders/{id}', [OrderController::class, 'update'])->name('admin.orders.update');
Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');

// OrderItemManagementController
Route::get('/orderItems', [OrderItemController::class, 'index'])->name('admin.orderItems.index');
Route::get('/orderItems/create', [OrderItemController::class, 'create'])->name('admin.orderItems.create');
Route::post('/orderItems', [OrderItemController::class, 'store'])->name('admin.orderItems.store');
Route::get('/orderItems/{id}', [OrderItemController::class, 'show'])->name('admin.orderItems.show');
Route::get('/orderItems/{id}/edit', [OrderItemController::class, 'edit'])->name('admin.orderItems.edit');
Route::put('/orderItems/{id}', [OrderItemController::class, 'update'])->name('admin.orderItems.update');
Route::delete('/orderItems/{id}', [OrderItemController::class, 'destroy'])->name('admin.orderItems.destroy');

//CartItemController
Route::get('/cartItems', [CartItemController::class, 'index'])->name('admin.cartItems.index');
Route::get('/cartItems/create', [CartItemController::class, 'create'])->name('admin.cartItems.create');
Route::post('/cartItems', [CartItemController::class, 'store'])->name('admin.cartItems.store');
Route::get('/cartItems/{id}', [CartItemController::class, 'show'])->name('admin.cartItems.show');
Route::get('/cartItems/{id}/edit', [CartItemController::class, 'edit'])->name('admin.cartItems.edit');
Route::put('/cartItems/{id}', [CartItemController::class, 'update'])->name('admin.cartItems.update');
Route::delete('/cartItems/{id}', [CartItemController::class, 'destroy'])->name('admin.cartItems.destroy');
