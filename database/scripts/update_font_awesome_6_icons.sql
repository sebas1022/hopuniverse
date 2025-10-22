-- ============================================================================
-- Script: Actualizar iconos de Font Awesome 6
-- Descripción: Actualiza las clases de iconos de FA 4.7 a FA 6.5
-- Nota: Font Awesome 6 usa "fa-brands" para iconos de redes sociales
-- Fecha: Octubre 2025
-- ============================================================================

-- Actualizar módulo 122 - Footer en INGLÉS con iconos FA6
UPDATE oc_module 
SET setting = JSON_SET(
    setting,
    '$.module_description."1".description',
    '<div class="footer-column col-sm-12 col-md-4">
	<a href="/" class="logo-footer"><img src="/image/catalog/Logo_Home.png" style="max-width:200px" alt="HOP Universe Logo"></a>
	<p class="about-text">
		Welcome to the HOP Universe, where creativity and fun come together in every product. Join UFOgato on intergalactic adventures!
	</p>
	<ul class="bottom-menu">
		<li><a href="index.php?route=information/contact">Contact Us</a></li>
		<li><a href="index.php?route=information/information&amp;information_id=5">Terms</a></li>
		<li><a href="index.php?route=information/information&amp;information_id=3">Privacy</a></li>
	</ul>
	<p class="copyright">
		Copyright &copy; 2025&nbsp;<a href="https://frubik.com/" target="_blank" rel="noopener">Frubik</a>. All Rights Reserved.
	</p>
</div>

<div class="footer-column col-sm-12 col-md-2">
	<h3 class="footer-title">My Account</h3>
	<ul class="footer-menu">
		<li><a href="index.php?route=account/account">My Account</a></li>
		<li><a href="index.php?route=account/login">Login</a></li>
		<li><a href="index.php?route=checkout/cart">My Cart</a></li>
		<li><a href="index.php?route=account/wishlist">Wishlist</a></li>
		<li><a href="index.php?route=checkout/checkout">Checkout</a></li>
	</ul>
</div>

<div class="footer-column col-sm-12 col-md-2">
	<h3 class="footer-title">Information</h3>
	<ul class="footer-menu">
		<li>
			<a href="index.php?route=information/information&amp;information_id=4">About Us</a>
		</li>
		<li>
			<a href="index.php?route=information/information&amp;information_id=7">Information Link</a>
		</li>
		<li>
			<a href="index.php?route=information/information&amp;information_id=6">Delivery Information</a>
		</li>
		<li>
			<a href="index.php?route=information/information&amp;information_id=3">Privacy Policy</a>
		</li>
		<li>
			<a href="index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a>
		</li>
	</ul>
</div>

<div class="footer-column col-sm-12 col-md-4">
	<div class="social-icon">
		<p>Follow us:</p>
		<ul>
			<li>
				<a href="https://www.instagram.com/hopuniverse/" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a>
			</li>
			<li>
				<a href="https://www.tiktok.com/@hopuniverse" target="_blank" rel="noopener"><i class="fa-brands fa-tiktok"></i></a>
			</li>
			<li>
				<a href="https://www.youtube.com/@hopuniverse" target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a>
			</li>
		</ul>
	</div>
	<div class="payment">
		<p>Payment Methods:</p>
		<img src="image/catalog/payment-icon.png" alt="Payment methods available">
	</div>
</div>
'
)
WHERE module_id = 122;

-- Actualizar módulo 122 - Footer en ESPAÑOL con iconos FA6
UPDATE oc_module 
SET setting = JSON_SET(
    setting,
    '$.module_description."2".description',
    '<div class="footer-column col-sm-12 col-md-4">
	<a href="/" class="logo-footer"><img src="/image/catalog/Logo_Home.png" style="max-width:200px" alt="Logo HOP Universe"></a>
	<p class="about-text">
		Bienvenido al Universo HOP, donde la creatividad y la diversi&oacute;n se encuentran en cada producto. &iexcl;&Uacute;nete a UFOgato en aventuras intergal&aacute;cticas!
	</p>
	<ul class="bottom-menu">
		<li><a href="index.php?route=information/contact">Cont&aacute;ctanos</a></li>
		<li><a href="index.php?route=information/information&amp;information_id=5">T&eacute;rminos</a></li>
		<li><a href="index.php?route=information/information&amp;information_id=3">Privacidad</a></li>
	</ul>
	<p class="copyright">
		Copyright &copy; 2025&nbsp;<a href="https://frubik.com/" target="_blank" rel="noopener">Frubik</a>. Todos los Derechos Reservados.
	</p>
</div>

<div class="footer-column col-sm-12 col-md-2">
	<h3 class="footer-title">Mi Cuenta</h3>
	<ul class="footer-menu">
		<li><a href="index.php?route=account/account">Mi Cuenta</a></li>
		<li><a href="index.php?route=account/login">Iniciar Sesi&oacute;n</a></li>
		<li><a href="index.php?route=checkout/cart">Mi Carrito</a></li>
		<li><a href="index.php?route=account/wishlist">Lista de Deseos</a></li>
		<li><a href="index.php?route=checkout/checkout">Finalizar Compra</a></li>
	</ul>
</div>

<div class="footer-column col-sm-12 col-md-2">
	<h3 class="footer-title">Informaci&oacute;n</h3>
	<ul class="footer-menu">
		<li>
			<a href="index.php?route=information/information&amp;information_id=4">Sobre Nosotros</a>
		</li>
		<li>
			<a href="index.php?route=information/information&amp;information_id=7">Enlace de Informaci&oacute;n</a>
		</li>
		<li>
			<a href="index.php?route=information/information&amp;information_id=6">Informaci&oacute;n de Env&iacute;o</a>
		</li>
		<li>
			<a href="index.php?route=information/information&amp;information_id=3">Pol&iacute;tica de Privacidad</a>
		</li>
		<li>
			<a href="index.php?route=information/information&amp;information_id=5">T&eacute;rminos y Condiciones</a>
		</li>
	</ul>
</div>

<div class="footer-column col-sm-12 col-md-4">
	<div class="social-icon">
		<p>S&iacute;guenos:</p>
		<ul>
			<li>
				<a href="https://www.instagram.com/hopuniverse/" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a>
			</li>
			<li>
				<a href="https://www.tiktok.com/@hopuniverse" target="_blank" rel="noopener"><i class="fa-brands fa-tiktok"></i></a>
			</li>
			<li>
				<a href="https://www.youtube.com/@hopuniverse" target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a>
			</li>
		</ul>
	</div>
	<div class="payment">
		<p>M&eacute;todos de Pago:</p>
		<img src="image/catalog/payment-icon.png" alt="M&eacute;todos de pago disponibles">
	</div>
</div>
'
)
WHERE module_id = 122;

-- Verificar actualización
SELECT 
    'Font Awesome 6 icons updated' as status,
    module_id,
    name
FROM oc_module 
WHERE module_id = 122;

