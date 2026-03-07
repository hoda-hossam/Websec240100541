<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Web\ProductsController;


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

Route::get('/transcript', function () {

    $courses = [
        ["code"=>"CS101","title"=>"Programming","grade"=>"A"],
        ["code"=>"CS102","title"=>"Database","grade"=>"B+"],
        ["code"=>"CS103","title"=>"Networks","grade"=>"A-"],
        ["code"=>"CS104","title"=>"Security","grade"=>"B"]
    ];

    return view('transcript', compact('courses'));
});

Route::get('/products', function () {

    $products = [

        [
        "name"=>"Laptop",
        "price"=>15000,
        "image"=>"https://via.placeholder.com/200",
        "desc"=>"High performance laptop"
        ],

        [
        "name"=>"Phone",
        "price"=>8000,
        "image"=>"https://via.placeholder.com/200",
        "desc"=>"Smart phone"
        ],

        [
        "name"=>"Headphones",
        "price"=>500,
        "image"=>"https://via.placeholder.com/200",
        "desc"=>"Wireless headphones"
        ]

    ];

    return view('products', compact('products'));
});

Route::get('/calculator', function () {
    return view('calculator');
});

Route::get('/gpa', function () {

    $courses = [
        ["code"=>"CS101","title"=>"Programming","hours"=>3],
        ["code"=>"CS102","title"=>"Database","hours"=>3],
        ["code"=>"CS103","title"=>"Networks","hours"=>2],
    ];

    return view('gpa', compact('courses'));
});




Route::get('products/edit/{product?}', [ProductsController::class, 'edit'])
    ->name('products_edit');


Route::get('products', [ProductsController::class,'list'])
    ->name('products_list');


Route::post('products/save/{product?}', [ProductsController::class, 'save'])
    ->name('products_save');


Route::get('products/delete/{product}', [ProductsController::class, 'delete'])
    ->name('products_delete');