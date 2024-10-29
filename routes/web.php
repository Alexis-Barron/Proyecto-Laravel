<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Fragment\RoutableFragmentRenderer;

Route::get('/', function () {
    return view('welcome');
});

