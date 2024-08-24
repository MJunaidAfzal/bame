<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    return view('index');
})->name('index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//LOGOUT
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

//PLAYERS
Route::get('/players', [FrontendController::class, 'players'])->name('players');
//PLAYER DETAIL
Route::get('/player/detail', [FrontendController::class, 'playerDetail'])->name('player-detail');
//GALLERY
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
//POINTS TABLE
Route::get('/points-table', [FrontendController::class, 'pointsTable'])->name('points-table');
//ABOUT US
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about-us');
//CONTACT US
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact-us');
//WISHLIST
Route::get('/wishlist', [FrontendController::class, 'wishlist'])->name('wishlist');
//CART
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
//TOURNAMENT
Route::get('/tournament', [FrontendController::class, 'tournament'])->name('tournament');
//TOURNAMENT DETAIL
Route::get('/tournament/detail', [FrontendController::class, 'tournamentDetail'])->name('tournament-detail');
//SHOP
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
//SHOP DETAIL
Route::get('/shop/detail', [FrontendController::class, 'shopDetail'])->name('shop-detail');
//BLOG
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
//BLOG DETAIL
Route::get('/blog/detail', [FrontendController::class, 'blogDetail'])->name('blog-detail');
//GAME
Route::get('/game', [FrontendController::class, 'game'])->name('game');
//GAME DETAIL
Route::get('/game/detail', [FrontendController::class, 'gameDetail'])->name('game-detail');
