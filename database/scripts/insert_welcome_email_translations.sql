-- ================================================
-- Script para agregar traducciones del Email de Bienvenida
-- HopUniverse - OpenCart 3.0.3.8
-- Fecha: 2025-10-22
-- ================================================

USE hopuniverse_db;

-- Eliminar traducciones existentes del email de bienvenida si existen
DELETE FROM oc_translation 
WHERE `key` LIKE 'welcome_%' 
AND route = 'extension/module/newslettersubscribe'
AND language_id IN (1, 3);

-- ================================================
-- TRADUCCIONES EN INGLÉS (language_id = 1)
-- ================================================

INSERT INTO oc_translation (language_id, route, `key`, value) VALUES
(1, 'extension/module/newslettersubscribe', 'welcome_subject', 'Welcome aboard the HOP Universe!'),
(1, 'extension/module/newslettersubscribe', 'welcome_greeting', 'Hey space traveler,'),
(1, 'extension/module/newslettersubscribe', 'welcome_intro', 'Welcome to the HOP Universe Crew!'),
(1, 'extension/module/newslettersubscribe', 'welcome_message', 'From now on, you\'ll receive exclusive stories, new launches, and sneak peeks from Hop and UFOgato\'s adventures.'),
(1, 'extension/module/newslettersubscribe', 'welcome_discount', 'As a welcome gift, here\'s your intergalactic 10% discount for your next purchase:'),
(1, 'extension/module/newslettersubscribe', 'welcome_code', '🎟️ Code: WELCOME10OFF'),
(1, 'extension/module/newslettersubscribe', 'welcome_use', '📦 Use it at: www.hopuniverse.com'),
(1, 'extension/module/newslettersubscribe', 'welcome_tip', 'UFOgato\'s tip: Keep it safe… those space Doritos have sticky paws!'),
(1, 'extension/module/newslettersubscribe', 'welcome_promise', 'We\'re thrilled to have you on board and promise to send only fun, creative, and positive updates — no cosmic spam!'),
(1, 'extension/module/newslettersubscribe', 'welcome_love', 'With love,'),
(1, 'extension/module/newslettersubscribe', 'welcome_team', 'The HOP Universe Crew'),
(1, 'extension/module/newslettersubscribe', 'welcome_signature', '💙 Hop & UFOgato'),
(1, 'extension/module/newslettersubscribe', 'welcome_footer', 'HOP Universe — Where fun and friendship are universal.');

-- ================================================
-- TRADUCCIONES EN ESPAÑOL (language_id = 3)
-- ================================================

INSERT INTO oc_translation (language_id, route, `key`, value) VALUES
(3, 'extension/module/newslettersubscribe', 'welcome_subject', '¡Bienvenido a bordo del Universo HOP!'),
(3, 'extension/module/newslettersubscribe', 'welcome_greeting', 'Hola viajero espacial,'),
(3, 'extension/module/newslettersubscribe', 'welcome_intro', '¡Bienvenido a la Tripulación del Universo HOP!'),
(3, 'extension/module/newslettersubscribe', 'welcome_message', 'De ahora en adelante, recibirás historias exclusivas, nuevos lanzamientos y avances de las aventuras de Hop y UFOgato.'),
(3, 'extension/module/newslettersubscribe', 'welcome_discount', 'Como regalo de bienvenida, aquí tienes tu descuento intergaláctico del 10% para tu próxima compra:'),
(3, 'extension/module/newslettersubscribe', 'welcome_code', '🎟️ Código: WELCOME10OFF'),
(3, 'extension/module/newslettersubscribe', 'welcome_use', '📦 Úsalo en: www.hopuniverse.com'),
(3, 'extension/module/newslettersubscribe', 'welcome_tip', 'Consejo de UFOgato: ¡Guárdalo bien… esos Doritos espaciales tienen patas pegajosas!'),
(3, 'extension/module/newslettersubscribe', 'welcome_promise', 'Estamos encantados de tenerte a bordo y prometemos enviarte solo actualizaciones divertidas, creativas y positivas — ¡sin spam cósmico!'),
(3, 'extension/module/newslettersubscribe', 'welcome_love', 'Con amor,'),
(3, 'extension/module/newslettersubscribe', 'welcome_team', 'La Tripulación del Universo HOP'),
(3, 'extension/module/newslettersubscribe', 'welcome_signature', '💙 Hop & UFOgato'),
(3, 'extension/module/newslettersubscribe', 'welcome_footer', 'HOP Universe — Donde la diversión y la amistad son universales.');

-- ================================================
-- VERIFICACIÓN
-- ================================================

SELECT 
    language_id,
    COUNT(*) as total_translations,
    CASE 
        WHEN language_id = 1 THEN 'Inglés'
        WHEN language_id = 3 THEN 'Español'
    END as idioma
FROM oc_translation 
WHERE `key` LIKE 'welcome_%' 
AND route = 'extension/module/newslettersubscribe'
GROUP BY language_id;

-- ================================================
-- RESULTADO ESPERADO
-- ================================================
-- language_id | total_translations | idioma
-- ------------|--------------------|---------
--      1      |         13         | Inglés
--      3      |         13         | Español
-- ================================================

