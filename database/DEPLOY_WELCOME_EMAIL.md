# 🚀 Guía de Despliegue - Email de Bienvenida

## 📋 Resumen
Este despliegue agrega funcionalidad de email de bienvenida automático cuando los usuarios se suscriben al newsletter de HopUniverse.

**Fecha**: 22 de Octubre, 2025  
**Desarrollador**: Sebas  
**Versión**: 1.0

## ✨ Nuevas Características

### Email de Bienvenida Automático
- ✅ Email HTML responsive con diseño espacial
- ✅ Código de descuento del 10% (WELCOME10OFF)
- ✅ Versión bilingüe (inglés/español)
- ✅ Links a redes sociales
- ✅ Temática UFOgato y HOP

## 📁 Archivos Modificados

### Controladores
- `upload/catalog/controller/extension/module/newslettersubscribe.php`
  - Agregado método `getWelcomeEmailHtml()`
  - Agregado método `sendWelcomeEmail()`
  - Modificado método `subscribe()` para enviar email de bienvenida
  - Modificado método `subscribepopup()` para enviar email de bienvenida

### Archivos de Idioma
- `upload/catalog/language/en-gb/extension/module/newslettersubscribe.php`
  - Agregadas 13 claves de traducción para email en inglés
  
- `upload/catalog/language/es/extension/module/newslettersubscribe.php`
  - Agregadas 13 claves de traducción para email en español

### Scripts SQL
- `database/scripts/insert_welcome_email_translations.sql` (nuevo)
  - Script para insertar traducciones en la base de datos

### Documentación
- `README.md` - Actualizado con nueva funcionalidad
- `database/DEPLOY_WELCOME_EMAIL.md` (este archivo)

## 🔧 Pasos de Despliegue

### 1️⃣ Commit y Push Local
```bash
cd /Users/sebaspc/Documents/develop/frubik/sites/hopuniverse

# Agregar todos los cambios
git add -A

# Commit con mensaje descriptivo
git commit -m "✨ Agregar email de bienvenida automático con cupón WELCOME10OFF"

# Push al repositorio
git push origin main
```

### 2️⃣ Actualizar Código en el Servidor
```bash
# Conectar por SSH
sshpass -p '#L1nd0sn3n3s#' ssh root@212.1.213.68

# Ir al directorio del proyecto
cd /var/www/hopuniverse.com

# Hacer pull de los cambios
git pull origin main

# Verificar que los archivos se actualizaron
ls -la upload/catalog/controller/extension/module/newslettersubscribe.php
```

### 3️⃣ Ejecutar Script SQL
```bash
# Desde el servidor, ejecutar el script de traducciones
mysql -h localhost -u hopuniverse_user -p'HopUniverse2025!' hopuniverse_db < database/scripts/insert_welcome_email_translations.sql

# Verificar que se insertaron las traducciones
mysql -h localhost -u hopuniverse_user -p'HopUniverse2025!' hopuniverse_db -e "
SELECT 
    CASE 
        WHEN language_id = 1 THEN 'Inglés'
        WHEN language_id = 3 THEN 'Español'
    END as idioma,
    COUNT(*) as total
FROM oc_translation 
WHERE \`key\` LIKE 'welcome_%' 
AND route = 'extension/module/newslettersubscribe'
GROUP BY language_id;
"
```

**Resultado esperado:**
```
+---------+-------+
| idioma  | total |
+---------+-------+
| Inglés  |    13 |
| Español |    13 |
+---------+-------+
```

### 4️⃣ Limpiar Caché
```bash
# Desde el servidor
cd /var/www/hopuniverse.com

# Limpiar caché de OpenCart
rm -rf storage/cache/*
rm -rf storage/modification/*
rm -rf storage/session/*

# Verificar que se limpiaron
ls -la storage/cache/
ls -la storage/modification/
```

### 5️⃣ Verificar Configuración SMTP

Asegurarse de que el sistema de correo esté configurado correctamente en el admin de OpenCart:

1. Ir a **System → Settings → Edit → Mail**
2. Verificar configuración SMTP:
   - Mail Protocol: SMTP (recomendado) o Mail
   - Mail Parameters: (según configuración del servidor)
   - SMTP Hostname
   - SMTP Username
   - SMTP Password
   - SMTP Port
   - SMTP Timeout

