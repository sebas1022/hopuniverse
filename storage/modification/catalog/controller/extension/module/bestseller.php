<?php
class ControllerExtensionModuleBestSeller extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/bestseller');

		$this->load->model('catalog/product');
$data['mod'] = 'li-' . mt_rand(1, 99) . mt_rand(100, 999);

		$this->load->model('tool/image');

		$data['products'] = array();

		$results = $this->model_catalog_product->getBestSellerProducts($setting['limit']);

		if ($results) {
			foreach ($results as $result) {
				
				$results_img = $this->model_catalog_product->getProductImages($result['product_id']);
				$additional_img = array();
				foreach ($results_img as $result_img) {
				if ($result_img['image']) {
				$additional_image = HTTP_SERVER.'image/'.$result_img['image'];
				} else {
				$additional_image = false;}
				$additional_img[] = $additional_image;}
				
				if ($result['image']) {
					$image = HTTP_SERVER.'image/'.$result['image'];
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if (!is_null($result['special']) && (float)$result['special'] >= 0) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$tax_price = (float)$result['special'];
				} else {
					$special = false;
					$tax_price = (float)$result['price'];
				}
	
				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format($tax_price, $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}

				
				if ($special) {
				$action_percent = 100-round($result['special']/$result['price']*100, 0);
				} else {
				$action_percent = "0";}
				$data['products'][] = array(
				'action_percent' => $action_percent,
				
					'product_id'  => $result['product_id'],
'quantity' => $result['quantity'],
'quantity' => $result['quantity'],
					'thumb'       => $image,
'additional_img' => $additional_img,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}

			return $this->load->view('extension/module/bestseller', $data);
		}
	}
}
