<?php

use App\Livewire\CartPage;
use App\Livewire\ShopPage;
use App\Livewire\Inventory;
use App\Livewire\Milestone;
use App\Livewire\SetupProfile;
use App\Livewire\ShopSeedballs;
use App\Livewire\Order\Checkout;
use App\Http\Livewire\Calculator;
use App\Livewire\Order\ManageOrders;
use Illuminate\Support\Facades\Route;
use App\Livewire\Order\CheckoutSuccess;
use App\Http\Controllers\PageController;
use App\Filament\Pages\PurchaseSeedballs;
use App\Livewire\Planter\PlanterInventory;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsletterController;

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

Route::get('/', [PageController::class, 'home'])->name('page.home');
Route::get('/terms', [PageController::class, 'terms'])->name('page.terms');
Route::get('/privacy', [PageController::class, 'privacy'])->name('page.privacy');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('calculator', Calculator::class);
Route::get('cart', CartPage::class);
Route::get('milestone', Milestone::class);

Route::group(['middleware' => 'auth'], function(){
    Route::get('setup', SetupProfile::class);
    Route::get('shop', ShopPage::class)->name('shop.index');
    Route::get('shop/seedballs', ShopSeedballs::class)->name('shop.seedballs');
    Route::get('orders', ManageOrders::class)->name('orders.index');
    Route::get('orders/{code}/checkout', Checkout::class)->name('orders.checkout');
    Route::get('orders/{code}/checkout-success', CheckoutSuccess::class)->name('orders.checkout-successful');
    Route::get('inventory', Inventory::class)->name('inventory.index');
});

Route::group(['middleware' => 'auth', 'prefix' => 'planter'], function(){
    Route::get('inventory', PlanterInventory::class);
});


Route::get('newsletter', [NewsletterController::class, 'create'])->name('newsletter.create');
Route::post('newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');

//Route::get('shop', Catalog::class);

require __DIR__.'/auth.php';