<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\ProfileController;
use App\Models\SubCategory;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('User')->group(function(){

    Route::get('/dashboard',[UserController::class,'UserDashboard'])->name('dashboard');


});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




// Admin Authentication



Route::get('/admin/login',[AdminController::class,'AdminLoginForm']); 
//Route::post('/admin/login',[AdminController::class,'AdminLogin']); 




Route::middleware(['Admin'])->group(function () {
    
    Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard'); 
    Route::get('/admin/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');

    

    //admin profile
    Route::get('/admin/profile',[AdminController::class,'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile',[AdminController::class,'AdminProfileStore'])->name('admin.profile.store');






    //backend  brand  part

     Route::get('/add/brand',[BrandController::class,'addBrand'])->name('add.brand');
     Route::post('/store/brand',[BrandController::class,'StoreBrand'])->name('store.brand');
     Route::get('/all/brand',[BrandController::class,'allBrand'])->name('all.brand');




       //backend  category  part

     Route::get('/all/category',[CategoryController::class,'allCategory'])->name('category.all');
     Route::get('/add/category',[CategoryController::class,'addCategory'])->name('category.add');
     Route::post('/store/category',[CategoryController::class,'storeCategory'])->name('category.store');



       //backend  subcategory  part


Route::get('/all/subcategory',[SubCategoryController::class,'allSubCategory'])->name('all.subcategory');
Route::get('/add/subcategory',[SubCategoryController::class,'addSubCategory'])->name('add.subcategory');

Route::post('/store/subcategory',[SubCategoryController::class,'storeSubCategory'])->name('store.subcategory');


});

