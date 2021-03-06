<?php

use Illuminate\Support\Facades\Route;
use Spatie\Period\Period;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('test', function () {
    $report = new \Domain\Blogging\Reports\PostsCreatedOverPeriod(
        Period::make('2021-08-25', '2021-08-26'),
    );

    dd($report->totalPosts());
});

/**
 * Post Routes
 */
Route::prefix('posts')->as('posts:')->group(function () {

    Route::post('/', App\Http\Controllers\Web\Posts\StoreController::class)->name('store');
});
