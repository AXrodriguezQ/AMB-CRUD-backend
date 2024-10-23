<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return "All users";
});

Route::get('/users/{id}', function () {
    return "One user";
});

Route::post('/users', function () {
    return "Create a new user";
});

Route::put('/users/{id}', function () {
    return "Update a user";
});

Route::delete('/users/{id}', function () {
    return "Delete a user";
});
