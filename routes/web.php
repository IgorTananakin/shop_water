<?php
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/* Маршруты для задач */
Route::get('/', 'SiteController@index');
// Route::get('/', function(){
//     return view('catalog');
//   });
// Route::get('/catalog','CartController@addToCart');

Route::get('/company', 'SiteController@company');

Route::get('/contact', 'SiteController@contact');
// Route::get('/contact', 'SiteController@contact',function(){
//     return view('contact');
// });
Route::get('/cart', 'CartController@index')->name('cartIndex');
Route::get('/add-to-cart', 'CartController@addToCart')->name('addToCart');


Route::get('ajax',function(){
    return view('message');
  });
  Route::get('/getmsg','AjaxController@index');




// Route::post('/contact/submit','SiteController@submit')
// ->name('contact-form');

Route::post('/send_form', 'SiteController@send_form');
// Route::post('send-mail', 'MailSetting@send_form');
// Route::get('/send','SiteController@send');

Route::get('/contact/all','SiteController@allProduct')->name('product-data');

//для регистрации


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();




Route::middleware(['role:admin'])->prefix('admin_panel')->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('category',Admin\CategoryController::class);
    Route::resource('product',Admin\ProductController::class);
});


// Корзина new
Route::get('/basket/index', 'BasketController@index')->name('basket.index');
Route::get('/basket/checkout', 'BasketController@checkout')->name('basket.checkout');
Route::post('/basket/add/{id}', 'BasketController@add')
    ->where('id', '[0-9]+')
    ->name('basket.add');