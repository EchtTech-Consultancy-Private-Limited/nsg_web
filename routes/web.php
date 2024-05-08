<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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
    Route::get('set-language',[HomeController::class,'SetLang']);
    /** Below the URL set login on home */
    Route::get('/', [HomeController::class, 'index'])->name('/');
    Route::get('/search', [SearchController::class, 'getSearchData'])->name('search');
    Route::get('/mfdpap/{slug}', [HomeController::class, 'getMessagefromDirectorPastandPresentPageContent'])->name('mfdpap/{slug}');
    Route::get('/tender/{slug}', [HomeController::class, 'getTenderData'])->name('tender/{slug}');
    Route::get('/archive-tender/{slug}', [HomeController::class, 'getArchiveTenderData'])->name('archive-tender/{slug}');
    Route::get('news-list', [HomeController::class, 'newsList'])->name('news-list');
    Route::get('contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
    Route::get('feedback', [HomeController::class, 'feedbackDataSave'])->name('feedback');
    Route::post('feedback-save', [HomeController::class, 'feedbackDataStore'])->name('feedback-save');
    Route::get('sitemap', [HomeController::class, 'siteMapList'])->name('sitemap');
    Route::get('screen-reader-access', [HomeController::class, 'screenreaderaccess'])->name('screen-reader-access');
    Route::get('veer-gatha', [HomeController::class, 'veerGatha'])->name('veer-gatha');
    Route::get('about-us/organization-structure', [HomeController::class, 'organizationChart'])->name('about-us/organization-structure');
    Route::get('gallery/photo-gallery', [HomeController::class, 'photoGallery'])->name('gallery/photo-gallery');
    Route::get('register-for-ncnc', [HomeController::class, 'RegisterForNCNC'])->name('register-for-ncnc');
    Route::post('register-for-ncnc-save', [HomeController::class, 'RegisterForNCNCStore'])->name('register-for-ncnc-save');
    Route::get('/{slug1}/{slug2?}/{slug3?}', [HomeController::class, 'getAllPageContent']);

});
//default behaviour, always keep as last entry
Route::any('{url}', function(){
    return redirect('/');
})->where('url', '.*');

