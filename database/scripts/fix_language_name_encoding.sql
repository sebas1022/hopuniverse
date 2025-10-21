-- Script para corregir el nombre del idioma Español en la tabla oc_language
-- Corrige "Espa�ol" a "Español" con codificación UTF-8MB4 correcta

UPDATE `oc_language` 
SET `name` = 'Español' 
WHERE `language_id` = 3 
AND `code` = 'es';

-- Verificar el cambio
SELECT 
    language_id,
    name,
    code,
    locale,
    status,
    sort_order
FROM 
    oc_language 
ORDER BY 
    language_id;

