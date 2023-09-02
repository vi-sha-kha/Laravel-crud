<?php

use App\Http\Controllers\AnotherController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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

//   Route::get('/create',[ProductController::class, 'create'])->name('crud.create');

// Route::get('/');

//   Route::post('products/store',[ProductController::class, 'store'])->name('products.store');

//   Route::get('products',[ ProductController::class, 'index'])->name('products.index');

//  Route::patch('products/edit', [ProductController::class, 'edit'])->name('products.edit');

// Route::delete('products/delete', [ProductController::class, 'destroy'])->name('products.index');

 //both put and get are updating successfully.. even patch is working

 //all of a sudden it stopped working... I made some changes which I dont remember though..







// Route::delete('/', [CrudController::class, 'destroy'])->name('crud.destroy');



   Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
 Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
 Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
  Route::get('/products', [ProductController::class, 'index'])->name('products.index');

 // Route::get('/crud', [CrudController::class, 'index'])->name('crud.index');

//   Route::get('/crud/create', [CrudController::class, 'create'])->name('crud.create');
// Route::get('/crud/{crud}', [CrudController::class, 'show'])->name('crud.show');

// Route::post('/crud', [CrudController::class, 'store'])->name('crud.store');
// Route::get('/crud/{crud}/edit', [CrudController::class, 'edit'])->name('crud.edit');
//  Route::patch('/crud/{crud}', [CrudController::class, 'update'])->name('crud.update');
// Route::delete('/crud/{crud}', [CrudController::class, 'destroy'])->name('crud.destroy');

//  Route::post('/edit',[ CrudController::class, 'store'])->name('crud.edit');

//Route::resource('products', ProductController::class);

// Route::get('test', function () {
//     $products = Product::find(12);

//     if(! $products){
//         return "Product not found";
//     }

    // else{
    //     $products->update([
    //     'name' => 'Vishakha'
    // ]);
    //  return $products;

    // }

//     else{
//            $products->delete();

//            return "Deleted";

//     }
// });

  //Route::resource('crud', CrudController::class);


//  Route::resource('another', AnotherController::class);


