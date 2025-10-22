<?php  
class ControllerExtensionModuleNewslettersubscribe extends Controller {
  	private $error = array();
	
	public function index($setting) {
	
		$this->language->load('extension/module/newslettersubscribe');
		$this->document->addScript('catalog/view/javascript/opentheme/jquery.bpopup.min.js');
		$this->document->addScript('catalog/view/javascript/opentheme/jquery.cookie.js');
		
      	$data['option_unsubscribe'] = $this->config->get('option_unsubscribe');	
		$data['thickbox'] = $setting['newslettersubscribe_thickbox'];	
		
		$this->id = 'newslettersubscribe';
	    if(isset($setting['popup']) && $setting['popup']==1) {
			return $this->load->view('extension/module/newsletterpopup', $data);
		}else {
			return $this->load->view('extension/module/newslettersubscribe', $data);
		}
		
	 
	   	$this->load->model('account/newslettersubscribe');
	   	//check db
	   	$this->model_account_newslettersubscribe->check_db();
	}
	
	private function getWelcomeEmailHtml($name = '') {
		$greeting = $this->language->get('welcome_greeting');
		$intro = $this->language->get('welcome_intro');
		$message = $this->language->get('welcome_message');
		$discount = $this->language->get('welcome_discount');
		$code = $this->language->get('welcome_code');
		$use = $this->language->get('welcome_use');
		$tip = $this->language->get('welcome_tip');
		$promise = $this->language->get('welcome_promise');
		$love = $this->language->get('welcome_love');
		$team = $this->language->get('welcome_team');
		$signature = $this->language->get('welcome_signature');
		$footer = $this->language->get('welcome_footer');
		
		$html = '
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<style>
				body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
				.container { max-width: 600px; margin: 0 auto; padding: 20px; }
				.header { background: linear-gradient(135deg, #222e3c 0%, #6DADCB 100%); color: white; padding: 30px; text-align: center; border-radius: 10px 10px 0 0; }
				.content { background: #ffffff; padding: 30px; }
				.discount-box { background: #f8f9fa; border-left: 4px solid #6DADCB; padding: 20px; margin: 20px 0; border-radius: 5px; }
				.discount-box p { margin: 5px 0; font-size: 16px; }
				.tip-box { background: #fff3cd; border-left: 4px solid #ffc107; padding: 15px; margin: 20px 0; border-radius: 5px; font-style: italic; }
				.footer { background: #222e3c; color: white; padding: 20px; text-align: center; border-radius: 0 0 10px 10px; }
				.footer a { color: #6DADCB; text-decoration: none; margin: 0 10px; }
				.signature { margin-top: 20px; font-size: 18px; }
			</style>
		</head>
		<body>
			<div class="container">
				<div class="header">
					<h1>'.$intro.'</h1>
				</div>
				<div class="content">
					<p><strong>'.$greeting.'</strong></p>
					<p>'.$message.'</p>
					
					<p><strong>'.$discount.'</strong></p>
					
					<div class="discount-box">
						<p><strong>'.$code.'</strong></p>
						<p>'.$use.'</p>
					</div>
					
					<div class="tip-box">
						<p>'.$tip.'</p>
					</div>
					
					<p>'.$promise.'</p>
					
					<div class="signature">
						<p>'.$love.'<br>
						<strong>'.$team.'</strong><br>
						'.$signature.'</p>
					</div>
				</div>
				<div class="footer">
					<p><em>"'.$footer.'"</em></p>
					<p>
						<a href="https://www.instagram.com/hop_universe/">Instagram</a> |
						<a href="https://www.tiktok.com/@hopuniverse">TikTok</a> |
						<a href="https://www.youtube.com/@Hop_Universe">YouTube</a>
					</p>
					<p style="font-size: 12px; color: #999; margin-top: 20px;">
						Copyright © 2025 <a href="http://www.Frubik.com/" style="color: #6DADCB;">Frubik SAS</a>. All Rights Reserved.
					</p>
				</div>
			</div>
		</body>
		</html>';
		
		return $html;
	}

	public function subscribe() {

		$prefix_eval = "";
	  
		$this->language->load('extension/module/newslettersubscribe');
	 
		$this->load->model('account/newslettersubscribe');
	  
		if (isset($this->request->post['subscribe_email']) and filter_var($this->request->post['subscribe_email'],FILTER_VALIDATE_EMAIL)) {
			   
			   if ($this->config->get('newslettersubscribe_registered') and $this->model_account_newslettersubscribe->checkRegisteredUser($this->request->post)) {
				   
					$this->model_account_newslettersubscribe->UpdateRegisterUsers($this->request->post,1);
					
					echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"success\"> '.$this->language->get('subscribe').'</div>");$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
				   
					// Send welcome email to subscriber
					$this->sendWelcomeEmail($this->request->post['subscribe_email'], isset($this->request->post['subscribe_name']) ? $this->request->post['subscribe_name'] : '');
				
			   } else if (!$this->model_account_newslettersubscribe->checkmailid($this->request->post)) {
				 
					$this->model_account_newslettersubscribe->subscribe($this->request->post);
					
					echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"success\"> '.$this->language->get('subscribe').'</div>");$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
				 
					// Send welcome email to subscriber
					$this->sendWelcomeEmail($this->request->post['subscribe_email'], isset($this->request->post['subscribe_name']) ? $this->request->post['subscribe_name'] : '');
				 
					if ($this->config->get('newslettersubscribe_mail_status')) {
				   
						$subject = $this->language->get('mail_subject');	
						
						$message = '<table width="60%" cellpadding="2"  cellspacing="1" border="0"> 
									 <tr>
									   <td> Email Id </td>
									   <td> '.$this->request->post['subscribe_email'].' </td>
									 </tr>
									 <tr>
									   <td> Name  </td>
									   <td> '.$this->request->post['subscribe_name'].' </td>
									 </tr>';
						$message .= '</table>';
			 
						$mail = new Mail();
						$mail->protocol = $this->config->get('config_mail_protocol');
						$mail->parameter = $this->config->get('config_mail_parameter');
						$mail->hostname = $this->config->get('config_smtp_host');
						$mail->username = $this->config->get('config_smtp_username');
						$mail->password = $this->config->get('config_smtp_password');
						$mail->port = $this->config->get('config_smtp_port');
						$mail->timeout = $this->config->get('config_smtp_timeout');				
						$mail->setTo($this->config->get('config_email'));
						$mail->setFrom($this->config->get('config_email'));
						$mail->setSender($this->config->get('config_name'));
						$mail->setSubject($subject);
						$mail->setHtml($message);
						$mail->send();
					}
				 
				} else {
					  
					  echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"warning\"> '.$this->language->get('alreadyexist').'</div>");$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
					  
				}
			   
			} else {
				
				echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"warning\"> '.$this->language->get('error_invalid').'</div>")');
				
			}
	  
	}
	
	private function sendWelcomeEmail($email, $name = '') {
		try {
			$mail = new Mail();
			$mail->protocol = $this->config->get('config_mail_protocol');
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->hostname = $this->config->get('config_smtp_host');
			$mail->username = $this->config->get('config_smtp_username');
			$mail->password = $this->config->get('config_smtp_password');
			$mail->port = $this->config->get('config_smtp_port');
			$mail->timeout = $this->config->get('config_smtp_timeout');
			
			$mail->setTo($email);
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender($this->config->get('config_name'));
			$mail->setSubject($this->language->get('welcome_subject'));
			$mail->setHtml($this->getWelcomeEmailHtml($name));
			$mail->send();
		} catch (Exception $e) {
			// Log error but don't stop the subscription process
			error_log('Failed to send welcome email: ' . $e->getMessage());
		}
	}
	
	public function subscribepopup() {

		$prefix_eval = "";
	  
		$this->language->load('extension/module/newslettersubscribe');
	 
		$this->load->model('account/newslettersubscribe');
	  
		if (isset($this->request->post['subscribe_pemail']) and filter_var($this->request->post['subscribe_pemail'],FILTER_VALIDATE_EMAIL)) {
				$this->request->post['subscribe_email'] = $this->request->post['subscribe_pemail']; 
				$this->request->post['subscribe_name'] = $this->request->post['subscribe_pname']; 
				
			   
			   if ($this->config->get('newslettersubscribe_registered') and $this->model_account_newslettersubscribe->checkRegisteredUser($this->request->post)) {
				   
					$this->model_account_newslettersubscribe->UpdateRegisterUsers($this->request->post,1);
					
					echo('$("'.$prefix_eval.' #notification").html("<div class=\"success\"> '.$this->language->get('subscribe').'</div>");$("'.$prefix_eval.' #subscribe")[0].reset();');
				   
					// Send welcome email to subscriber
					$this->sendWelcomeEmail($this->request->post['subscribe_pemail'], isset($this->request->post['subscribe_pname']) ? $this->request->post['subscribe_pname'] : '');
				
			   } else if (!$this->model_account_newslettersubscribe->checkmailid($this->request->post)) {
				 
					$this->model_account_newslettersubscribe->subscribe($this->request->post);
					
					echo('$("'.$prefix_eval.' #notification").html("<div class=\"success\"> '.$this->language->get('subscribe').'</div>");$("'.$prefix_eval.' #subscribe")[0].reset();');
				 
					// Send welcome email to subscriber
					$this->sendWelcomeEmail($this->request->post['subscribe_pemail'], isset($this->request->post['subscribe_pname']) ? $this->request->post['subscribe_pname'] : '');
				 
					if ($this->config->get('newslettersubscribe_mail_status')) {
				   
						$subject = $this->language->get('mail_subject');	
						
						$message = '<table width="60%" cellpadding="2"  cellspacing="1" border="0"> 
									 <tr>
									   <td> Email Id </td>
									   <td> '.$this->request->post['subscribe_pemail'].' </td>
									 </tr>
									 <tr>
									   <td> Name  </td>
									   <td> '.$this->request->post['subscribe_pname'].' </td>
									 </tr>';
						$message .= '</table>';
			 
						$mail = new Mail();
						$mail->protocol = $this->config->get('config_mail_protocol');
						$mail->parameter = $this->config->get('config_mail_parameter');
						$mail->hostname = $this->config->get('config_smtp_host');
						$mail->username = $this->config->get('config_smtp_username');
						$mail->password = $this->config->get('config_smtp_password');
						$mail->port = $this->config->get('config_smtp_port');
						$mail->timeout = $this->config->get('config_smtp_timeout');				
						$mail->setTo($this->config->get('config_email'));
						$mail->setFrom($this->config->get('config_email'));
						$mail->setSender($this->config->get('config_name'));
						$mail->setSubject($subject);
						$mail->setHtml($message);
						$mail->send();
					}
				 
				} else {
					  
					  echo('$("'.$prefix_eval.' #notification").html("<div class=\"warning\"> '.$this->language->get('alreadyexist').'</div>");$("'.$prefix_eval.' #subscribe")[0].reset();');
					  
				}
			   
			} else {
				
				echo('$("'.$prefix_eval.' #notification").html("<div class=\"warning\"> '.$this->language->get('error_invalid').'</div>")');
				
			}
	  
	}

	public function unsubscribe(){
	  
		if ($this->config->get('newslettersubscribe_thickbox')) {
			  $prefix_eval = "";
		} else {
			  $prefix_eval = "";
		}
	  
		$this->language->load('extension/module/newslettersubscribe');
	 
		$this->load->model('account/newslettersubscribe');
	  
		if (isset($this->request->post['subscribe_email']) and filter_var($this->request->post['subscribe_email'],FILTER_VALIDATE_EMAIL)) {
				
			if ($this->config->get('newslettersubscribe_registered') and $this->model_account_newslettersubscribe->checkRegisteredUser($this->request->post)) {
				   
					$this->model_account_newslettersubscribe->UpdateRegisterUsers($this->request->post,0);
					
					echo('$("'.$prefix_eval.' #notification").html("<div class=\"success\"> '.$this->language->get('unsubscribe').'</div>");$("'.$prefix_eval.' #subscribe")[0].reset();');
				   
				
			} else if (!$this->model_account_newslettersubscribe->checkmailid($this->request->post)) {
				 
					echo('$("'.$prefix_eval.' #notification").html("<div class=\"warning\"> '.$this->language->get('notexist').'</div>");$("'.$prefix_eval.' #subscribe")[0].reset();');
				 
			} else {
				   
					if ($this->config->get('option_unsubscribe')) {
						
					 $this->model_account_newslettersubscribe->unsubscribe($this->request->post);
					 
					 echo('$("'.$prefix_eval.' #notification").html("<div class=\"success\"> '.$this->language->get('unsubscribe').'</div>");$("'.$prefix_eval.' #subscribe")[0].reset();');
					 
					}
			}
			   
		} else {
			
				echo('$("'.$prefix_eval.' #notification").html("<div class=\"warning\"> '.$this->language->get('error_invalid').'</div>")');
				
		}
	  
	}

	protected function loadmodule() {
		
		$this->language->load('extension/module/newslettersubscribe');

      	$data['heading_title'] = $this->language->get('heading_title');	
		
      	$data['entry_name'] = $this->language->get('entry_name');	
      	$data['entry_email'] = $this->language->get('entry_email');	
		$data['entry_button'] = $this->language->get('entry_button');	
		$data['entry_unbutton'] = $this->language->get('entry_unbutton');	
		$data['option_unsubscribe'] = $this->config->get('option_unsubscribe');	
		$data['thickbox'] = $this->config->get('newslettersubscribe_thickbox');	
		
		$data['text_subscribe'] = $this->language->get('text_subscribe');	
		
		$this->id = 'newslettersubscribe';

		
		return $this->load->view('extension/module/newslettersubscribe', $data);
	}
}
?>