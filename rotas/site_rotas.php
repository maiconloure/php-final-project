<?php

$ctrl = Stox\Controllers\SiteController::class;

$app->get('/', "$ctrl::index");
$app->get('/hello/{nome}', "$ctrl::hello");
$app->get('/form', "$ctrl::form");
$app->post('/logar', "$ctrl::logar");
