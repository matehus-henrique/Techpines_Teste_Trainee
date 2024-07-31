<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\TrackController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/albums', [AlbumController::class, 'indexView'])->name('albums.index');
Route::get('/albums/create', [AlbumController::class, 'createView'])->name('albums.create');
Route::post('/albums', [AlbumController::class, 'store'])->name('albums.store');
Route::get('/albums/{id}/edit', [AlbumController::class, 'editView'])->name('albums.edit');
Route::put('/albums/{id}', [AlbumController::class, 'update'])->name('albums.update');
Route::delete('/albums/{id}', [AlbumController::class, 'destroy'])->name('albums.destroy');

Route::get('/albums/{id}/tracks', [TrackController::class, 'indexView'])->name('tracks.index');
Route::get('/albums/{id}/tracks/create', [TrackController::class, 'createView'])->name('tracks.create');
Route::post('/tracks', [TrackController::class, 'store'])->name('tracks.store');
Route::get('/tracks/{id}/edit', [TrackController::class, 'editView'])->name('tracks.edit');
Route::put('/tracks/{id}', [TrackController::class, 'update'])->name('tracks.update');
Route::delete('/tracks/{id}', [TrackController::class, 'destroy'])->name('tracks.destroy');