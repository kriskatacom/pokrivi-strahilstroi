<?php

use App\Core\Router;
use App\Controllers\HomeController;

$router = new Router();

// --- Публични страници ---
$router->get('/', [HomeController::class, 'index']);

return $router;
