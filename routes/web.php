<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;

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
function set_active($route) {
    if( is_array( $route ) ){
        return in_array(Request::path(), $route) ? 'hover show' : '';
    }
    return Request::path() == $route ? 'hover show' : '';
}
function set_active1($route) {
    if( is_array( $route ) ){
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

Artisan::call('cache:clear');
Artisan::call('view:clear');
Artisan::call('route:clear');
Artisan::call('config:clear');

require __DIR__ .'/cms_web.php';
Route::middleware(['visitingcounter'])->group(function () {
    Route::get('/set-language',[HomeController::class,'SetLang']);
    /** Below the URL set login on home */
    Route::get('/', [HomeController::class, 'index'])->name('/');
    Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
    Route::get('feedback', [HomeController::class, 'feedbackDataSave'])->name('feedback');
    Route::get('register-for-ncnc', [HomeController::class, 'RegisterForNCNC'])->name('register-for-ncnc');
    Route::get('/{slug}', [HomeController::class, 'getAllPageContent']);

});
//default behaviour, always keep as last entry
Route::any('{url}', function(){
    return redirect('/');
})->where('url', '.*');

