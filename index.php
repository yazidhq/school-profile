<?php

$routes = [];

route('/', function() {
  header('Location: views/home.php');
});

route('/home', function() {
  header('Location: views/home.php');
});

route('/404', function() {
  header('Location: page-not-found/404.php');
});

function route(string $path, callable $callback) {
  global $routes;
  $routes[$path] = $callback;
}

run();

function run() {
  global $routes;
  $uri = $_SERVER['REQUEST_URI'];
  $found = false;
  foreach ($routes as $path => $callback) {
    if ($path !== $uri) continue;

    $found = true;
    $callback();
  }

  if (!$found) {
    $notFoundCallback = $routes['/404'];
    $notFoundCallback();
  }
}
