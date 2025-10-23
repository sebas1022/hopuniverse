<?php
class ControllerExtensionPaymentPayco extends Controller {
	public function index() {
		$this->load->language('extension/payment/payco');

		$data['button_confirm'] = $this->language->get('button_confirm');

		$this->load->model('checkout/order');

		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
		$data['action']='https://secure.payco.co/payment.php';
		$data['p_cust_id_cliente'] = $this->config->get('payment_payco_merchant');
		//$data['p_id_factura'] = $this->session->data['order_id'];
		$data['p_timestamp'] = time();
		$data['p_amount'] = $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false);
		//$data['x_fp_hash'] = null; // calculated later, once all fields are populated
		$data['p_tax'] = 0;
		$data['p_amount_base']=0;
		$data['p_show_form'] = 'PAYMENT_FORM';
		$data['p_test_request'] = $this->config->get('payco_test');
		$data['p_type'] = 'AUTH_CAPTURE';
		$data['p_currency_code'] = $order_info['currency_code'];;
		$data['p_id_invoice'] = $this->session->data['order_id'];
		$data['p_description'] = html_entity_decode( $this->language->get('text_payment_description').$this->session->data['order_id']. ' '.$this->language->get('text_payment_description_in').' '.$this->config->get('config_name'), ENT_QUOTES, 'UTF-8');
		$data['p_billing_first_name'] = html_entity_decode($order_info['payment_firstname'], ENT_QUOTES, 'UTF-8');
		$data['p_billing_last_name'] = html_entity_decode($order_info['payment_lastname'], ENT_QUOTES, 'UTF-8');
		$data['p_billing_company'] = html_entity_decode($order_info['payment_company'], ENT_QUOTES, 'UTF-8');
		$data['p_billing_address'] = html_entity_decode($order_info['payment_address_1'], ENT_QUOTES, 'UTF-8') . ' ' . html_entity_decode($order_info['payment_address_2'], ENT_QUOTES, 'UTF-8');
		$data['p_billing_city'] = html_entity_decode($order_info['payment_city'], ENT_QUOTES, 'UTF-8');
		$data['p_billing_state'] = html_entity_decode($order_info['payment_zone'], ENT_QUOTES, 'UTF-8');
		$data['p_billing_zip'] = html_entity_decode($order_info['payment_postcode'], ENT_QUOTES, 'UTF-8');
		$data['p_billing_country'] = html_entity_decode($order_info['payment_country'], ENT_QUOTES, 'UTF-8');
		$data['p_billing_phone'] = $order_info['telephone'];
		$data['p_shiping_first_name'] = html_entity_decode($order_info['shipping_firstname'], ENT_QUOTES, 'UTF-8');
		$data['p_shiping_last_name'] = html_entity_decode($order_info['shipping_lastname'], ENT_QUOTES, 'UTF-8');
		$data['p_shiping_company'] = html_entity_decode($order_info['shipping_company'], ENT_QUOTES, 'UTF-8');
		$data['p_shiping_address'] = html_entity_decode($order_info['shipping_address_1'], ENT_QUOTES, 'UTF-8') . ' ' . html_entity_decode($order_info['shipping_address_2'], ENT_QUOTES, 'UTF-8');
		$data['p_shiping_city'] = html_entity_decode($order_info['shipping_city'], ENT_QUOTES, 'UTF-8');
		$data['p_shiping_state'] = html_entity_decode($order_info['shipping_zone'], ENT_QUOTES, 'UTF-8');
		$data['p_shiping_zip'] = html_entity_decode($order_info['shipping_postcode'], ENT_QUOTES, 'UTF-8');
		$data['p_shiping_country'] = html_entity_decode($order_info['shipping_country'], ENT_QUOTES, 'UTF-8');
		$data['p_customer_ip'] = $this->request->server['REMOTE_ADDR'];
		$data['p_email'] = $order_info['email'];
		$data['p_extra1'] = $this->session->data['order_id']; // Enviamos el order_id para recuperarlo en el callback
		$data['p_url_response'] =$this->config->get('payment_payco_callback');
		$data['p_url_confirmation'] =$this->config->get('payment_payco_confirmation');

		$data['p_public_key'] = $this->config->get('payment_payco_public_key');
		$data['p_itemname']="";
		foreach ($this->cart->getProducts() as $product) {
			 if(trim($product['name'])!=""){
			 	if($data['p_itemname']==""){
			 		$data['p_itemname']=$product['name'];
			 	}else{
			 		$data['p_itemname'] = $data['p_itemname'].",".$product['name'];
			 	}
			 	
			 }
		}

