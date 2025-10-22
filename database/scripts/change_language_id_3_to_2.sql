-- Script para cambiar language_id de 3 a 2 (Español)
-- Fecha: 2025-01-22
-- Propósito: Ajustar IDs de idioma para compatibilidad con tema tt_aboss2

-- 1. Actualizar tabla de idiomas
UPDATE oc_language SET language_id = 2 WHERE language_id = 3;

-- 2. Actualizar todas las tablas con language_id
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

