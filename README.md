# 🚀 HopUniverse - E-commerce Platform

## 📋 Información General

**HopUniverse** es una plataforma de e-commerce desarrollada con OpenCart 3.0.3.8, configurada específicamente para el mercado colombiano con temática espacial e intergaláctica.

- **URL**: https://hopuniverse.com
- **Versión**: OpenCart 3.0.3.8
- **Idioma Principal**: Español (Colombia)
- **Moneda**: Peso Colombiano (COP)
- **Temática**: Universo HOP y UFOgato

## 🏗️ Arquitectura del Proyecto

### 📁 Estructura de Directorios
```
hopuniverse/
├── upload/                          # Código fuente de OpenCart
│   ├── admin/                       # Panel de administración
│   ├── catalog/                     # Catálogo público
│   │   ├── language/                # Archivos de idioma
│   │   │   ├── en-gb/              # Inglés
│   │   │   └── es/                 # Español
│   │   └── view/theme/tt_aboss2/   # Tema personalizado
│   └── system/                      # Sistema core de OpenCart
├── database/                        # Scripts y backups de BD
│   ├── backups/                     # Respaldos de base de datos
│   └── scripts/                     # Scripts SQL para mantenimiento
├── storage/                         # Caché, sesiones y logs
└── README.md                        # Este archivo
```

### 🎨 Personalización Visual

#### Colores del Tema
- **Color Principal**: `#222e3c` (Azul oscuro espacial)
- **Color Hover**: `#6DADCB` (Azul claro intergaláctico)
- **Color Anterior**: `#dd3a3f` (Rojo - reemplazado)

#### Archivos CSS Modificados
- `stylesheet.css` (principal)
- `custommenu.css`
- `ocslideshow.css`
- `ocquickview.css`
- `oclayerednavigation.css`
- `ocblog.css`
- `ocajaxlogin.css`
- `layoutproducts.css`

## 🌍 Sistema de Traducciones

### 📊 Idiomas Disponibles
- **Español** (language_id: 3) - Idioma principal
- **Inglés** (language_id: 1) - Idioma secundario

### 🔧 Módulos Traducidos
| Módulo | Claves | Descripción |
|--------|--------|-------------|
| `newslettersubscribe` | 15 | Suscripción al boletín |
| `ocajaxlogin` | 1 | Login AJAX |
| `ocfeaturedcategory` | 2 | Categorías destacadas |
| `ochozmegamenu` | 4 | Menú horizontal |
| `oclayerednavigation` | 2 | Navegación por capas |
| `ocproducts` | 16 | Módulo de productos |
| `ocslideshow` | 1 | Carrusel de imágenes |
| `octabproducts` | 16 | Productos en pestañas |
| `octestimonial` | 3 | Testimonios |
| `blog/article` | 2 | Artículos del blog |
| `blog/blog` | 6 | Página principal del blog |

### 🎯 Newsletter Personalizado

#### Inglés
- **Título**: "Join the HOP Universe!"
- **Descripción**: "Get intergalactic updates, exclusive sneak peeks, and be the first to discover the new adventures of HOP and UFOgato. We promise not to spam you from another dimension!"

#### Español
- **Título**: "¡Únete al Universo HOP!"
- **Descripción**: "Recibe actualizaciones interestelares, avances exclusivos y sé el primero en descubrir las nuevas aventuras de HOP y UFOgato. ¡Prometemos no spamearte desde otra dimensión!"

### 📧 Email de Bienvenida

Cuando un usuario se suscribe al newsletter, automáticamente recibe un email de bienvenida personalizado con:

