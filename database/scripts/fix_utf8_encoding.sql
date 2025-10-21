-- Script para corregir problemas de codificación UTF-8 en la base de datos
-- Este script convierte las tablas principales a utf8mb4 para soportar correctamente
-- todos los caracteres especiales, acentos, emojis, etc.

-- Convertir tabla oc_translation a utf8mb4
ALTER TABLE `oc_translation` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Opcional: Convertir otras tablas importantes
-- Descomentar si se necesitan:

-- ALTER TABLE `oc_category_description` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
-- ALTER TABLE `oc_product_description` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
-- ALTER TABLE `oc_information_description` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
-- ALTER TABLE `oc_blog_description` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Verificar la conversión
SELECT 
    table_name, 
    table_collation 
FROM 
    information_schema.tables 
WHERE 
    table_schema = 'hopuniverse_db' 
    AND table_name = 'oc_translation';

