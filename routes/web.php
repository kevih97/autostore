<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CarsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('search', [WelcomeController::class, 'search']);


Route::get('/shopping-basket', [CarsController::class, 'carBasket'])->name('shopping.basket');
Route::get('/cars/{id}', [CarsController::class, 'addCarToBasket'])->name('addcar.to.basket');
Route::patch('/update-shopping-basket', [CarsController::class, 'updateBasket'])->name('update.shopping.basket');
Route::delete('/delete-basket-car', [CarsController::class, 'deleteCar'])->name('delete.basket.car');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/checkout', [ProfileController::class, 'checkout'])->name('checkout.index');
});



Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/admin/dashboard', function () { return view('admin.dashboard'); })->name('admin.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/admin/cars', CarsController::class);
    Route::resource('/admin/categories', CategoriesController::class);

});


require __DIR__.'/adminauth.php';
require __DIR__.'/auth.php';
