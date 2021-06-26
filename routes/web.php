<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomersController;
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
//     return view('frontend/master');
// });

Route::post('/registration/customer', [CustomersController::class, 'registration'])->name('frn.registration');
Route::get('/user/dashboard/{id}', [CustomersController::class, 'dashboard'])->name('frn.customer.dashboard');


Route::get('/', [FrontendController::class, 'home'])->name('frn.home');
Route::get('/destination', [FrontendController::class, 'destination'])->name('frn.destination');
Route::get('/tourpack', [FrontendController::class, 'tourpack'])->name('frn.tourpack');
Route::get('/news', [FrontendController::class, 'news'])->name('frn.news');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('frn.contact');
Route::get('/about-us', [FrontendController::class, 'about'])->name('frn.about');
Route::get('/our-service', [FrontendController::class, 'service'])->name('frn.service');

Route::get('/tourpack/payment', [FrontendController::class, 'tourpayment'])->name('frn.tourpayment');

Route::get('/tourpack/detail/{id}', [FrontendController::class, 'tourdetail'])->name('frn.tourdetail');
Route::post('/tourpack/detail/', [FrontendController::class, 'dateMonth'])->name('frn.tourdetail.dateMonth');

Route::post('/tourpack/payment', [BookingController::class, 'validationBooking'])->name('frn.tourdetail.booking.validation');
Route::get('/tourpack/payment', [BookingController::class, 'return'])->name('frn.tourdetail.booking');




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\cms\HomeController::class, 'index'])->name('home');
// Route::get('/admin/dashboard', [CmsController::class, 'dashboard'])->name('cms.dashboard')->middleware('auth');
Route::get('/admin/dashboard', [App\Http\Controllers\cms\CmsController::class, 'dashboard'])->name('cms.dashboard');


//tour
Route::get('/admin/tour', [App\Http\Controllers\cms\TourController::class, 'index'])->name('cms.tour.index');
Route::get('/admin/tour/add', [App\Http\Controllers\cms\TourController::class, 'create'])->name('cms.tour.add');
Route::post('/admin/tour/store', [App\Http\Controllers\cms\TourController::class, 'store'])->name('cms.tour.store');
Route::delete('/admin/tour/destroy/{id}', [App\Http\Controllers\cms\TourController::class, 'destroy'])->name('cms.tour.destroy');
Route::get('/admin/tour/edit/{id}', [App\Http\Controllers\cms\TourController::class, 'edit'])->name('cms.tour.edit');
Route::post('/admin/tour/update/{id}', [App\Http\Controllers\cms\TourController::class, 'update'])->name('cms.tour.update');

//destination
Route::get('/admin/destination', [App\Http\Controllers\cms\DestinationController::class, 'index'])->name('cms.destination.index');
Route::get('/admin/destination/add', [App\Http\Controllers\cms\DestinationController::class, 'create'])->name('cms.destination.add');
Route::get('/admin/destination/edit/{id}', [App\Http\Controllers\cms\DestinationController::class, 'edit'])->name('cms.destination.edit');
Route::post('/admin/destination/store', [App\Http\Controllers\cms\DestinationController::class, 'store'])->name('cms.destination.store');
Route::delete('/admin/destination/destroy/{id}', [App\Http\Controllers\cms\DestinationController::class, 'destroy'])->name('cms.destination.destroy');
Route::post('/admin/destination/update{id}', [App\Http\Controllers\cms\DestinationController::class, 'update'])->name('cms.destination.update');

//setting
Route::get('/admin/setting/contact-us', [App\Http\Controllers\cms\SettingController::class, 'contactShow'])->name('cms.setting.contact');
Route::post('/admin/setting/contact-us/update', [App\Http\Controllers\cms\SettingController::class, 'contactUpdate'])->name('cms.setting.contact.update');
Route::get('/admin/setting/about-us', [App\Http\Controllers\cms\SettingController::class, 'aboutShow'])->name('cms.setting.about');
Route::post('/admin/setting/about-us/update', [App\Http\Controllers\cms\SettingController::class, 'aboutFeatureUpdate'])->name('cms.setting.about.update');
Route::get('/admin/setting/partner', [App\Http\Controllers\cms\SettingController::class, 'partner'])->name('cms.setting.partner');
Route::post('/admin/setting/partner/destroy/{id}', [App\Http\Controllers\cms\SettingController::class, 'partnerDestroy'])->name('cms.setting.partner.destroy');
Route::post('/admin/setting/partner/store', [App\Http\Controllers\cms\SettingController::class, 'partnerStore'])->name('cms.setting.partner.store');

//team
Route::get('/admin/setting/team', [App\Http\Controllers\cms\TeamController::class, 'index'])->name('cms.setting.team');
Route::get('/admin/setting/team/add', [App\Http\Controllers\cms\TeamController::class, 'create'])->name('cms.setting.team.add');
Route::post('/admin/setting/team/store', [App\Http\Controllers\cms\TeamController::class, 'store'])->name('cms.setting.team.store');
Route::delete('/admin/setting/team/destroy/{id}', [App\Http\Controllers\cms\TeamController::class, 'destroy'])->name('cms.setting.team.destroy');
Route::get('/admin/setting/team/edit/{id}', [App\Http\Controllers\cms\TeamController::class, 'edit'])->name('cms.setting.team.edit');
Route::post('/admin/setting/team/update/{id}', [App\Http\Controllers\cms\TeamController::class, 'update'])->name('cms.setting.team.update');

//service
Route::get('/admin/setting/service', [App\Http\Controllers\cms\ServiceController::class, 'index'])->name('cms.setting.service');
Route::get('/admin/setting/service/add', [App\Http\Controllers\cms\ServiceController::class, 'create'])->name('cms.setting.service.add');
Route::post('/admin/setting/service/store', [App\Http\Controllers\cms\ServiceController::class, 'store'])->name('cms.setting.service.store');
Route::get('/admin/setting/service/edit/{id}', [App\Http\Controllers\cms\ServiceController::class, 'edit'])->name('cms.setting.service.edit');
Route::post('/admin/setting/service/update/{id}', [App\Http\Controllers\cms\ServiceController::class, 'update'])->name('cms.setting.service.update');
Route::delete('/admin/setting/service/destroy/{id}', [App\Http\Controllers\cms\ServiceController::class, 'destroy'])->name('cms.setting.service.destroy');

Route::get('/admin/available', [App\Http\Controllers\cms\AvailableController::class, 'index'])->name('cms.available.index');
Route::get('/admin/available/add', [App\Http\Controllers\cms\AvailableController::class, 'create'])->name('cms.available.create');
Route::post('/admin/available/store', [App\Http\Controllers\cms\AvailableController::class, 'store'])->name('cms.available.store');
Route::delete('/admin/available/destroy/{id}', [App\Http\Controllers\cms\AvailableController::class, 'destroy'])->name('cms.available.destroy');
Route::get('/admin/available/edit/{id}', [App\Http\Controllers\cms\AvailableController::class, 'edit'])->name('cms.available.edit');
Route::post('/admin/available/update/{id}', [App\Http\Controllers\cms\AvailableController::class, 'update'])->name('cms.available.update');
