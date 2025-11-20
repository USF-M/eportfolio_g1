<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
/*
Route::get('/', function () {
    return 'Pantalla principal';
});
*/

// ----------------------------------------
<<<<<<< HEAD
Route::get('/auth/login', function () {
=======
Route::get('login', function () {
>>>>>>> f6a61ca2233c002450eab2b3119ef95241bde8d8
    return view('auth.login');
});
Route::get('/auth/logout', function () {
    return view('auth.logout');
});


// ----------------------------------------
Route::prefix('familias-profesionales')->group(function () {
    Route::get('/', function () {
        return view('familias-profesionales.index');
    });

    Route::get('/create', function () {
        return view('familias-profesionales.create');
    });

    Route::get('/show/{id}	', function ($id) {
<<<<<<< HEAD
        return view('familias-profesionales.show', array('id'=>$id));
=======
        return view('familias-profesionales.show',array('id'=>$id));
>>>>>>> f6a61ca2233c002450eab2b3119ef95241bde8d8
    }) -> where('id', '[0-9]+');

    Route::get('/edit/{id}', function ($id) {
        return view('familias-profesionales.edit', array('id'=>$id));
    }) -> where('id', '[0-9]+');
});


// ----------------------------------------
Route::get('perfil/{id?}', function ($id = null) {
    if ($id === null)
        return 'Visualizar el usuario propio';
    return 'Visualizar el usuario de ' . $id;
}) -> where('id', '[0-9]+');

