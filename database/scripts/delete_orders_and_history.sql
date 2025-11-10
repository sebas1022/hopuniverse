-- =====================================================
-- Script para eliminar órdenes y su historial completo
-- OpenCart 3.0.3.8 - HopUniverse
-- =====================================================
-- 
-- IMPORTANTE: Este script elimina PERMANENTEMENTE todas las órdenes
-- y todos los datos relacionados. Hacer BACKUP antes de ejecutar.
--
-- Prefijo de tablas: oc_
-- =====================================================

-- =====================================================
-- OPCIÓN 1: Eliminar TODAS las órdenes
-- =====================================================
-- Descomentar las siguientes líneas para eliminar todas las órdenes:

/*
-- Eliminar transacciones de clientes relacionadas con órdenes
DELETE FROM `oc_customer_transaction` WHERE order_id > 0;

-- Eliminar transacciones de órdenes recurrentes
DELETE ort FROM `oc_order_recurring_transaction` ort
INNER JOIN `oc_order_recurring` or_rec ON ort.order_recurring_id = or_rec.order_recurring_id
WHERE or_rec.order_id > 0;

-- Eliminar órdenes recurrentes
DELETE FROM `oc_order_recurring` WHERE order_id > 0;

-- Eliminar historial de órdenes
DELETE FROM `oc_order_history` WHERE order_id > 0;

-- Eliminar totales de órdenes
DELETE FROM `oc_order_total` WHERE order_id > 0;

-- Eliminar vouchers de órdenes
DELETE FROM `oc_order_voucher` WHERE order_id > 0;

-- Eliminar opciones de productos de órdenes
DELETE FROM `oc_order_option` WHERE order_id > 0;

-- Eliminar productos de órdenes
DELETE FROM `oc_order_product` WHERE order_id > 0;

-- Eliminar órdenes principales
DELETE FROM `oc_order` WHERE order_id > 0;
*/

-- =====================================================
-- OPCIÓN 2: Eliminar órdenes por rango de IDs
-- =====================================================
-- Ejemplo: Eliminar órdenes del 1 al 100
-- Reemplazar los valores según necesidad

/*
SET @order_id_min = 1;
SET @order_id_max = 100;

-- Eliminar transacciones de clientes
DELETE FROM `oc_customer_transaction` 
WHERE order_id >= @order_id_min AND order_id <= @order_id_max;

-- Eliminar transacciones de órdenes recurrentes
DELETE ort FROM `oc_order_recurring_transaction` ort
INNER JOIN `oc_order_recurring` or_rec ON ort.order_recurring_id = or_rec.order_recurring_id
WHERE or_rec.order_id >= @order_id_min AND or_rec.order_id <= @order_id_max;

-- Eliminar órdenes recurrentes
DELETE FROM `oc_order_recurring` 
WHERE order_id >= @order_id_min AND order_id <= @order_id_max;

-- Eliminar historial de órdenes
DELETE FROM `oc_order_history` 
WHERE order_id >= @order_id_min AND order_id <= @order_id_max;

-- Eliminar totales de órdenes
DELETE FROM `oc_order_total` 
WHERE order_id >= @order_id_min AND order_id <= @order_id_max;

-- Eliminar vouchers de órdenes
DELETE FROM `oc_order_voucher` 
WHERE order_id >= @order_id_min AND order_id <= @order_id_max;

-- Eliminar opciones de productos de órdenes
DELETE FROM `oc_order_option` 
WHERE order_id >= @order_id_min AND order_id <= @order_id_max;

-- Eliminar productos de órdenes
DELETE FROM `oc_order_product` 
WHERE order_id >= @order_id_min AND order_id <= @order_id_max;

-- Eliminar órdenes principales
DELETE FROM `oc_order` 
WHERE order_id >= @order_id_min AND order_id <= @order_id_max;
*/

-- =====================================================
-- OPCIÓN 3: Eliminar órdenes por fecha
-- =====================================================
-- Ejemplo: Eliminar órdenes anteriores a una fecha específica
-- Reemplazar la fecha según necesidad

