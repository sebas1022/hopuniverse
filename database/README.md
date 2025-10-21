# 📁 Database - HopUniverse

Esta carpeta contiene todos los recursos relacionados con la base de datos del proyecto HopUniverse.

## 📂 Estructura

```
database/
├── backups/          # Respaldos de la base de datos
│   └── *.sql.gz     # Archivos comprimidos de respaldos
├── scripts/          # Scripts SQL para mantenimiento y updates
│   ├── insert_newslettersubscribe_translations.sql
│   └── insert_all_translations.sql
└── README.md        # Este archivo
```

## 🔧 Scripts Disponibles

### 1. `insert_newslettersubscribe_translations.sql`
Inserta las traducciones al español del módulo de suscripción al boletín.

**Uso:**
```bash
mysql -h localhost -u hopuniverse_user -p'HopUniverse2025!' hopuniverse_db --default-character-set=utf8mb4 < database/scripts/insert_newslettersubscribe_translations.sql
```

**En el servidor:**
```bash
sshpass -p '#L1nd0sn3n3s#' ssh root@212.1.213.68 "mysql -h localhost -u hopuniverse_user -p'HopUniverse2025!' hopuniverse_db --default-character-set=utf8mb4" < database/scripts/insert_newslettersubscribe_translations.sql
```

**⚠️ IMPORTANTE:** Siempre usar `--default-character-set=utf8mb4` para evitar problemas de codificación con acentos.

### 2. `insert_all_translations.sql`
Inserta las traducciones al español de todos los módulos del tema y blog.

**Módulos incluidos:**
- ocajaxlogin
- ocfeaturedcategory
- ochozmegamenu
- oclayerednavigation
- ocproducts
- ocslideshow
- octabproducts
- octestimonial
- blog/article
- blog/blog

**Uso:**
```bash
mysql -h localhost -u hopuniverse_user -p'HopUniverse2025!' hopuniverse_db --default-character-set=utf8mb4 < database/scripts/insert_all_translations.sql
```

**En el servidor:**
```bash
sshpass -p '#L1nd0sn3n3s#' ssh root@212.1.213.68 "mysql -h localhost -u hopuniverse_user -p'HopUniverse2025!' hopuniverse_db --default-character-set=utf8mb4" < database/scripts/insert_all_translations.sql
```

**⚠️ IMPORTANTE:** Siempre usar `--default-character-set=utf8mb4` para evitar problemas de codificación con acentos.

## 💾 Backups

Los respaldos se guardan en la carpeta `backups/` con el formato:
```
YYYY-MM-DD-hopuniverse-descripcion.sql.gz
```

### Crear un nuevo backup:
```bash
ssh root@212.1.213.68 "mysqldump -h localhost -u hopuniverse_user -p'HopUniverse2025!' hopuniverse_db | gzip > /tmp/backup-$(date +%Y-%m-%d).sql.gz"
scp root@212.1.213.68:/tmp/backup-$(date +%Y-%m-%d).sql.gz database/backups/
```

### Restaurar un backup:
```bash
gunzip < database/backups/backup-YYYY-MM-DD.sql.gz | mysql -h localhost -u hopuniverse_user -p'HopUniverse2025!' hopuniverse_db
```

## 📝 Notas

- Todos los scripts usan `language_id = 3` (Español)
- Los scripts usan `store_id = 0` (Tienda por defecto)
- Las traducciones se insertan en la tabla `oc_translation`
- Después de ejecutar scripts, limpiar caché: `rm -rf storage/cache/*`

## 🔧 Solución de Problemas

### Problema de Acentos (mÃ¡s, AÃ±o, DÃ­a)

Si ves caracteres mal codificados, sigue estos pasos:

1. **Eliminar traducciones incorrectas:**
```bash
mysql -h localhost -u hopuniverse_user -p'HopUniverse2025!' hopuniverse_db -e "DELETE FROM oc_translation WHERE language_id = 3;"
```

2. **Convertir tabla a UTF8MB4:**
```bash
mysql -h localhost -u hopuniverse_user -p'HopUniverse2025!' hopuniverse_db < database/scripts/fix_utf8_encoding.sql
```

3. **Re-insertar traducciones con charset correcto:**
```bash
mysql -h localhost -u hopuniverse_user -p'HopUniverse2025!' hopuniverse_db --default-character-set=utf8mb4 < database/scripts/insert_newslettersubscribe_translations.sql
mysql -h localhost -u hopuniverse_user -p'HopUniverse2025!' hopuniverse_db --default-character-set=utf8mb4 < database/scripts/insert_all_translations.sql
```

4. **Limpiar caché:**
```bash
rm -rf storage/cache/* storage/modification/*
```

### Cambios Realizados

- ✅ Driver PDO actualizado a `utf8mb4`
- ✅ Driver MySQLi actualizado a `utf8mb4`
- ✅ Tabla `oc_translation` convertida a `utf8mb4_unicode_ci`
- ✅ Scripts SQL configurados para usar charset correcto

## 🔗 Conexión a la Base de Datos

**Host:** localhost  
**Usuario:** hopuniverse_user  
**Password:** HopUniverse2025!  
**Database:** hopuniverse_db  
**Prefijo:** oc_

