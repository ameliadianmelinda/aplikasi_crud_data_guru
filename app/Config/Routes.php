<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/daftar', 'Auth::register');
$routes->post('/auth/valid_login', 'Auth::valid_login');
$routes->post('/auth/valid_register', 'Auth::valid_register');
$routes->get('/auth/logout', 'Auth::logout');

$routes->get('/user', 'User::index');
$routes->get('/user/dataguru', 'User::dataguru');
$routes->post('/guru/save', 'Guru::save');
// $routes->get('/user/editguru', 'User::editguru');

$routes->get('/admin', 'Admin::dashboard');
$routes->get('/admin/dataguru', 'Admin::guru');
$routes->get('/admin/tambah/guru', 'Admin::tambah_guru');
$routes->post('/guru/admin/save', 'Guru::saveadmin');

$routes->delete('/guru/(:num)', 'Guru::delete/$1');
$routes->get('/guru/edit/(:num)', 'Guru::edit/$1'); 
$routes->post('/guru/update/(:num)', 'Guru::update/$1');