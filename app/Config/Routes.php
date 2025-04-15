<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('halo', 'Halo::index');
$routes->get('barang', 'Barang::index');

// Home Barang


$routes->get('barang', 'Barang::index');
// Halaman Tambah
$routes->get('barang/tambah', 'Barang::tambah');
// Halaman Edit
$routes->get('barang/edit/(:any)', 'Barang::edit/$1');
// Proses CRUD
// Insert
$routes->post('barang/add', 'Barang::add');
// Update
$routes->post('barang/update', 'Barang::update');
// Hapus
$routes->get('barang/hapus/(:any)', 'Barang::hapus/$1');
// get route url site_url/halo dengan class Halo dan function index pada Controller Halo.php


// CUSTOMER
$routes->get('customer', 'Customer::index');
$routes->get('customer/tambah', 'Customer::tambah');
$routes->get('customer/edit/(:any)', 'Customer::edit/$1');
$routes->post('customer/add', 'Customer::add');
$routes->post('customer/update', 'Customer::update');
$routes->get('customer/hapus/(:any)', 'Customer::hapus/$1');

// SUPPLIER
$routes->get('supplier', 'Supplier::index');
$routes->get('supplier/tambah', 'Supplier::tambah');
$routes->get('supplier/edit/(:any)', 'Supplier::edit/$1');
$routes->post('supplier/add', 'Supplier::add');
$routes->post('supplier/update', 'Supplier::update');
$routes->get('supplier/hapus/(:any)', 'Supplier::hapus/$1');
