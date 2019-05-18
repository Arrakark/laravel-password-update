<?php

$passwordController = '\Monim67\LaravelPasswordUpdate\Http\Controllers\PasswordController';

Route::post('', $passwordController.'@update')->name('password.update');
