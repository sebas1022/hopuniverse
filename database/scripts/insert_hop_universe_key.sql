-- Script para insertar la nueva clave "entry_title_hop" en ambos idiomas
-- Esta clave permite personalizar el título del newsletter con "Join the HOP Universe!"

-- Insertar en inglés (language_id = 1)
INSERT INTO `oc_translation` (`store_id`, `language_id`, `route`, `key`, `value`, `date_added`) VALUES
(0, 1, 'extension/module/newslettersubscribe', 'entry_title_hop', 'Join the HOP Universe!', NOW());

-- Insertar en español (language_id = 3)
INSERT INTO `oc_translation` (`store_id`, `language_id`, `route`, `key`, `value`, `date_added`) VALUES
(0, 3, 'extension/module/newslettersubscribe', 'entry_title_hop', '¡Únete al Universo HOP!', NOW());

-- Verificar las inserciones
SELECT 
    translation_id,
    language_id,
    route,
    `key`,
    value
FROM 
    oc_translation 
WHERE 
    `key` = 'entry_title_hop'
ORDER BY 
    language_id;
