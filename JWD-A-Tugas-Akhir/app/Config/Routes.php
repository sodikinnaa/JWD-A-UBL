<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pendaftaran-wisata', 'Home::daftarWisata');

$routes->group('wisata', static function ($routes) {
    // $routes->get('inputpaket', 'Wisata\PaketWisata::input');
    $routes->get('daftar-pesanan', 'Wisata\PaketWisata::index');
    $routes->get('add-transaksi', 'Wisata\PaketWisata::addDataTransaksi');
    $routes->get('update-data', 'Wisata\PaketWisata::showEditTrnasaksi');
    $routes->get('updateData', 'Wisata\PaketWisata::updateDataTransaksi');
    $routes->get('hapus/(:any)', 'Wisata\PaketWisata::hapusDataTransaksi/$1');
}); 
