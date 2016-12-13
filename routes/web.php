<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/enviar_email', 'PageController@enviar_email');