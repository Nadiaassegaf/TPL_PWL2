<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

route::get('/', [pagecontroller::class, 'home']);
route::get('/about', [pagecontroller::class, 'about']);
route::get('/services', [pagecontroller::class, 'services']);
route::get('/contact', [pagecontroller::class, 'contact']);
route::get('/blog', [pagecontroller::class, 'blog']);