/*
SET @fecha_limite = '2024-01-01 00:00:00';

-- Eliminar transacciones de clientes
DELETE ct FROM `oc_customer_transaction` ct
INNER JOIN `oc_order` o ON ct.order_id = o.order_id
WHERE o.date_added < @fecha_limite;

-- Eliminar transacciones de órdenes recurrentes
DELETE ort FROM `oc_order_recurring_transaction` ort
INNER JOIN `oc_order_recurring` or_rec ON ort.order_recurring_id = or_rec.order_recurring_id
INNER JOIN `oc_order` o ON or_rec.order_id = o.order_id
WHERE o.date_added < @fecha_limite;

-- Eliminar órdenes recurrentes
DELETE or_rec FROM `oc_order_recurring` or_rec
INNER JOIN `oc_order` o ON or_rec.order_id = o.order_id
WHERE o.date_added < @fecha_limite;

-- Eliminar historial de órdenes
DELETE oh FROM `oc_order_history` oh
INNER JOIN `oc_order` o ON oh.order_id = o.order_id
WHERE o.date_added < @fecha_limite;

-- Eliminar totales de órdenes
DELETE ot FROM `oc_order_total` ot
INNER JOIN `oc_order` o ON ot.order_id = o.order_id
WHERE o.date_added < @fecha_limite;

-- Eliminar vouchers de órdenes
DELETE ov FROM `oc_order_voucher` ov
INNER JOIN `oc_order` o ON ov.order_id = o.order_id
WHERE o.date_added < @fecha_limite;

-- Eliminar opciones de productos de órdenes
DELETE oo FROM `oc_order_option` oo
INNER JOIN `oc_order` o ON oo.order_id = o.order_id
WHERE o.date_added < @fecha_limite;

-- Eliminar productos de órdenes
DELETE op FROM `oc_order_product` op
INNER JOIN `oc_order` o ON op.order_id = o.order_id
WHERE o.date_added < @fecha_limite;

-- Eliminar órdenes principales
DELETE FROM `oc_order` 
WHERE date_added < @fecha_limite;
*/

-- =====================================================
-- OPCIÓN 4: Eliminar órdenes por estado
-- =====================================================
-- Ejemplo: Eliminar órdenes con estado específico (ej: estado 0 = canceladas/anuladas)
-- Reemplazar el order_status_id según necesidad

/*
SET @order_status_id = 0; -- 0 = Canceladas/Anuladas

-- Eliminar transacciones de clientes
DELETE ct FROM `oc_customer_transaction` ct
INNER JOIN `oc_order` o ON ct.order_id = o.order_id
WHERE o.order_status_id = @order_status_id;

-- Eliminar transacciones de órdenes recurrentes
DELETE ort FROM `oc_order_recurring_transaction` ort
INNER JOIN `oc_order_recurring` or_rec ON ort.order_recurring_id = or_rec.order_recurring_id
INNER JOIN `oc_order` o ON or_rec.order_id = o.order_id
WHERE o.order_status_id = @order_status_id;

-- Eliminar órdenes recurrentes
DELETE or_rec FROM `oc_order_recurring` or_rec
INNER JOIN `oc_order` o ON or_rec.order_id = o.order_id
WHERE o.order_status_id = @order_status_id;

-- Eliminar historial de órdenes
DELETE oh FROM `oc_order_history` oh
INNER JOIN `oc_order` o ON oh.order_id = o.order_id
WHERE o.order_status_id = @order_status_id;

-- Eliminar totales de órdenes
DELETE ot FROM `oc_order_total` ot
INNER JOIN `oc_order` o ON ot.order_id = o.order_id
WHERE o.order_status_id = @order_status_id;

-- Eliminar vouchers de órdenes
DELETE ov FROM `oc_order_voucher` ov
INNER JOIN `oc_order` o ON ov.order_id = o.order_id
WHERE o.order_status_id = @order_status_id;

-- Eliminar opciones de productos de órdenes
DELETE oo FROM `oc_order_option` oo
INNER JOIN `oc_order` o ON oo.order_id = o.order_id
WHERE o.order_status_id = @order_status_id;

-- Eliminar productos de órdenes
DELETE op FROM `oc_order_product` op
INNER JOIN `oc_order` o ON op.order_id = o.order_id
WHERE o.order_status_id = @order_status_id;

-- Eliminar órdenes principales
DELETE FROM `oc_order` 
WHERE order_status_id = @order_status_id;
*/

