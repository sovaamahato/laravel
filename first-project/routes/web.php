<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function(){
    return view("welcome",[
        "name"=>"sovaaaaaa",
        "eat"=>"Burger"
    ]);
});

Route::get('/about', function(){
    return response("You wanna know about me?");
});


