<?php
$app->get('/', function () {
    echo "Cities API - Slim";
});

$app->get('/country', function () {});
$app->get('/country/:id', function ($id) {});
$app->get('/country/:id/state', function ($id) {});

$app->get('/state', function () {});
$app->get('/state/:id', function ($id) {});
$app->get('/state/:id/city', function ($id) {});

$app->get('/city', function () {});
$app->get('/city/:id', function ($id) {});