		if ((int) $this->config->get('payment_payco_test') == 1) {
			$data['p_test_mode'] = 'true';
		} else {
			$data['p_test_mode'] = 'false';
		}

		$data['p_payco_checkout_type'] = $this->config->get('payment_payco_checkout_type');

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/payment/payco.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/payment/payco.tpl', $data);
		} else {
			return $this->load->view('extension/payment/payco', $data);
		}

	}

	public function callback() 
	{
		// Log específico para Payco en archivo dedicado
		$log_file = DIR_LOGS . 'payco_callback.log';
		$log_message = "\n" . str_repeat('=', 80) . "\n";
		$log_message .= "[" . date('Y-m-d H:i:s') . "] PAYCO CALLBACK INICIADO\n";
		$log_message .= str_repeat('=', 80) . "\n";
		$log_message .= "GET Parameters:\n" . print_r($_GET, true) . "\n";
		$log_message .= "POST Parameters:\n" . print_r($_POST, true) . "\n";
		$log_message .= "REQUEST Parameters:\n" . print_r($_REQUEST, true) . "\n";
		$log_message .= "Server Info:\n";
		$log_message .= "  - IP: " . (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'N/A') . "\n";
		$log_message .= "  - User Agent: " . (isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'N/A') . "\n";
		$log_message .= "  - Request URI: " . (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'N/A') . "\n";
		file_put_contents($log_file, $log_message, FILE_APPEND);
		
		// También loguear en el sistema de OpenCart
		$this->log->write('Payco Callback - GET: ' . print_r($_GET, true));
		$this->log->write('Payco Callback - POST: ' . print_r($_POST, true));
		

		if(isset($_GET['ref_payco']) || isset($_GET['?ref_payco'])){
			if(isset($_GET['?ref_payco'])){
				$_GET['ref_payco']=$_GET['?ref_payco'];
			}

			$url="https://secure.epayco.co/validation/v1/reference/".$_GET['ref_payco'];
			
			$log_message = "\n[" . date('Y-m-d H:i:s') . "] Consultando API de Payco\n";
			$log_message .= "URL: " . $url . "\n";
			file_put_contents($log_file, $log_message, FILE_APPEND);
			
			$this->log->write('Payco Callback - Consultando URL: ' . $url);
			
			// Manejo robusto de errores
			$context = stream_context_create(array(
				'http' => array(
					'timeout' => 30,
					'ignore_errors' => true
				)
			));
			
			$response_raw = @file_get_contents($url, false, $context);
			
			if($response_raw === false) {
				$error_msg = "\n[" . date('Y-m-d H:i:s') . "] ERROR CRÍTICO: No se pudo obtener respuesta de Payco\n";
				$error_msg .= "Error de PHP: " . error_get_last()['message'] . "\n";
				file_put_contents($log_file, $error_msg, FILE_APPEND);
				
				$this->log->write('Payco Callback - ERROR: No se pudo obtener respuesta de Payco');
				$this->response->redirect($this->url->link('checkout/failure'));
				return;
			}
			
			$log_message = "\n[" . date('Y-m-d H:i:s') . "] Respuesta de Payco recibida\n";
			$log_message .= "Raw Response:\n" . $response_raw . "\n";
			file_put_contents($log_file, $log_message, FILE_APPEND);
			
			$this->log->write('Payco Callback - Respuesta raw: ' . $response_raw);
			
			$response = json_decode($response_raw);
			
			if(!$response || !isset($response->data)) {
				$error_msg = "\n[" . date('Y-m-d H:i:s') . "] ERROR: Respuesta JSON inválida o sin datos\n";
				$error_msg .= "JSON Decode Error: " . json_last_error_msg() . "\n";
				file_put_contents($log_file, $error_msg, FILE_APPEND);
				
				$this->log->write('Payco Callback - ERROR: Respuesta JSON inválida o sin datos');
				$this->response->redirect($this->url->link('checkout/failure'));
				return;
			}
			
			// Convertir data a array y mergear con $_REQUEST sin sobrescribirlo
			$payco_data = (array)$response->data;
			$_REQUEST = array_merge($_REQUEST, $payco_data);
			
			$log_message = "\n[" . date('Y-m-d H:i:s') . "] Datos de Payco procesados\n";
			$log_message .= "Payco Data:\n" . print_r($payco_data, true) . "\n";
			file_put_contents($log_file, $log_message, FILE_APPEND);
			
			$this->log->write('Payco Callback - Datos recibidos: ' . print_r($payco_data, true));
		}

		// Obtener order_id correctamente
		// Puede venir en x_id_invoice (id de factura) o en x_extra1 (datos extras)
		if (isset($_REQUEST['x_id_invoice'])) {
			$order_id = $_REQUEST['x_id_invoice'];
		} elseif (isset($_REQUEST['x_extra1'])) {
			$order_id = $_REQUEST['x_extra1'];
		} else {
			$order_id = 0;
		}
		
		$log_message = "\n[" . date('Y-m-d H:i:s') . "] Order ID detectado: " . $order_id . "\n";
		$log_message .= "x_id_invoice: " . (isset($_REQUEST['x_id_invoice']) ? $_REQUEST['x_id_invoice'] : 'NO SET') . "\n";
		$log_message .= "x_extra1: " . (isset($_REQUEST['x_extra1']) ? $_REQUEST['x_extra1'] : 'NO SET') . "\n";
		file_put_contents($log_file, $log_message, FILE_APPEND);
		
		$this->log->write('Payco Callback - Order ID detectado: ' . $order_id);
		
		if (!$order_id) {
			$error_msg = "\n[" . date('Y-m-d H:i:s') . "] ERROR: No se pudo obtener el Order ID\n";
			file_put_contents($log_file, $error_msg, FILE_APPEND);
			$this->response->redirect($this->url->link('checkout/failure'));
			return;
		}
		
		if (isset($_REQUEST['x_ref_payco'])) {
			$this->load->model('checkout/order');
			$p_cust_id_cliente=$this->config->get('payment_payco_merchant');
             $p_key=$this->config->get('payment_payco_key');

                $x_ref_payco=$_REQUEST['x_ref_payco'];
                $x_transaction_id=$_REQUEST['x_transaction_id'];
                $x_amount=$_REQUEST['x_amount'];
                $x_currency_code=$_REQUEST['x_currency_code'];
                $x_signature=$_REQUEST['x_signature'];
				$x_cod_response=$_REQUEST['x_cod_response'];
				$isTest=$_REQUEST['x_test_request'];
				if($isTest == "TRUE"){
					$isTest_= 1;
				}else{
					$isTest_= 2;
				}
				
				$log_message = "\n[" . date('Y-m-d H:i:s') . "] Datos de la transacción:\n";
				$log_message .= "  - Ref Payco: " . $x_ref_payco . "\n";
				$log_message .= "  - Transaction ID: " . $x_transaction_id . "\n";
				$log_message .= "  - Amount: " . $x_amount . "\n";
				$log_message .= "  - Currency: " . $x_currency_code . "\n";
				$log_message .= "  - Response Code: " . $x_cod_response . "\n";
				$log_message .= "  - Is Test: " . $isTest . " (" . $isTest_ . ")\n";
				$log_message .= "  - Signature recibida: " . $x_signature . "\n";
				file_put_contents($log_file, $log_message, FILE_APPEND);
				
                $signature=hash('sha256',
                       $p_cust_id_cliente.'^'
                      .$p_key.'^'
                      .$x_ref_payco.'^'
                      .$x_transaction_id.'^'
                      .$x_amount.'^'
                      .$x_currency_code
                    );
				
				$log_message = "\n[" . date('Y-m-d H:i:s') . "] Validación de firma:\n";
				$log_message .= "  - Signature calculada: " . $signature . "\n";
				$log_message .= "  - Signature recibida: " . $x_signature . "\n";
				$log_message .= "  - ¿Coinciden?: " . ($x_signature == $signature ? 'SÍ ✓' : 'NO ✗') . "\n";
				file_put_contents($log_file, $log_message, FILE_APPEND);
				$queryOrderEpayco = $this->db->query("SELECT * FROM " . DB_PREFIX . "epayco_order WHERE order_id = '" . (int)$order_id . "'");
				if(count($queryOrderEpayco->row)>0){
					$queryProduct_ = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int)$order_id . "'");
				}else{
					$queryProduct_ = null;
				}


				//Validamos la firma
                if($x_signature==$signature){
               		$log_message = "\n[" . date('Y-m-d H:i:s') . "] ✓ Firma válida - Procesando código de respuesta: " . $x_cod_response . "\n";
					file_put_contents($log_file, $log_message, FILE_APPEND);
					
                switch ((int)$x_cod_response) {
                    case 1:{
						$log_message = "[" . date('Y-m-d H:i:s') . "] Case 1 - Transacción APROBADA\n";
						file_put_contents($log_file, $log_message, FILE_APPEND);
						$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE name = 'Complete test'");
						if($isTest_== 1){
							if(count($query->row)>0){
								$orderStatus = $query->row["order_status_id"];
							}
						}else{
							$orderStatus = $this->config->get('payment_payco_final_order_status_id');
						}
						$log_message = "[" . date('Y-m-d H:i:s') . "] Actualizando orden #" . $order_id . " a estado: " . $orderStatus . "\n";
						file_put_contents($log_file, $log_message, FILE_APPEND);
                       $this->model_checkout_order->addOrderHistory($order_id,$orderStatus, '', true);
					}break;
                    case 2:{
						$log_message = "[" . date('Y-m-d H:i:s') . "] Case 2 - Transacción RECHAZADA\n";
						file_put_contents($log_file, $log_message, FILE_APPEND);
						if($queryProduct_){
							if($queryOrderEpayco->row["discount"] == "1"){
							$queryProduct = $this->db->query("SELECT quantity FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$queryProduct_->row["product_id"] . "'");
							$disconut = (int)$queryProduct->row["quantity"] + (int)$queryProduct_->row["quantity"];
							$this->db->query("UPDATE `" . DB_PREFIX . "product` SET `quantity` = '" . $this->db->escape($disconut) . "' WHERE `product_id` = '" . (int)$queryProduct_->row["product_id"] . "' LIMIT 1");	
							
							$this->db->query("UPDATE `" . DB_PREFIX . "epayco_order` SET `discount` = '" . 2 . 
								"' WHERE `order_id` = '" .  (int) $order_id . "' LIMIT 1");
							}
						}
						$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE name = 'Canceled test'");
						if($isTest_== 1){
							if(count($query->row)>0){
								$orderStatus = $query->row["order_status_id"];
							}
						}else{
							$orderStatus = 7;
						}
                        $this->model_checkout_order->addOrderHistory($order_id, $orderStatus, '', true);
					}break;
                    case 3:{
						$log_message = "[" . date('Y-m-d H:i:s') . "] Case 3 - Transacción PENDIENTE\n";
						file_put_contents($log_file, $log_message, FILE_APPEND);
						$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE name = 'Pending test'");
						if($isTest_== 1){
							if(count($query->row)>0){
								$orderStatus = $query->row["order_status_id"];
							}
						}else{
							$orderStatus = 1;
						}
                        $this->model_checkout_order->addOrderHistory($order_id, $orderStatus, '', true);
					}break;
                    case 4:{
						if($queryProduct_){
							if($queryOrderEpayco->row["discount"] == "1"){
							$queryProduct = $this->db->query("SELECT quantity FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$queryProduct_->row["product_id"] . "'");
							$disconut = (int)$queryProduct->row["quantity"] + (int)$queryProduct_->row["quantity"];
							$this->db->query("UPDATE `" . DB_PREFIX . "product` SET `quantity` = '" . $this->db->escape($disconut) . "' WHERE `product_id` = '" . (int)$queryProduct_->row["product_id"] . "' LIMIT 1");	
							
							$this->db->query("UPDATE `" . DB_PREFIX . "epayco_order` SET `discount` = '" . 2 . 
								"' WHERE `order_id` = '" .  (int) $order_id . "' LIMIT 1");
							}
		
						}
                        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE name = 'Canceled test'");
						if($isTest_== 1){
							if(count($query->row)>0){
								$orderStatus = $query->row["order_status_id"];
							}
						}else{
							$orderStatus = 7;
						}
                        $this->model_checkout_order->addOrderHistory($order_id, $orderStatus, '', true);
					 } break; 
					 case 10:{
						if($queryProduct_){
							if($queryOrderEpayco->row["discount"] == "1"){
							$queryProduct = $this->db->query("SELECT quantity FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$queryProduct_->row["product_id"] . "'");
							$disconut = (int)$queryProduct->row["quantity"] + (int)$queryProduct_->row["quantity"];
							$this->db->query("UPDATE `" . DB_PREFIX . "product` SET `quantity` = '" . $this->db->escape($disconut) . "' WHERE `product_id` = '" . (int)$queryProduct_->row["product_id"] . "' LIMIT 1");	
							
							$this->db->query("UPDATE `" . DB_PREFIX . "epayco_order` SET `discount` = '" . 2 . 
								"' WHERE `order_id` = '" .  (int) $order_id . "' LIMIT 1");
							}
		
						}
                        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE name = 'Canceled test'");
						if($isTest_== 1){
							if(count($query->row)>0){
								$orderStatus = $query->row["order_status_id"];
							}
						}else{
							$orderStatus = 7;
						}
                        $this->model_checkout_order->addOrderHistory($order_id, $orderStatus, '', true);
					 } break;  
					 case 11:{
						if($queryProduct_){
							if($queryOrderEpayco->row["discount"] == "1"){
							$queryProduct = $this->db->query("SELECT quantity FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$queryProduct_->row["product_id"] . "'");
							$disconut = (int)$queryProduct->row["quantity"] + (int)$queryProduct_->row["quantity"];
							$this->db->query("UPDATE `" . DB_PREFIX . "product` SET `quantity` = '" . $this->db->escape($disconut) . "' WHERE `product_id` = '" . (int)$queryProduct_->row["product_id"] . "' LIMIT 1");	
							
							$this->db->query("UPDATE `" . DB_PREFIX . "epayco_order` SET `discount` = '" . 2 . 
								"' WHERE `order_id` = '" .  (int) $order_id . "' LIMIT 1");
							}
		
						}
                        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE name = 'Canceled test'");
						if($isTest_== 1){
							if(count($query->row)>0){
								$orderStatus = $query->row["order_status_id"];
							}
						}else{
							$orderStatus = 7;
						}
                        $this->model_checkout_order->addOrderHistory($order_id, $orderStatus, '', true);
					 } break;           
                    
                }

                if($x_cod_response==1 || $x_cod_response==3){
					$log_message = "\n[" . date('Y-m-d H:i:s') . "] ✓ Redirigiendo a SUCCESS\n";
					$log_message .= str_repeat('=', 80) . "\n";
					file_put_contents($log_file, $log_message, FILE_APPEND);
					
					if (isset($_REQUEST['x_ref_payco'])) {
						die($x_cod_response);
					}else{
						$this->response->redirect($this->url->link('checkout/success'));
					}
                }else{
					$log_message = "\n[" . date('Y-m-d H:i:s') . "] ✗ Redirigiendo a FAILURE (código: " . $x_cod_response . ")\n";
					$log_message .= str_repeat('=', 80) . "\n";
					file_put_contents($log_file, $log_message, FILE_APPEND);
                	$this->response->redirect($this->url->link('checkout/failure'));
                }

                }else{
					$error_msg = "\n[" . date('Y-m-d H:i:s') . "] ✗ ERROR CRÍTICO: Firma NO válida\n";
					$error_msg .= "Redirigiendo a FAILURE\n";
					$error_msg .= str_repeat('=', 80) . "\n";
					file_put_contents($log_file, $error_msg, FILE_APPEND);
                    $this->response->redirect($this->url->link('checkout/failure'));
                }                	

		}else{
			$error_msg = "\n[" . date('Y-m-d H:i:s') . "] ✗ ERROR: No se encontró x_ref_payco en REQUEST\n";
			$error_msg .= "Redirigiendo a FAILURE\n";
			$error_msg .= str_repeat('=', 80) . "\n";
			file_put_contents($log_file, $error_msg, FILE_APPEND);
			$this->response->redirect($this->url->link('checkout/failure'));
		}
	}


	public function confirm() {

		$queryOrderEpayco = $this->db->query("SELECT * FROM " . DB_PREFIX . "epayco_order WHERE order_id = '" . (int)$this->session->data['order_id'] . "'");
		if(count($queryOrderEpayco->row)<=0){
			foreach ($this->cart->getProducts() as $product) {
				$queryProduct = $this->db->query("SELECT quantity FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$product['product_id'] . "'");
				$disconut = (int)$queryProduct->row["quantity"] - (int)$product['quantity'];
				$this->db->query("UPDATE `" . DB_PREFIX . "product` SET `quantity` = '" . $this->db->escape($disconut) . "' WHERE `product_id` = '" . (int)$product['product_id'] . "' LIMIT 1");		
			}
			$this->db->query("INSERT INTO " . DB_PREFIX . "epayco_order (order_id, is_test, discount)  VALUES ( '" . (int)$this->session->data['order_id'] . "','" . (int) $this->config->get('payment_payco_test') . "','" . 1 . "')
			");
		}
	   
	    if ((int) $this->config->get('payment_payco_test') == 1) {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE name = 'Pending test'");
			if(count($query->row)>0){
				$orderStatus = $query->row["order_status_id"];
			}else{
				$orderStatus = 1;
			}
		} else {
			$orderStatus = 1;
		}

		$json = array();
		if (isset($this->session->data['payment_method']['code']) && $this->session->data['payment_method']['code'] == 'payco') {
			$this->load->language('extension/payment/cheque');

			$this->load->model('checkout/order');
			
			$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], (int)$orderStatus, '', true);
		
			$json['action'] = true;
		}else{
			$json['action'] = false;
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}