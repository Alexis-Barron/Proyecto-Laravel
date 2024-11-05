<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Fragment\RoutableFragmentRenderer;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'dashboard'],function() {
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});
