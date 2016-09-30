<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;

$router->get('/', HomeController::class.'@index')->name('home');

$router->get('login', AuthController::class.'@login')->name('login');
$router->post('login', AuthController::class.'@logging')->name('login.store');
$router->get('register', AuthController::class.'@register')->name('register');
$router->post('register', AuthController::class.'@registering')->name('register.store');

$router->get('books', BookController::class.'@index')->name('books');
$router->get('book/create', BookController::class.'@create')->name('book.create');
$router->post('book/create', BookController::class.'@store')->name('book.store');
$router->get('book/{book}/edit', BookController::class.'@edit')->name('book.edit');
$router->post('book/{book}/update', BookController::class.'@update')->name('book.update');
$router->get('book/{book}/delete', BookController::class.'@delete')->name('book.delete');

$router->get('user/books', BookController::class.'@userBooks')->name('user.books');
