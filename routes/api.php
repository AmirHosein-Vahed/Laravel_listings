<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::get('/posts', function() {
    $data = [
        0 =>
            ["name" => "ali",
            "age"  => 12,
            "skills" => ["football", "volleyball"]],
        1 =>
            ["name" => "ahmad",
            "age"  => 22,
            "skills" => ["rogby", "hokey"]]
    ];

    return response()->json($data);
});

Route::get('/posts/{id}', function($id) {
    $data = [
        0 =>
            ["name" => "ali",
            "age"  => 12,
            "skills" => ["football", "volleyball"]],
        1 =>
            ["name" => "ahmad",
            "age"  => 22,
            "skills" => ["rogby", "hokey"]]
    ];

    return response()->json($data[$id]);
});
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
