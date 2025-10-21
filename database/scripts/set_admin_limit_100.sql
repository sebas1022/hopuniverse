-- Script para cambiar el límite de registros por página en el admin a 100
-- Esto afecta a todas las páginas del admin que usan paginación
-- (productos, categorías, clientes, pedidos, traducciones, etc.)

UPDATE `oc_setting` 
SET `value` = '100' 
WHERE `key` = 'config_limit_admin' 
AND `store_id` = 0;

-- Verificar el cambio
SELECT 
    setting_id,
    store_id,
    `key`,
    `value`,
    'Registros por página en Admin' as descripcion
FROM 
    oc_setting 
WHERE 
    `key` = 'config_limit_admin';

