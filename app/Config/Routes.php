<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login','login::index');
$routes->get('signup','signup::index');
$routes->get('LoggedUser','LoggedUser::index');
$routes->post('login','login::get_login');
$routes->post('signup','signup::get_signup');
