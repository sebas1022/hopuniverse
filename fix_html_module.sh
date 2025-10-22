#!/bin/bash

# Script para diagnosticar y solucionar problemas con el módulo HTML
# HopUniverse - Octubre 2025

echo "🔍 Diagnóstico del Módulo HTML - HopUniverse"
echo "============================================="
echo ""

# Configuración
DB_HOST="localhost"
DB_USER="hopuniverse_user"
DB_PASS="HopUniverse2025!"
DB_NAME="hopuniverse_db"
MODULE_ID=122

echo "📊 1. Verificando datos actuales del módulo #${MODULE_ID}..."
mysql -h $DB_HOST -u $DB_USER -p"$DB_PASS" $DB_NAME -e "
SELECT 
    module_id, 
    name, 
    code,
    CHAR_LENGTH(setting) as setting_length,
    LEFT(setting, 200) as setting_preview
FROM oc_module 
WHERE module_id = ${MODULE_ID};
" 2>/dev/null

echo ""
echo "🧹 2. Limpiando caché del sistema..."
rm -rf /var/www/hopuniverse.com/storage/cache/*
rm -rf /var/www/hopuniverse.com/storage/modification/*
rm -rf /var/www/hopuniverse.com/storage/session/*
echo "✅ Caché eliminado"

echo ""
echo "🔧 3. Verificando permisos de directorios..."
ls -la /var/www/hopuniverse.com/storage/ | head -5

echo ""
echo "📝 4. Verificando estructura del módulo en la BD..."
mysql -h $DB_HOST -u $DB_USER -p"$DB_PASS" $DB_NAME -e "
DESCRIBE oc_module;
" 2>/dev/null

echo ""
echo "🎯 5. Contando módulos HTML en el sistema..."
mysql -h $DB_HOST -u $DB_USER -p"$DB_PASS" $DB_NAME -e "
SELECT code, COUNT(*) as total 
FROM oc_module 
WHERE code = 'html' 
GROUP BY code;
" 2>/dev/null

echo ""
echo "✅ Diagnóstico completado"
echo ""
echo "🔄 Ahora intenta guardar de nuevo el módulo desde el admin."
echo "📌 URL: https://hopuniverse.com/admin/index.php?route=extension/module/html&module_id=122"

