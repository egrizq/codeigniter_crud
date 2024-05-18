<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('halo', 'Halo::index');

$routes->get('/', 'Data::index');

// halaman tambah barang
$routes->get('/tambah', 'Data::tambah');

// halaman edit barang
$routes->get('/edit/(:any)', 'Data::edit/$1');

// todo proses crud 

// insert
$routes->post('/add', 'Data::add');

// update 
$routes->post('/update', 'Data::update');

// hapus
$routes->get('/hapus/(:any)', 'Data::hapus/$1');