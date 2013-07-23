<?php
/*
 * Project: Nathan MVC
 * File: index.php
 * Purpose: landing page which handles all requests
 * Author: Nathan Davison
 */

define( 'DS', DIRECTORY_SEPARATOR);
define( 'ABSPATH', dirname( __FILE__ ) . DS );

require( ABSPATH . 'config' . DS . 'config.php' );
require( ABSPATH . 'classes'. DS . 'basecontroller.php' );
require( ABSPATH . 'classes'. DS . 'basemodel.php' );
require( ABSPATH . 'classes'. DS . 'view.php' );
require( ABSPATH . 'classes'. DS . 'viewmodel.php' );
require( ABSPATH . 'classes'. DS . 'loader.php' );

$loader = new Loader(); //create the loader object
$controller = $loader->createController(); //creates the requested controller object based on the 'controller' URL value
$controller->executeAction(); //execute the requested controller's requested method based on the 'action' URL value. Controller methods output a View.

?>
