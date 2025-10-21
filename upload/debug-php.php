<?php
echo "<h1>PHP Debug Information</h1>";

echo "<h2>Error Reporting Settings</h2>";
echo "<pre>";
echo "error_reporting: " . error_reporting() . "\n";
echo "display_errors: " . ini_get('display_errors') . "\n";
echo "display_startup_errors: " . ini_get('display_startup_errors') . "\n";
echo "log_errors: " . ini_get('log_errors') . "\n";
echo "error_log: " . ini_get('error_log') . "\n";
echo "</pre>";

echo "<h2>PHP Configuration File</h2>";
echo "<pre>";
echo "Loaded php.ini: " . php_ini_loaded_file() . "\n";
echo "Additional .ini files: " . php_ini_scanned_files() . "\n";
echo "</pre>";

echo "<h2>User INI Files</h2>";
echo "<pre>";
$userIniFile = __DIR__ . '/.user.ini';
echo ".user.ini exists: " . (file_exists($userIniFile) ? 'YES' : 'NO') . "\n";
if (file_exists($userIniFile)) {
    echo ".user.ini contents:\n";
    echo file_get_contents($userIniFile);
}
echo "</pre>";

echo "<h2>Test Error Generation</h2>";
echo "<pre>";
echo "Attempting to trigger a Notice...\n";
$test = array('key' => 'value');
// Esto debería generar un Notice si display_errors está On
echo $test['nonexistent'];
echo "\nIf you see a Notice above, display_errors is ON\n";
echo "</pre>";

echo "<h2>All PHP INI Settings (Error Related)</h2>";
echo "<pre>";
$allSettings = ini_get_all();
foreach ($allSettings as $key => $value) {
    if (stripos($key, 'error') !== false || stripos($key, 'display') !== false) {
        echo "$key: Local=" . $value['local_value'] . " Global=" . $value['global_value'] . "\n";
    }
}
echo "</pre>";

echo "<h2>Full phpinfo()</h2>";
phpinfo();
?>