- **Saludo personalizado** con temática espacial
- **Código de descuento**: `WELCOME10OFF` (10% de descuento)
- **Diseño responsive** con colores de la marca (#222e3c y #6DADCB)
- **Links a redes sociales** (Instagram, TikTok, YouTube)
- **Versión bilingüe** (inglés y español automático según idioma del sitio)

#### Características del Email:
- Diseño HTML con gradientes espaciales
- Compatible con clientes de email modernos
- Incluye código de cupón de bienvenida
- Tip divertido de UFOgato
- Footer con copyright y redes sociales

## 🗄️ Base de Datos

### 📊 Configuración
- **Host**: localhost
- **Usuario**: hopuniverse_user
- **Base de Datos**: hopuniverse_db
- **Prefijo**: oc_
- **Charset**: utf8mb4_unicode_ci

### 🔧 Scripts Disponibles
- `insert_newslettersubscribe_translations.sql` - Traducciones del newsletter
- `insert_welcome_email_translations.sql` - Traducciones del email de bienvenida
- `insert_all_translations.sql` - Todas las traducciones en español
- `insert_all_translations_english.sql` - Todas las traducciones en inglés
- `fix_utf8_encoding.sql` - Corrección de codificación UTF-8
- `fix_language_name_encoding.sql` - Corrección del nombre del idioma
- `set_admin_limit_100.sql` - Configurar 100 registros por página
- `test_translation_endpoint.php` - Prueba del endpoint de traducciones

## 🚀 Despliegue

### 🔐 Credenciales de Acceso

#### SSH
```bash
sshpass -p '#L1nd0sn3n3s#' ssh root@212.1.213.68
```

#### Base de Datos
```bash
mysql -h localhost -u hopuniverse_user -p'HopUniverse2025!' hopuniverse_db
```

#### Admin Panel
- **URL**: https://hopuniverse.com/admin/
- **Usuario**: admin
- **Email**: sebas.1022@gmail.com

### 🔄 Comandos de Sincronización

#### Git Local → Remoto
```bash
git add -A
git commit -m "Descripción del cambio"
git push
```

#### Servidor
```bash
ssh root@212.1.213.68 "cd /var/www/hopuniverse.com && git pull"
```

#### Limpiar Caché
```bash
rm -rf storage/cache/* storage/modification/* storage/session/*
```

## ⚙️ Configuración del Sistema

### 🌐 Configuración Regional
- **País**: Colombia
- **Idioma**: Español (es)
- **Moneda**: Peso Colombiano (COP)
- **Zona Horaria**: UTC (no cambiar a America/Bogota)

### 💳 Métodos de Pago
- **COD** (Contra Entrega)
- **ePayco**
- **Gratis**

### 🎨 Tema
- **Nombre**: tt_aboss2
- **Personalizado**: Sí
- **Responsive**: Sí

## 🔧 Mantenimiento

### 📋 Tareas Regulares
1. **Backup de BD**: Semanal
2. **Limpieza de caché**: Después de cambios
3. **Actualización de traducciones**: Según necesidades
4. **Monitoreo de logs**: Diario

### 🚨 Solución de Problemas

#### Problema de Acentos
```bash
# 1. Eliminar traducciones incorrectas
mysql -e "DELETE FROM oc_translation WHERE language_id = 3;"

# 2. Convertir tabla a UTF8MB4
mysql < database/scripts/fix_utf8_encoding.sql

# 3. Re-insertar traducciones
mysql --default-character-set=utf8mb4 < database/scripts/insert_all_translations.sql

# 4. Limpiar caché
rm -rf storage/cache/* storage/modification/*
```

#### Problema de Paginación
- **Síntoma**: Error "Página no encontrada" en página 2+
- **Solución**: Ya corregido en el controlador

#### Problema de Validación de Traducciones
- **Síntoma**: No se pueden editar claves desde el admin
- **Solución**: Ya corregido en el controlador y modelo

#### Problema de Módulo HTML No Guarda
- **Síntoma**: El módulo HTML muestra éxito al guardar pero los cambios no persisten
- **Solución**: Ya corregido - el caché se limpia automáticamente al guardar

## 📈 Estado del Proyecto

### ✅ Completado
- [x] Configuración inicial de OpenCart
- [x] Personalización de colores
- [x] Sistema de traducciones bilingüe
- [x] Configuración para Colombia
- [x] Optimización de métodos de pago
- [x] Newsletter personalizado
- [x] Email de bienvenida automático con cupón
- [x] Corrección de problemas de codificación
- [x] Sistema de respaldos
- [x] Documentación completa
- [x] Corrección de módulo HTML con limpieza automática de caché

### 🔄 En Progreso
- [ ] Optimización de rendimiento
- [ ] SEO avanzado
- [ ] Analytics y métricas

### 📋 Pendiente
- [ ] Integración con redes sociales
- [ ] Sistema de cupones
- [ ] Programa de afiliados
- [ ] App móvil

## 👥 Equipo de Desarrollo

- **Desarrollador Principal**: Sebas
- **Email**: sebas.1022@gmail.com
- **Cliente**: HopUniverse
- **Temática**: Universo HOP y UFOgato

## 📞 Soporte

Para soporte técnico o consultas sobre el proyecto:
- **Email**: sebas.1022@gmail.com
- **Repositorio**: github.com:sebas1022/hopuniverse.git

---

**Última actualización**: Octubre 2025  
**Versión del documento**: 1.0  
**Estado**: Producción ✅
