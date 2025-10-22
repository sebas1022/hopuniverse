-- Script para diagnosticar el módulo HTML #122
-- HopUniverse - Octubre 2025

-- 1. Ver información completa del módulo
SELECT 
    module_id,
    name,
    code,
    CHAR_LENGTH(setting) as setting_size_bytes,
    JSON_VALID(setting) as is_valid_json,
    setting
FROM oc_module
WHERE module_id = 122;

-- 2. Ver todos los módulos HTML
SELECT 
    module_id,
    name,
    code,
    CHAR_LENGTH(setting) as setting_size,
    JSON_VALID(setting) as valid_json
FROM oc_module
WHERE code = 'html'
ORDER BY module_id;

-- 3. Ver layouts donde está asignado el módulo
SELECT 
    lm.layout_module_id,
    lm.layout_id,
    l.name as layout_name,
    lm.position,
    lm.code,
    lm.sort_order
FROM oc_layout_module lm
LEFT JOIN oc_layout l ON l.layout_id = lm.layout_id
WHERE lm.code LIKE '%122%'
ORDER BY lm.layout_id, lm.sort_order;

-- 4. Ver idiomas disponibles
SELECT 
    language_id,
    name,
    code,
    locale,
    status
FROM oc_language
ORDER BY sort_order;

-- 5. Verificar si el módulo tiene datos para cada idioma
-- Nota: Esto requiere parsear el JSON, así que es informativo
SELECT 
    module_id,
    name,
    JSON_EXTRACT(setting, '$.module_description') as module_descriptions,
    JSON_EXTRACT(setting, '$.status') as status
FROM oc_module
WHERE module_id = 122;

