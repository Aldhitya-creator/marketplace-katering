<?php
use App\Http\Controllers\Admin\MerchantController;
use App\Http\Controllers\Admin\MenuController;
use Illuminate\Support\Facades\Route;

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
Route::get('/admin/merchants', [MerchantController::class,'index'])->name('admin.merchants.index');
Route::get('/admin/merchants/show', [MerchantController::class, 'show'])->name('admin.merchants.show');
Route::get('admin/merchants/create', [MerchantController::class,'create'])->name('admin.merchants.create');
Route::post('admin/merchants', [MerchantController::class,'store'])->name('admin.merchants.store');
Route::get('admin/merchants/{merchant}/edit/', [MerchantController::class,'edit'])->name('admin.merchants.edit');
Route::put('admin/merchants/{merchant}', [MerchantController::class,'update'])->name('admin.merchants.update');
Route::delete('admin/merchants/{merchant}', [MerchantController::class,'destroy'])->name('admin.merchants.destroy');

Route::get('/admin/menus', [MenuController::class,'index'])->name('admin.menus.index');
Route::get('/admin/menus/show', [MenuController::class, 'show'])->name('admin.menus.show');
Route::get('admin/menus/create', [MenuController::class,'create'])->name('admin.menus.create');
Route::post('admin/menus', [MenuController::class,'store'])->name('admin.menus.store');
Route::get('admin/menus/{menu}/edit/', [MenuController::class,'edit'])->name('admin.menus.edit');
Route::put('admin/menus/{menu}', [MenuController::class,'update'])->name('admin.menus.update');
Route::delete('admin/menus/{menu}', [MenuController::class,'destroy'])->name('admin.menus.destroy');

Route::get('/admin/invoices', [\App\http\Controllers\Admin\InvoicesController::class,'index'])->name('admin.invoices.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [\App\http\Controllers\User\HomepageController::class,'index'])->name('homepage');
Route::get('daftar-makanan', [\App\http\Controllers\User\MenuController::class,'index'])->name('menu.index');
Route::get('daftar-makanan/{menu}/order', [\App\http\Controllers\User\InvoiceController::class,'create'])->name('user.invoice.create');
Route::post('daftar-makanan', [\App\http\Controllers\User\InvoiceController::class,'store'])->name('user.invoice.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
