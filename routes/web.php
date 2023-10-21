<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\PostController;

Route::get('/work', [WorkController::class,'index']);
