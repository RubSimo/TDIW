<?php

session_start();

$accio = $_GET['accio'] ?? NULL;

switch ($accio){

    case 'registrar':
        include __DIR__ . '/registrar.php';
        break;

    case 'crearUsuari':
        include __DIR__ . '/crearUsuari.php';
        break;

    case 'iniciar':
        include __DIR__ . '/iniciar.php';
        break;

    case 'marques':
        include __DIR__ . '/marques.php';
        break;

    case 'talles':
        include __DIR__ . '/talles.php';
        break;

    case 'ajuda':
        include __DIR__ . '/ajuda.php';
        break;

    case 'carrito':
        include __DIR__ . '/carrito.php';
        break;

    case 'getProductes':
        include __DIR__ . '/productes.php';
        break;

    case 'veureProducte':
        include __DIR__ . '/producteDetail.php';
        break;

    default:
        include __DIR__ . '/inici.php';
        break;
}
?>