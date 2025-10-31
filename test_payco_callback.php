<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', '/tmp/payco_debug.log');

// Log todo lo que llega
file_put_contents('/tmp/payco_debug.log', date('Y-m-d H:i:s') . ' - GET: ' . print_r($_GET, true) . PHP_EOL, FILE_APPEND);
file_put_contents('/tmp/payco_debug.log', date('Y-m-d H:i:s') . ' - POST: ' . print_r($_POST, true) . PHP_EOL, FILE_APPEND);
file_put_contents('/tmp/payco_debug.log', date('Y-m-d H:i:s') . ' - REQUEST: ' . print_r($_REQUEST, true) . PHP_EOL, FILE_APPEND);

// Probar la API de Payco
if(isset($_GET['ref_payco']) || isset($_GET['?ref_payco'])){
    $ref = isset($_GET['?ref_payco']) ? $_GET['?ref_payco'] : $_GET['ref_payco'];
    $url = 'https://secure.epayco.co/validation/v1/reference/' . $ref;
    
    file_put_contents('/tmp/payco_debug.log', date('Y-m-d H:i:s') . ' - URL: ' . $url . PHP_EOL, FILE_APPEND);
    
    $response = @file_get_contents($url);
    
    if($response === false) {
        file_put_contents('/tmp/payco_debug.log', date('Y-m-d H:i:s') . ' - ERROR: No se pudo obtener respuesta de Payco' . PHP_EOL, FILE_APPEND);
        die('Error al consultar Payco');
    }
    
    file_put_contents('/tmp/payco_debug.log', date('Y-m-d H:i:s') . ' - Response: ' . $response . PHP_EOL, FILE_APPEND);
    
    $json = json_decode($response);
    file_put_contents('/tmp/payco_debug.log', date('Y-m-d H:i:s') . ' - JSON Decoded: ' . print_r($json, true) . PHP_EOL, FILE_APPEND);
}

echo 'Test completado. Revisar /tmp/payco_debug.log';
