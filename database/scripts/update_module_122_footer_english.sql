-- ============================================================================
-- Script: Actualizar Footer (Módulo 122) - Versión Inglés
-- Descripción: Corrige links, redes sociales y contenido del footer en inglés
-- Fecha: Octubre 2025
-- ============================================================================

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
				<a href="https://www.instagram.com/hopuniverse/" target="_blank" rel="noopener"><i class="fa fa-instagram"></i></a>
			</li>
			<li>
				<a href="https://www.tiktok.com/@hopuniverse" target="_blank" rel="noopener"><i class="fa fa-tiktok"></i></a>
			</li>
			<li>
				<a href="https://www.youtube.com/@hopuniverse" target="_blank" rel="noopener"><i class="fa fa-youtube-play"></i></a>
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

-- Verificar que se actualizó correctamente
SELECT 
    module_id, 
    name, 
    'Footer actualizado en inglés' as status,
    CHAR_LENGTH(JSON_EXTRACT(setting, '$.module_description."1".description')) as content_length
FROM oc_module 
WHERE module_id = 122;

