-- Actualizar módulo 83 con el nuevo HTML en español
UPDATE oc_module 
SET setting = JSON_SET(
    setting,
    '$.module_description."2".description',
    '<div class="newsletter-text"><h5><b>OFERTAS ESPECIALES</b> PARA MIEMBROS DE HOP</h5>\n\t<h3>¡10% de descuento intergaláctico para nuevos reclutas!</h3>\n\tSuscríbete al boletín de HOP Universe y mantente al tanto de nuestras últimas novedades, historias exclusivas y colecciones de edición limitada.<br><p>Porque incluso en el espacio... ¡hay grandes ofertas!</p>\n</div>'
)
WHERE module_id = 83;

