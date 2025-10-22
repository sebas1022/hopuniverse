#!/bin/bash

# ================================================
# Script de Despliegue - Email de Bienvenida
# HopUniverse - OpenCart 3.0.3.8
# Fecha: 2025-10-22
# ================================================

set -e  # Exit on error

# Colores para output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Variables
SERVER_USER="root"
SERVER_HOST="212.1.213.68"
SERVER_PASSWORD="#L1nd0sn3n3s#"
SERVER_PATH="/var/www/hopuniverse.com"
DB_USER="hopuniverse_user"
DB_PASSWORD="HopUniverse2025!"
DB_NAME="hopuniverse_db"

echo -e "${BLUE}================================================${NC}"
echo -e "${BLUE}🚀 HopUniverse - Despliegue Email de Bienvenida${NC}"
echo -e "${BLUE}================================================${NC}\n"

# ================================================
# 1. COMMIT Y PUSH LOCAL
# ================================================
echo -e "${YELLOW}📝 Paso 1: Commit y Push Local${NC}"
read -p "¿Deseas hacer commit y push de los cambios? (s/n): " -n 1 -r
echo
if [[ $REPLY =~ ^[SsYy]$ ]]; then
    git add -A
    git commit -m "✨ Agregar email de bienvenida automático con cupón WELCOME10OFF"
    git push origin main
    echo -e "${GREEN}✅ Cambios enviados al repositorio${NC}\n"
else
    echo -e "${YELLOW}⏭️  Saltando commit y push${NC}\n"
fi

# ================================================
# 2. ACTUALIZAR CÓDIGO EN SERVIDOR
# ================================================
echo -e "${YELLOW}📥 Paso 2: Actualizar Código en Servidor${NC}"
read -p "¿Deseas actualizar el código en el servidor? (s/n): " -n 1 -r
echo
if [[ $REPLY =~ ^[SsYy]$ ]]; then
    sshpass -p "$SERVER_PASSWORD" ssh "$SERVER_USER@$SERVER_HOST" << EOF
        cd $SERVER_PATH
        echo "Haciendo git pull..."
        git pull origin main
        echo "Verificando archivos actualizados..."
        ls -la upload/catalog/controller/extension/module/newslettersubscribe.php
EOF
    echo -e "${GREEN}✅ Código actualizado en servidor${NC}\n"
else
    echo -e "${YELLOW}⏭️  Saltando actualización de código${NC}\n"
fi

# ================================================
# 3. EJECUTAR SCRIPT SQL
# ================================================
echo -e "${YELLOW}💾 Paso 3: Ejecutar Script SQL${NC}"
read -p "¿Deseas ejecutar el script de traducciones en la BD? (s/n): " -n 1 -r
echo
if [[ $REPLY =~ ^[SsYy]$ ]]; then
    sshpass -p "$SERVER_PASSWORD" ssh "$SERVER_USER@$SERVER_HOST" << EOF
        cd $SERVER_PATH
        echo "Ejecutando script SQL..."
        mysql -h localhost -u $DB_USER -p'$DB_PASSWORD' $DB_NAME < database/scripts/insert_welcome_email_translations.sql
        
        echo "Verificando traducciones..."
        mysql -h localhost -u $DB_USER -p'$DB_PASSWORD' $DB_NAME -e "
        SELECT 
            CASE 
                WHEN language_id = 1 THEN 'Inglés'
                WHEN language_id = 3 THEN 'Español'
            END as idioma,
            COUNT(*) as total
        FROM oc_translation 
        WHERE \\\`key\\\` LIKE 'welcome_%' 
        AND route = 'extension/module/newslettersubscribe'
        GROUP BY language_id;
        "
EOF
    echo -e "${GREEN}✅ Script SQL ejecutado correctamente${NC}\n"
else
    echo -e "${YELLOW}⏭️  Saltando ejecución de SQL${NC}\n"
fi

# ================================================
# 4. LIMPIAR CACHÉ
# ================================================
echo -e "${YELLOW}🧹 Paso 4: Limpiar Caché${NC}"
read -p "¿Deseas limpiar el caché del servidor? (s/n): " -n 1 -r
echo
if [[ $REPLY =~ ^[SsYy]$ ]]; then
    sshpass -p "$SERVER_PASSWORD" ssh "$SERVER_USER@$SERVER_HOST" << EOF
        cd $SERVER_PATH
        echo "Limpiando caché..."
        rm -rf storage/cache/*
        rm -rf storage/modification/*
        rm -rf storage/session/*
        echo "Caché limpiado:"
        ls -la storage/cache/ | wc -l
        ls -la storage/modification/ | wc -l
EOF
    echo -e "${GREEN}✅ Caché limpiado correctamente${NC}\n"
else
    echo -e "${YELLOW}⏭️  Saltando limpieza de caché${NC}\n"
fi

# ================================================
# 5. VERIFICACIÓN
# ================================================
echo -e "${YELLOW}🔍 Paso 5: Verificación${NC}"
read -p "¿Deseas ver los últimos suscriptores? (s/n): " -n 1 -r
echo
if [[ $REPLY =~ ^[SsYy]$ ]]; then
    sshpass -p "$SERVER_PASSWORD" ssh "$SERVER_USER@$SERVER_HOST" << EOF
        mysql -h localhost -u $DB_USER -p'$DB_PASSWORD' $DB_NAME -e "
        SELECT id, email_id, name, date 
        FROM oc_subscribe 
        ORDER BY date DESC 
        LIMIT 5;
        "
EOF
    echo -e "${GREEN}✅ Verificación completada${NC}\n"
else
    echo -e "${YELLOW}⏭️  Saltando verificación${NC}\n"
fi

# ================================================
# RESUMEN FINAL
# ================================================
echo -e "${BLUE}================================================${NC}"
echo -e "${GREEN}✅ ¡Despliegue Completado!${NC}"
echo -e "${BLUE}================================================${NC}\n"

echo -e "${YELLOW}📋 Próximos Pasos:${NC}"
echo -e "1. Probar la suscripción en: ${BLUE}https://hopuniverse.com${NC}"
echo -e "2. Verificar el email de bienvenida"
echo -e "3. Confirmar que incluye el código: ${GREEN}WELCOME10OFF${NC}"
echo -e "4. Crear el cupón en el panel de administración si aún no existe"
echo -e "5. Monitorear logs en: ${BLUE}storage/logs/error.log${NC}\n"

echo -e "${YELLOW}📧 Vista Previa del Email:${NC}"
echo -e "Abre: ${BLUE}database/EMAIL_PREVIEW.html${NC} en tu navegador\n"

echo -e "${YELLOW}📚 Documentación:${NC}"
echo -e "- ${BLUE}database/DEPLOY_WELCOME_EMAIL.md${NC}"
echo -e "- ${BLUE}README.md${NC}\n"

echo -e "${GREEN}🎉 ¡Listo para recibir suscriptores!${NC}\n"

