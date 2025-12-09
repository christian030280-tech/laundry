<?php
chdir(__DIR__ . '/../');

// load composer autoload
require __DIR__ . '/../vendor/autoload.php';

// bootstrap laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$request = Illuminate\Http\Request::capture();

$response = $kernel->handle($request);

$response->send();

$kernel->terminate($request, $response);
