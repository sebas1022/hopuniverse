<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');
 			
				$data['part_color_main'] = $this->config->get('part_color_main');
				$data['part_color_main2'] = $this->config->get('part_color_main2');
				$data['part_color_main3'] = $this->config->get('part_color_main3');
				$data['part_text_color'] = $this->config->get('part_text_color');
				$data['part_text_color2'] = $this->config->get('part_text_color2');
				$data['part_font'] = str_replace("+", " ", $this->config->get('part_font'));
				$data['part_custom_css'] = $this->config->get('part_custom_css');
				$data['part_custom_js'] = $this->config->get('part_custom_js');
				$this->load->language('account/login');
				$data['text_new_customer'] = $this->language->get('text_new_customer');
				$data['text_register'] = $this->language->get('text_register');
				$data['text_register_account'] = $this->language->get('text_register_account');
				$data['text_returning_customer'] = $this->language->get('text_returning_customer');
				$data['text_i_am_returning_customer'] = $this->language->get('text_i_am_returning_customer');
				$data['text_forgotten'] = $this->language->get('text_forgotten');
				$data['entry_email'] = $this->language->get('entry_email');
				$data['entry_password'] = $this->language->get('entry_password');
				$data['button_continue'] = $this->language->get('button_continue');
				$data['button_login'] = $this->language->get('button_login');
				if (isset($this->session->data['error'])) {
				$data['error_warning'] = $this->session->data['error'];
				unset($this->session->data['error']);
				} elseif (isset($this->error['warning'])) {
				$data['error_warning'] = $this->error['warning'];
				} else {
				$data['error_warning'] = '';}
				$data['action'] = $this->url->link('account/login', '', true);
				$data['register'] = $this->url->link('account/register', '', true);
				$data['forgotten'] = $this->url->link('account/forgotten', '', true);
				if (isset($this->request->post['redirect']) && (strpos($this->request->post['redirect'], $this->config->get('config_url')) !== false || strpos($this->request->post['redirect'], $this->config->get('config_ssl')) !== false)) {
				$data['redirect'] = $this->request->post['redirect'];
				} elseif (isset($this->session->data['redirect'])) {
				$data['redirect'] = $this->session->data['redirect'];
				unset($this->session->data['redirect']);
				} else {
				$data['redirect'] = '';}
				if (isset($this->session->data['success'])) {
				$data['success'] = $this->session->data['success'];
				unset($this->session->data['success']);
				} else {
				$data['success'] = '';}
				if (isset($this->request->post['email'])) {
				$data['email'] = $this->request->post['email'];
				} else {
				$data['email'] = '';}
				if (isset($this->request->post['password'])) {
				$data['password'] = $this->request->post['password'];
				} else {
				$data['password'] = '';}
				$this->load->language('product/category');
				$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
				$data['compare'] = $this->url->link('product/compare');
				$host = isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1')) ? HTTPS_SERVER : HTTP_SERVER;
				if ($this->request->server['REQUEST_URI'] == '/') {
				$data['og_url'] = $this->url->link('common/home');
				} else {
				$data['og_url'] = $host . substr($this->request->server['REQUEST_URI'], 1, (strlen($this->request->server['REQUEST_URI'])-1));}
				$this->load->model('setting/extension');
				$this->load->model('catalog/category');
				$data['categories'] = array();
				$categories = $this->model_catalog_category->getCategories(0);
				foreach ($categories as $category) {
				if ($category['top']) {
				$data['categories'][] = array(
				'name'  => $category['name'],
				'href'  => $this->url->link('product/category', 'path=' . $category['category_id']));}	
				if ($this->config->get('part_url')) {
				$data['part_url'] = array();
				$part_url = $this->config->get('part_url');
				foreach ($part_url as $result) {
				$data['part_url'][] = array(
				'title'  => $result['name'][$this->config->get('config_language_id')],
				'href'  => $result['url'][$this->config->get('config_language_id')]);}}}
				
 				
	if ($this->config->get('isotop_url')) {
	$data['isotop_url'] = array();
	$isotop_url = $this->config->get('isotop_url');
    foreach ($isotop_url as $result) {
    $data['isotop_url'][] = array(
    'title'     => $result['name'][$this->config->get('config_language_id')],
    'href'     => $result['url'][$this->config->get('config_language_id')]);}}
	$host = isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1')) ? HTTPS_SERVER : HTTP_SERVER;
	if ($this->request->server['REQUEST_URI'] == '/') {
	$data['og_url'] = $this->url->link('common/home');
	} else {
	$data['og_url'] = $host . substr($this->request->server['REQUEST_URI'], 1, (strlen($this->request->server['REQUEST_URI'])-1));}
	

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');

		return $this->load->view('common/header', $data);
	}
}
