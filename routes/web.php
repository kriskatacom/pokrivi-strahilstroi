<?php

use App\Core\Router;
use App\Controllers\HomeController;

$router = new Router();

// --- Публични страници ---
$router->get('/', [HomeController::class, 'index']);
$router->get('/contacts', [HomeController::class, 'contacts']);
$router->get('/reviews', [HomeController::class, 'reviews']);
$router->get('/gallery', [HomeController::class, 'gallery']);
$router->get('/video', [HomeController::class, 'video']);
$router->get('/offers', [HomeController::class, 'offers']);
$router->get('/services', [HomeController::class, 'services']);

$router->get('/stara-zagora', [HomeController::class, 'staraZagora']);
$router->get('/sofia', [HomeController::class, 'sofia']);
$router->get('/plovdiv', [HomeController::class, 'plovdiv']);
$router->get('/varna', [HomeController::class, 'varna']);
$router->get('/pernik', [HomeController::class, 'pernik']);
$router->get('/burgas', [HomeController::class, 'burgas']);
$router->get('/pazarjik', [HomeController::class, 'pazarjik']);
$router->get('/ihtiman', [HomeController::class, 'ihtiman']);
$router->get('/lovech', [HomeController::class, 'lovech']);

$router->get('/vutreshni-remonti', [HomeController::class, 'vutreshniRemonti']);

return $router;
