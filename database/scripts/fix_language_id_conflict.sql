-- Script para resolver conflicto de language_id
-- Fecha: 2025-01-22
-- Paso 1: Eliminar registros con language_id=2 (datos del tema que no necesitamos)
-- Paso 2: Cambiar language_id=3 a language_id=2 (nuestros datos en español)

-- PASO 1: Eliminar datos con language_id=2 (excepto oc_language)
DELETE FROM oc_article_description WHERE language_id = 2;
DELETE FROM oc_attribute_description WHERE language_id = 2;
DELETE FROM oc_attribute_group_description WHERE language_id = 2;
DELETE FROM oc_banner_image WHERE language_id = 2;
DELETE FROM oc_category_description WHERE language_id = 2;
DELETE FROM oc_cmsblock_description WHERE language_id = 2;
DELETE FROM oc_custom_field_description WHERE language_id = 2;
DELETE FROM oc_custom_field_value_description WHERE language_id = 2;
DELETE FROM oc_customer WHERE language_id = 2;
DELETE FROM oc_customer_group_description WHERE language_id = 2;
DELETE FROM oc_customer_search WHERE language_id = 2;
DELETE FROM oc_download_description WHERE language_id = 2;
DELETE FROM oc_filter_description WHERE language_id = 2;
DELETE FROM oc_filter_group_description WHERE language_id = 2;
DELETE FROM oc_information_description WHERE language_id = 2;
DELETE FROM oc_length_class_description WHERE language_id = 2;
DELETE FROM oc_ocslideshow_image_description WHERE language_id = 2;
DELETE FROM oc_option_description WHERE language_id = 2;
DELETE FROM oc_option_value_description WHERE language_id = 2;
DELETE FROM oc_order WHERE language_id = 2;
DELETE FROM oc_order_status WHERE language_id = 2;
DELETE FROM oc_product_attribute WHERE language_id = 2;
DELETE FROM oc_product_description WHERE language_id = 2;
DELETE FROM oc_recurring_description WHERE language_id = 2;
DELETE FROM oc_return_action WHERE language_id = 2;
DELETE FROM oc_return_reason WHERE language_id = 2;
DELETE FROM oc_return_status WHERE language_id = 2;
DELETE FROM oc_seo_url WHERE language_id = 2;
DELETE FROM oc_stock_status WHERE language_id = 2;
DELETE FROM oc_testimonial_description WHERE language_id = 2;
DELETE FROM oc_translation WHERE language_id = 2;
DELETE FROM oc_voucher_theme_description WHERE language_id = 2;
DELETE FROM oc_weight_class_description WHERE language_id = 2;

-- PASO 2: Cambiar language_id de 3 a 2
UPDATE oc_article_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_attribute_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_attribute_group_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_banner_image SET language_id = 2 WHERE language_id = 3;
UPDATE oc_category_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_cmsblock_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_custom_field_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_custom_field_value_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_customer SET language_id = 2 WHERE language_id = 3;
UPDATE oc_customer_group_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_customer_search SET language_id = 2 WHERE language_id = 3;
UPDATE oc_download_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_filter_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_filter_group_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_information_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_length_class_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_ocslideshow_image_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_option_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_option_value_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_order SET language_id = 2 WHERE language_id = 3;
UPDATE oc_order_status SET language_id = 2 WHERE language_id = 3;
UPDATE oc_product_attribute SET language_id = 2 WHERE language_id = 3;
UPDATE oc_product_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_recurring_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_return_action SET language_id = 2 WHERE language_id = 3;
UPDATE oc_return_reason SET language_id = 2 WHERE language_id = 3;
UPDATE oc_return_status SET language_id = 2 WHERE language_id = 3;
UPDATE oc_seo_url SET language_id = 2 WHERE language_id = 3;
UPDATE oc_stock_status SET language_id = 2 WHERE language_id = 3;
UPDATE oc_testimonial_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_translation SET language_id = 2 WHERE language_id = 3;
UPDATE oc_voucher_theme_description SET language_id = 2 WHERE language_id = 3;
UPDATE oc_weight_class_description SET language_id = 2 WHERE language_id = 3;

-- Fin del script

