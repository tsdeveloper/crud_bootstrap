<?php

require '../Core/Router.php';

$router = new Router();

$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);

$url = $_SERVER['QUERY_STRING'];

var_dump($url);
if ($router->match($url)) {
    echo '<pre>';
    var_dump(
        $router->getParams()
    );
    echo '</pre>';
}
else {
    echo  "No route found for URL '$url";
}

