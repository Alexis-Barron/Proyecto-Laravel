<?php

use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Fragment\RoutableFragmentRenderer;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Post', PostController::class);