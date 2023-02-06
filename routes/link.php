<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortLinkController;

Route::get('/{link:hash_id}', [ShortLinkController::class, 'getUrl']);

Route::prefix('url')->group(function () {
    Route::get('/shortener', [ShortLinkController::class,'pageShortenerUrl'])->name('page.shortener.link');
    Route::post('/shortener', [ShortLinkController::class,'shortenerUrl'])->name('save.shortener.link');
});
