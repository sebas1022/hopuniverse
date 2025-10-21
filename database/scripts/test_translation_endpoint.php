<?php
// Script de prueba para verificar el endpoint de traducciones
// Simula la llamada al método translation() del controlador

// Configuración de la base de datos
$host = 'localhost';
$username = 'hopuniverse_user';
$password = 'HopUniverse2025!';
$database = 'hopuniverse_db';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Parámetros de prueba
    $route = 'extension/module/newslettersubscribe';
    $language_id = 1;
    $store_id = 0;
    
    echo "=== PRUEBA DEL ENDPOINT DE TRADUCCIONES ===\n";
    echo "Ruta: $route\n";
    echo "Language ID: $language_id\n";
    echo "Store ID: $store_id\n\n";
    
    // Simular la consulta del método getTranslationsByRoute
    $sql = "SELECT * FROM oc_translation WHERE route = ? AND language_id = ? AND store_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$route, $language_id, $store_id]);
    $db_translations = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "=== TRADUCCIONES ENCONTRADAS EN BD ===\n";
    foreach ($db_translations as $translation) {
        echo "Clave: {$translation['key']} | Valor: {$translation['value']}\n";
    }
    
    echo "\n=== SIMULANDO RESPUESTA JSON ===\n";
    $json = array();
    
    // Simular la carga desde archivo PHP (si existe)
    $file_path = "/var/www/hopuniverse.com/upload/catalog/language/en-gb/extension/module/newslettersubscribe.php";
    if (file_exists($file_path)) {
        echo "Archivo PHP encontrado: $file_path\n";
        $_ = array();
        include($file_path);
        
        foreach ($_ as $key => $value) {
            $json[] = array(
                'key'   => $key,
                'value' => $value
            );
        }
        echo "Claves desde archivo PHP: " . count($json) . "\n";
    } else {
        echo "Archivo PHP NO encontrado: $file_path\n";
    }
    
    // Agregar claves de la base de datos
    foreach ($db_translations as $translation) {
        $exists = false;
        foreach ($json as $item) {
            if ($item['key'] == $translation['key']) {
                $exists = true;
                break;
            }
        }
        
        if (!$exists) {
            $json[] = array(
                'key'   => $translation['key'],
                'value' => $translation['value']
            );
        }
    }
    
    echo "Total de claves en JSON: " . count($json) . "\n\n";
    
    echo "=== RESPUESTA JSON FINAL ===\n";
    echo json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage() . "\n";
}
?>
