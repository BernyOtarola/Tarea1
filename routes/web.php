<?php

use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class, 'index']);
Route::get('movies/genre/{genre}', [MovieController::class, 'showByGenre']);
