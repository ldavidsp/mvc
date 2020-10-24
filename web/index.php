<?php
/**
 * Load Controller
 */
require __DIR__ . '/controllers/Controller.php';

/**
 * Create object to Controller class.
 */
$mvc = new Controller();
// $mvc->index();

/**
 * Get method static of Controller class.
 */
Controller::index2();