-- =====================================================
-- OPCIÓN 5: Eliminar órdenes específicas por lista de IDs
-- =====================================================
-- Ejemplo: Eliminar órdenes con IDs específicos
-- Reemplazar la lista de IDs según necesidad

/*
-- Lista de IDs de órdenes a eliminar (separados por comas)
SET @order_ids = '1,2,3,4,5';

-- Eliminar transacciones de clientes
DELETE FROM `oc_customer_transaction` 
WHERE FIND_IN_SET(order_id, @order_ids) > 0;

-- Eliminar transacciones de órdenes recurrentes
DELETE ort FROM `oc_order_recurring_transaction` ort
INNER JOIN `oc_order_recurring` or_rec ON ort.order_recurring_id = or_rec.order_recurring_id
WHERE FIND_IN_SET(or_rec.order_id, @order_ids) > 0;

-- Eliminar órdenes recurrentes
DELETE FROM `oc_order_recurring` 
WHERE FIND_IN_SET(order_id, @order_ids) > 0;

-- Eliminar historial de órdenes
DELETE FROM `oc_order_history` 
WHERE FIND_IN_SET(order_id, @order_ids) > 0;

-- Eliminar totales de órdenes
DELETE FROM `oc_order_total` 
WHERE FIND_IN_SET(order_id, @order_ids) > 0;

-- Eliminar vouchers de órdenes
DELETE FROM `oc_order_voucher` 
WHERE FIND_IN_SET(order_id, @order_ids) > 0;

-- Eliminar opciones de productos de órdenes
DELETE FROM `oc_order_option` 
WHERE FIND_IN_SET(order_id, @order_ids) > 0;

-- Eliminar productos de órdenes
DELETE FROM `oc_order_product` 
WHERE FIND_IN_SET(order_id, @order_ids) > 0;

-- Eliminar órdenes principales
DELETE FROM `oc_order` 
WHERE FIND_IN_SET(order_id, @order_ids) > 0;
*/

-- =====================================================
-- TABLAS ADICIONALES DE EXTENSIONES (si existen)
-- =====================================================
-- Si tienes extensiones instaladas que crean tablas adicionales
-- relacionadas con órdenes, descomenta y ajusta según sea necesario:

/*
-- Ejemplo para extensiones de Amazon (si están instaladas):
DELETE FROM `oc_amazon_order` WHERE order_id > 0;
DELETE FROM `oc_amazon_order_product` WHERE order_product_id IN (
    SELECT order_product_id FROM `oc_order_product` WHERE order_id > 0
);

-- Ejemplo para extensiones de PayPal (si están instaladas):
DELETE FROM `oc_paypal_order` WHERE order_id > 0;
*/

-- =====================================================
-- VERIFICACIÓN: Consultas para verificar antes de eliminar
-- =====================================================
-- Ejecuta estas consultas para ver cuántas órdenes se eliminarán:

/*
-- Contar total de órdenes
SELECT COUNT(*) AS total_ordenes FROM `oc_order`;

-- Contar órdenes por estado
SELECT order_status_id, COUNT(*) AS cantidad 
FROM `oc_order` 
GROUP BY order_status_id;

-- Ver órdenes más antiguas
SELECT order_id, order_status_id, total, date_added 
FROM `oc_order` 
ORDER BY date_added ASC 
LIMIT 10;

-- Ver órdenes más recientes
SELECT order_id, order_status_id, total, date_added 
FROM `oc_order` 
ORDER BY date_added DESC 
LIMIT 10;
*/

-- =====================================================
-- FIN DEL SCRIPT
-- =====================================================

