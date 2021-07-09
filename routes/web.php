<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\ReportController;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::resource('/players' , PlayerController::class);
Route::resource('/matches' , MatchController::class);
Route::get('/matches/start/{id}', [MatchController::class, 'start'])->name('matches.start');

Route::prefix('report')->name('report.')->group(function () {
    Route::get('/matches', [ReportController::class, 'matches'])->name('matches');
    Route::get('/lineups', [ReportController::class, 'lineups'])->name('lineups');
});