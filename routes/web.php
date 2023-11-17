

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\formController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuctionController;
use Illuminate\Support\Facades\Auth;





Route::get('/', function () {
    return view('home');
});



Route::post('/store', [HomeController::class, 'store'])->name('store');
Route::get('/contact/create', function () {
    return view('/contact/create');
});
Route::get('/contact/indexco', function () {
    return view('/contact/indexco');
});

Route::get('/auth/login', function () {
    return view('auth/login');
});
Route::get('/auth/register', function () {
    return view('auth/register');
});
Route::get('/form/create', function () {
    return view('form/create');
});
Route::get('/form/index', function () {
    return view('form/index');
});
Route::get('/form/show', function () {
    return view('/form/show');
});
Route::get('/form/indexAdmin', function () {
    return view('/form/indexAdmin');
});

Route::get('/form/edit', function () {
    return view('form/edit');
});
Route::get('/form/search-result', function () {
    return view('form/search-result');
});
Route::get('/form/showpdf', function () {
    return view('form/showpdf');
});
Route::get('/auction/index', function () {
    return view('auction/index');
});

Route::get('/auction/create', function () {
    return view('auction/create');
});
Route::get('/auction/show', function () {
    return view('auction/show');
});
Route::get('/auction/edit', function () {
    return view('auction/edit');
});

Route::post('logout', [HomeController::class, 'logout'])->name('logout');
Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('register', [HomeController::class, 'register'])->name('register');




Route::resource('/form', formController::class);


Route::post('storeFiles', [formController::class, 'storeFiles'])->name('storeFiles');
Route::get('/form/index', [formController::class, 'index'])->name('index');
Route::get('/form/indexAdmin', [formController::class, 'indexAdmin'])->name('indexAdmin');
Route::get('/form/create', [formController::class, 'create'])->name('form.create');
Route::get('/update', [formController::class, 'update'])->name('form.update');
Route::get('/form/search-result', [formController::class, 'resultserch'])->name('form.search-result');
Route::get('/status/update', [formController::class, 'updateStatus'])->name('update.status');
Route::get('/showpdf/{id}', [formController::class,'showpdf'])->name('form.showpdf');


Route::resource('/auction', AuctionController::class);

Route::post('storeauction', [AuctionController::class, 'storeauction'])->name('storeauction');
Route::get('/auction/index', [AuctionController::class, 'index'])->name('auction.index');
Route::get('/auction/create', [AuctionController::class, 'create'])->name('auction.create');
Route::get('/update', [AuctionController::class, 'update'])->name('auction.update');
Route::get('/auction/show', [AuctionController::class, 'show'])->name('auction.show');






Route::get('/show', [App\Http\Controllers\formController::class, 'show'])->name('show');

Route::get('/printQrcode/{id}', [formController::class, 'printQrcode'])->name('printQrcode');

Route::resource('form', formController::class);

Route::get('/search', [formController::class, 'search'])->name('users.search');
Route::get('/searchall', [formController::class, 'searchall'])->name('users.searchall');
Route::get('/exportExcel',[formController::class,'exportExcel'])->name('exportExcel');
Route::get('/update', [formController::class, 'update'])->name('update');

Route::get('generate/{id}', [formController::class, 'generate'])->name('generate');

Route::get('contact', [ContactController::class, 'index']);
Route::get('destroy', [ContactController::class, 'destroy']);

Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');
