<?php

Route::get('/', 'PageController@index');

Route::get('/enviar_email', 'PageController@enviar_email');

Route::resource('/clientes', 'ClientController');