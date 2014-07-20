<?php

/*// Load our set up files
require __DIR__.'/../vendor/autoload.php';
include __DIR__.'/../app/containers.php';

// Get the config
$config = include __DIR__.'/../app/config/primary.php';

// Get the routes
$routes = include __DIR__.'/../app/config/routes.php';*/

// Configure our database
ORM::configure($config['db']['type'].':host='.$config['db']['host'].';dbname='.$config['db']['name']);
ORM::configure('username', $config['db']['user']);
ORM::configure('password', $config['db']['pass']);
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
ORM::configure('error_mode', PDO::ERRMODE_WARNING);
ORM::configure('return_result_sets', true);

// 
ToroHook::add("after_request",  function($params)
{
    
    // Capture the result
    $result = $params['result'];
    
    // If result has a send method, fire it
    if (is_object($result) && method_exists($result, 'send'))
            $result->send();
    
});

// temp loading
include __DIR__.'/../app/controllers/Stacks/Create.php';
m\View\GenericView::setBaseDirectory(__DIR__.'/../app/views/');

// Serve the routes
Toro::serve($routes);