<?php

use App\Http\Controllers\AkartPicturesController;
use App\Http\Controllers\AkartRecordsController;

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

Route::get('/', function () {
    return view('base');
});

Route::get('/akartrecords', [AkartRecordsController::class, 'index'])->name('akartrecords');
Route::get('/akartrecords/project', [AkartRecordsController::class, 'project'])->name('akartrecords.project');
Route::get('/akartrecords/project/compose', [AkartRecordsController::class, 'compose'])->name('akartrecords.compose');
Route::get('/akartrecords/project/arrange', [AkartRecordsController::class, 'arrange'])->name('akartrecords.arrange');
Route::get('/akartrecords/project/record', [AkartRecordsController::class, 'record'])->name('akartrecords.record');
Route::get('/akartrecords/project/mixing', [AkartRecordsController::class, 'mixing'])->name('akartrecords.mixing');
Route::get('/akartrecords/project/mastering', [AkartRecordsController::class, 'mastering'])->name('akartrecords.mastering');


Route::get('/akartpictures', [AkartPicturesController::class, 'index'])->name('akartpictures');
Route::get('/akartpictures/project', [AkartPicturesController::class, 'project'])->name('akartpictures.project');
Route::get('/akartpictures/pricelist', [AkartPicturesController::class, 'pricelist'])->name('akartpictures.pricelist');
Route::get('/akartpictures/testimonials', [AkartPicturesController::class, 'testimonials'])->name('akartpictures.testimonials');
Route::get('/akartpictures/project/event', [AkartPicturesController::class, 'event'])->name('akartpictures.event');
Route::get('/akartpictures/project/product', [AkartPicturesController::class, 'product'])->name('akartpictures.product');
Route::get('/akartpictures/project/models', [AkartPicturesController::class, 'models'])->name('akartpictures.models');
Route::get('/akartpictures/project/prewed', [AkartPicturesController::class, 'prewed'])->name('akartpictures.prewed');
Route::get('/akartpictures/project/graduation', [AkartPicturesController::class, 'graduation'])->name('akartpictures.graduation');
Route::get('/akartpictures/project/shortvid', [AkartPicturesController::class, 'shortvid'])->name('akartpictures.shortvid');
Route::get('/akartpictures/project/film', [AkartPicturesController::class, 'film'])->name('akartpictures.film');
