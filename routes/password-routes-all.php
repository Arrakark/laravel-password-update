<?php

$passwordController = '\Monim67\LaravelPasswordUpdate\Http\Controllers\PasswordController';

Route::get('/edit', $passwordController.'@edit');
Route::post('', $passwordController.'@update');
