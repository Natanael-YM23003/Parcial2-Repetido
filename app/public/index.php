<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../../vendor/autoload.php';

use Imprenta\Controladores\CotizacionControlador;

$controlador = new CotizacionControlador();
$controlador->guardar();