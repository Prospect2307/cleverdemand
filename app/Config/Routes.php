<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/news', 'News::index');
$routes->get('/news/(:num)', 'News::view/$1');
$routes->get('/interviews', 'Interview::index');
$routes->get('/interviews/(:num)', 'Interview::view/$1');
$routes->get('articles', 'Articles::index');
$routes->get('articles/(:num)', 'Articles::view/$1');
$routes->get('pressrelease', 'PressRelease::index');
$routes->get('pressrelease/(:num)', 'PressRelease::view/$1');
$routes->get('/dbtest', 'DbTest::index');
$routes->get('login', 'Auth::login');



// dashboard
$routes->get('dashboard', 'Dashboard\Home::index');