<?php

use App\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\UserController;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\Input;

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
Route::get('/', function () {
    $products = App\Product::paginate(4);
    $categories = App\ProductCategory::all();
    $blogs = App\Blog::paginate(3);
    
    return view('index', ["categories"=>$categories,
        "products"=>$products,
        "blogs"=>$blogs

    ]);
})->name('searchindex');

Route::get('/index', function () {
    
    $products = App\Product::paginate(4);
    $categories = App\ProductCategory::all();
    $blogs = App\Blog::paginate(3);
    
    return view('index', ["categories"=>$categories,
        "products"=>$products,
        "blogs"=>$blogs

    ]);
})->name('searchindex');

Route::get('/shop', function () {
    
    $products = App\Product::paginate(3);
    $categories = App\ProductCategory::all();
    
    return view('shop', ["categories"=>$categories,
    "products"=>$products
    ]);
});
Route::get('/product','ProductController@takedata');

Route::get('/contact-us', function () {
    return view('contact-us');
});



Route::get('/blog', function () {
    $blogs = App\Blog::paginate(20);

    return view('blog',["blogs"=>$blogs]);
});
Route::get('/blog-details', 'BlogController@datablog');

Route::get('/searchproduct', 'ProductController@searchindex')->name('searchindex');
    
Route::get('cart','ProductController@cart')->name('cart');
Route::get('cart/{id}','ProductController@addToCart')->name('add.to.cart');
Route::post('cart/{id}','ProductController@addToCart')->name('add.to.cart');

Route::get('update-cart', 'ProductController@update')->name('update.cart');
Route::get('remove-from-cart','ProductController@remove')->name('remove.from.cart');



Auth::routes();



Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/admin', 'HomeController@index')->name('home')->middleware('auth');
    
    Route::resources([
        'users' => 'UserController',
        'providers' => 'ProviderController',
        'inventory/products' => 'ProductController',
        'clients' => 'ClientController',
        'inventory/categories' => 'ProductCategoryController',
        'transactions/transfer' => 'TransferController',
        'methods' => 'MethodController',
        'inventory/blog' => 'BlogController',
    ]);

    Route::get('/inventory/search', 'ProductController@search')->name('search');

    
    Route::resource('transactions', 'TransactionController')->except(['create', 'show']);
    Route::get('transactions/stats/{year?}/{month?}/{day?}', ['as' => 'transactions.stats', 'uses' => 'TransactionController@stats']);
    Route::get('transactions/{type}', ['as' => 'transactions.type', 'uses' => 'TransactionController@type']);
    Route::get('transactions/{type}/create', ['as' => 'transactions.create', 'uses' => 'TransactionController@create']);
    Route::get('transactions/{transaction}/edit', ['as' => 'transactions.edit', 'uses' => 'TransactionController@edit']);

    Route::resource('admin/blog', BlogController::class)->except(['create', 'update','show']);
    Route::get('admin/blog/{blog}/create', ['as' => 'inventory.blog.create', 'uses' => 'BlogController@create'])->name('blog.create');
    Route::post('admin/blog/{blog}', ['as' => 'inventory.blog.store', 'uses' => 'BlogController@store'])->name('blog.store');
    Route::post('admin/blog/{blog}', ['as' => 'inventory.blog.delete', 'uses' => 'BlogController@delete'])->name('blog.store');

    Route::get('/admin/blog/{blog}/edit', ['as' => 'blog.edit','uses' => 'BlogController@edit'])->name('blog.edit');

    Route::get('inventory/stats/{year?}/{month?}/{day?}', ['as' => 'inventory.stats', 'uses' => 'InventoryController@stats']);
    Route::resource('inventory/receipts', 'ReceiptController')->except(['edit', 'update']);
    Route::get('inventory/receipts/{receipt}/finalize', ['as' => 'receipts.finalize', 'uses' => 'ReceiptController@finalize']);
    Route::get('inventory/receipts/{receipt}/product/add', ['as' => 'receipts.product.add', 'uses' => 'ReceiptController@addproduct']);
    Route::get('inventory/receipts/{receipt}/product/{receivedproduct}/edit', ['as' => 'receipts.product.edit', 'uses' => 'ReceiptController@editproduct']);
    Route::post('inventory/receipts/{receipt}/product', ['as' => 'receipts.product.store', 'uses' => 'ReceiptController@storeproduct']);
    Route::match(['put', 'patch'], 'inventory/receipts/{receipt}/product/{receivedproduct}', ['as' => 'receipts.product.update', 'uses' => 'ReceiptController@updateproduct']);
    Route::delete('inventory/receipts/{receipt}/product/{receivedproduct}', ['as' => 'receipts.product.destroy', 'uses' => 'ReceiptController@destroyproduct']);

    
    Route::resource('sales', 'SaleController')->except(['edit', 'update']);
    Route::get('sales/{sale}/finalize', ['as' => 'sales.finalize', 'uses' => 'SaleController@finalize']);
    Route::get('sales/{sale}/product/add', ['as' => 'sales.product.add', 'uses' => 'SaleController@addproduct']);
    Route::get('sales/{sale}/product/{soldproduct}/edit', ['as' => 'sales.product.edit', 'uses' => 'SaleController@editproduct']);
    Route::post('sales/{sale}/product', ['as' => 'sales.product.store', 'uses' => 'SaleController@storeproduct']);
    Route::match(['put', 'patch'], 'sales/{sale}/product/{soldproduct}', ['as' => 'sales.product.update', 'uses' => 'SaleController@updateproduct']);
    Route::delete('sales/{sale}/product/{soldproduct}', ['as' => 'sales.product.destroy', 'uses' => 'SaleController@destroyproduct']);

    Route::get('clients/{client}/transactions/add', ['as' => 'clients.transactions.add', 'uses' => 'ClientController@addtransaction']);

    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::match(['put', 'patch'], 'profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::match(['put', 'patch'], 'profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


