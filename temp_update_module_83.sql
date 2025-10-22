-- Actualizar módulo 83 con entidades HTML para tildes
UPDATE oc_module 
SET setting = JSON_SET(
    setting,
    '$.module_description."2".description',
    '<div class="newsletter-text"><h5><b>OFERTAS ESPECIALES</b> PARA MIEMBROS DE HOP</h5>\n\t<h3>&iexcl;10% de descuento intergal&aacute;ctico para nuevos reclutas!</h3>\n\tSuscr&iacute;bete al bolet&iacute;n de HOP Universe y mantente al tanto de nuestras &uacute;ltimas novedades, historias exclusivas y colecciones de edici&oacute;n limitada.<br><p>Porque incluso en el espacio... &iexcl;hay grandes ofertas!</p>\n</div>'
)
WHERE module_id = 83;

