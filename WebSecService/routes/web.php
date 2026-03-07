<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/multable', function (Request $request) {
    $j = $request->number ?? null;
    return view('multable', compact('j'));
});

Route::get('/even', function () {
    return view('even');
});

Route::get('/prime', function () {
    return view('prime');
});

Route::get('/minitest', function () {

    $bill = [
        ["name" => "Milk", "price" => 25, "qty" => 2],
        ["name" => "Bread", "price" => 5, "qty" => 3],
        ["name" => "Eggs", "price" => 30, "qty" => 1],
        ["name" => "Cheese", "price" => 40, "qty" => 1],
    ];

    return view('minitest', compact('bill'));
});