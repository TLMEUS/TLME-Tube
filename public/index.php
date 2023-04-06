<?php
/**
 * This file contains the C:/TLME/Projects/ESP/WWW/App/Controllers/index.php file for the TLME-Framework
 *
 * PHP Version: 8.2
 *
 * @author troylmarker
 * @version 1.0
 * @since 2023-3-19
*/

/**
 * Composer autoloader
 */
require '../vendor/autoload.php';

/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

/**
 * Routing
 */
$router = new Core\Router();
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{action}/{id:\d+}');
try {
    $router->dispatch($_SERVER['QUERY_STRING']);
} catch (Exception $e) {
}