<?php

$passwordController = '\Monim67\LaravelPasswordUpdate\Http\Controllers\PasswordController';

Route::get('/edit', $passwordController.'@edit')->name('password.edit');
Route::post('', $passwordController.'@update')->name('password.new');
