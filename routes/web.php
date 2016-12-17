<?php

Route::get('/', 'PageController@index');

Route::post('/enviar_email', 'PageController@enviar_email');

Route::resource('/clientes', 'ClientController');