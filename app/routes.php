<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});


$app->group('/table', function () use ($app) {
	
	$app->get("", 	"App\Controllers\TableController:get");
	$app->post("", 	"App\Controllers\TableController:add");
	$app->post("/{id}", 	"App\Controllers\TableController:update");
	$app->delete("/{id}", 	"App\Controllers\TableController:delete");
});
