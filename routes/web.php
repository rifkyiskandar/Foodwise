<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/forum2', function () {
    return view('forum2');
});

Route::get('/regist', function () {
    return view('regist');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/diet', function () {
    return view('diet');
});

Route::get('/akun', function () {
    return view('akun');
});

Route::get('/output', function () {
    return view('output');
});
