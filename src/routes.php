<?php


$app->get('/', function () {
    echo "Cities API - Slim";
});

$app->get('/country', function () {
    echo \SD23\Features\Country::countryList();
});
$app->get('/country/:id', function ($id) {
    echo \SD23\Features\Country::countryInfo($id);
});
$app->get('/country/:id/state', function ($id) {
    echo \SD23\Features\Country::stateList($id);
});

$app->get('/state', function () {
    echo \SD23\Features\State::state();
});
$app->get('/state/:id', function ($id) {
    echo \SD23\Features\State::stateInfo($id);
});
$app->get('/state/:id/city', function ($id) {
    echo \SD23\Features\State::cityList($id);
});

$app->get('/city', function () {});
$app->get('/city/:id', function ($id) {});