### 6️⃣ Prueba de Funcionalidad

#### Opción A: Desde el Frontend
1. Ir a https://hopuniverse.com
2. Suscribirse al newsletter con un email de prueba
3. Verificar que se recibe el email de bienvenida
4. Confirmar que incluye:
   - ✅ Diseño con colores de la marca
   - ✅ Código de descuento WELCOME10OFF
   - ✅ Links a redes sociales
   - ✅ Tip de UFOgato

#### Opción B: Verificar Logs
```bash
# Ver logs del sistema (si hay errores)
tail -f storage/logs/error.log

# Verificar que no hay errores de envío de email
grep "Failed to send welcome email" storage/logs/error.log
```

## 🧪 Testing

### Test 1: Suscripción Normal
- Email: test1@example.com
- Nombre: Test User 1
- Verificar email de bienvenida

### Test 2: Suscripción desde Popup
- Email: test2@example.com  
- Nombre: Test User 2
- Verificar email de bienvenida

### Test 3: Usuario Registrado
- Email de usuario ya registrado
- Verificar email de bienvenida

### Test 4: Email Duplicado
- Intentar suscribir email ya existente
- NO debe enviar email de bienvenida

## 📊 Verificación de Base de Datos

```sql
-- Ver suscriptores recientes
SELECT * FROM oc_subscribe ORDER BY date DESC LIMIT 10;

-- Ver traducciones del email de bienvenida
SELECT 
    t.language_id,
    l.name as idioma,
    t.key,
    t.value
FROM oc_translation t
LEFT JOIN oc_language l ON t.language_id = l.language_id
WHERE t.route = 'extension/module/newslettersubscribe'
AND t.key LIKE 'welcome_%'
ORDER BY t.language_id, t.key;
```

## 🔄 Rollback (en caso de problemas)

Si algo sale mal, seguir estos pasos:

### 1. Revertir cambios en Git
```bash
cd /var/www/hopuniverse.com
git log --oneline -5  # Ver últimos commits
git revert HEAD  # Revertir último commit
```

### 2. Eliminar traducciones
```sql
DELETE FROM oc_translation 
WHERE `key` LIKE 'welcome_%' 
AND route = 'extension/module/newslettersubscribe';
```

### 3. Limpiar caché
```bash
rm -rf storage/cache/* storage/modification/* storage/session/*
```

## ✅ Checklist de Despliegue

- [ ] Commit y push local realizado
- [ ] Git pull en servidor ejecutado
- [ ] Script SQL ejecutado correctamente
- [ ] Traducciones verificadas en BD (26 registros totales)
- [ ] Caché limpiado
- [ ] Configuración SMTP verificada
- [ ] Prueba de suscripción realizada
- [ ] Email de bienvenida recibido
- [ ] Contenido del email verificado
- [ ] Código de cupón incluido
- [ ] Links a redes sociales funcionan
- [ ] Diseño responsive verificado

## 📝 Notas Adicionales

### Código de Cupón
El código **WELCOME10OFF** debe ser creado en el panel de administración de OpenCart:

1. Marketing → Coupons → Add New
2. Coupon Name: Welcome 10% OFF
3. Code: WELCOME10OFF
4. Type: Percentage
5. Discount: 10
6. Total Amount: 0 (sin mínimo)
7. Status: Enabled
8. Date Start: Fecha actual
9. Date End: (opcional, sin fecha de expiración)

### Personalización Futura
Si el cliente desea cambiar el contenido del email, editar las claves de traducción en:
- Base de datos: Tabla `oc_translation`
- Archivos de idioma: `upload/catalog/language/*/extension/module/newslettersubscribe.php`

### Monitoreo
Revisar periódicamente:
- Logs de errores de envío de email
- Tasa de apertura de emails (si se implementa tracking)
- Uso del cupón WELCOME10OFF

## 🆘 Soporte

En caso de problemas:
- **Email**: sebas.1022@gmail.com
- **Logs**: `/var/www/hopuniverse.com/storage/logs/error.log`
- **Documentación**: Este archivo y README.md

---

**Estado**: ✅ Listo para Despliegue  
**Última actualización**: 22 de Octubre, 2025  
**Tiempo estimado de despliegue**: 15-20 minutos

