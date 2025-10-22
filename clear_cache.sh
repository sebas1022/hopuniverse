#!/bin/bash

# Script para limpiar caché de OpenCart
# HopUniverse - Octubre 2025

echo "🧹 Limpiando caché de HopUniverse..."
echo "====================================="

# Directorio base
BASE_DIR="/var/www/hopuniverse.com"

# Limpiar caché
echo "📁 Limpiando storage/cache..."
rm -rf $BASE_DIR/storage/cache/*
echo "✅ Cache limpiado"

# Limpiar modificaciones
echo "📁 Limpiando storage/modification..."
rm -rf $BASE_DIR/storage/modification/*
echo "✅ Modifications limpiadas"

# Limpiar sesiones (opcional - puede cerrar sesión de admin)
# echo "📁 Limpiando storage/sesiones..."
# rm -rf $BASE_DIR/storage/session/*
# echo "✅ Sessions limpiadas"

# Establecer permisos correctos
echo "🔒 Estableciendo permisos..."
chmod -R 755 $BASE_DIR/storage/cache
chmod -R 755 $BASE_DIR/storage/modification
chmod -R 755 $BASE_DIR/storage/session
echo "✅ Permisos establecidos"

echo ""
echo "✅ Caché limpiado exitosamente"
echo "🔄 Ahora puedes intentar guardar de nuevo el módulo HTML"

