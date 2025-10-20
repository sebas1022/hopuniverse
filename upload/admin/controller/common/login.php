<?php
class ControllerCommonLogin extends Controller {
	private $error = array();

	public function index() {
		$debug_log = DIR_LOGS . 'login_debug.log';
		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - === LOGIN INDEX START ===\n", FILE_APPEND);
		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - SESSION_ID: " . session_id() . "\n", FILE_APPEND);
		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - REQUEST_METHOD: " . (isset($this->request->server['REQUEST_METHOD']) ? $this->request->server['REQUEST_METHOD'] : 'NOT SET') . "\n", FILE_APPEND);
		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - SESSION DATA: " . print_r($this->session->data, true) . "\n", FILE_APPEND);
		
		$this->load->language('common/login');

		$this->document->setTitle($this->language->get('heading_title'));

		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - User isLogged: " . ($this->user->isLogged() ? 'YES' : 'NO') . "\n", FILE_APPEND);
		
		if ($this->user->isLogged() && isset($this->request->get['user_token']) && ($this->request->get['user_token'] == $this->session->data['user_token'])) {
			file_put_contents($debug_log, date('Y-m-d H:i:s') . " - User already logged, redirecting to dashboard\n", FILE_APPEND);
			$this->response->redirect($this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true));
		}

		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Is POST? " . (($this->request->server['REQUEST_METHOD'] == 'POST') ? 'YES' : 'NO') . "\n", FILE_APPEND);
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->session->data['user_token'] = token(32);
			file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Generated user_token: " . $this->session->data['user_token'] . "\n", FILE_APPEND);
			file_put_contents($debug_log, date('Y-m-d H:i:s') . " - SESSION DATA AFTER TOKEN: " . print_r($this->session->data, true) . "\n", FILE_APPEND);

			if (isset($this->request->post['redirect']) && (strpos($this->request->post['redirect'], HTTP_SERVER) === 0 || strpos($this->request->post['redirect'], HTTPS_SERVER) === 0)) {
				file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Redirecting to: " . $this->request->post['redirect'] . '&user_token=' . $this->session->data['user_token'] . "\n", FILE_APPEND);
				$this->response->redirect($this->request->post['redirect'] . '&user_token=' . $this->session->data['user_token']);
			} else {
				$redirect_url = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true);
				file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Redirecting to: " . $redirect_url . "\n", FILE_APPEND);
				$this->response->redirect($redirect_url);
			}
		}

		if ((isset($this->session->data['user_token']) && !isset($this->request->get['user_token'])) || ((isset($this->request->get['user_token']) && (isset($this->session->data['user_token']) && ($this->request->get['user_token'] != $this->session->data['user_token']))))) {
			$this->error['warning'] = $this->language->get('error_token');
		}

		if (isset($this->error['error_attempts'])) {
			$data['error_warning'] = $this->error['error_attempts'];
		} elseif (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['action'] = $this->url->link('common/login', '', true);

		if (isset($this->request->post['username'])) {
			$data['username'] = $this->request->post['username'];
		} else {
			$data['username'] = '';
		}

		if (isset($this->request->post['password'])) {
			$data['password'] = $this->request->post['password'];
		} else {
			$data['password'] = '';
		}

		if (isset($this->request->get['route'])) {
			$route = $this->request->get['route'];

			unset($this->request->get['route']);
			unset($this->request->get['user_token']);

			$url = '';

			if ($this->request->get) {
				$url .= http_build_query($this->request->get);
			}

			$data['redirect'] = $this->url->link($route, $url, true);
		} else {
			$data['redirect'] = '';
		}

		if ($this->config->get('config_password')) {
			$data['forgotten'] = $this->url->link('common/forgotten', '', true);
		} else {
			$data['forgotten'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('common/login', $data));
	}

	protected function validate() {
		$debug_log = DIR_LOGS . 'login_debug.log';
		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - === VALIDATE START ===\n", FILE_APPEND);
		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Username isset: " . (isset($this->request->post['username']) ? 'YES' : 'NO') . "\n", FILE_APPEND);
		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Password isset: " . (isset($this->request->post['password']) ? 'YES' : 'NO') . "\n", FILE_APPEND);
		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Username value: " . (isset($this->request->post['username']) ? $this->request->post['username'] : 'NOT SET') . "\n", FILE_APPEND);
		
		if(!isset($this->request->post['username']) || !isset($this->request->post['password']) || !$this->request->post['username'] || !$this->request->post['password']) {
			file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Empty username or password\n", FILE_APPEND);
			$this->error['warning'] = $this->language->get('error_login');
		} else {
			$this->load->model('user/user');

			// Check how many login attempts have been made.
			$login_info = $this->model_user_user->getLoginAttempts($this->request->post['username']);
			file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Login attempts: " . print_r($login_info, true) . "\n", FILE_APPEND);

			if ($login_info && ($login_info['total'] >= $this->config->get('config_login_attempts')) && strtotime('-1 hour') < strtotime($login_info['date_modified'])) {
				file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Too many login attempts\n", FILE_APPEND);
				$this->error['error_attempts'] = $this->language->get('error_attempts');
			}
		}

		if(!$this->error) {
			file_put_contents($debug_log, date('Y-m-d H:i:s') . " - About to attempt login\n", FILE_APPEND);
			$login_result = $this->user->login($this->request->post['username'], html_entity_decode($this->request->post['password'], ENT_QUOTES, 'UTF-8'));
			file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Login result: " . ($login_result ? 'SUCCESS' : 'FAILED') . "\n", FILE_APPEND);
			
			if (!$login_result) {
				file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Login failed - adding attempt\n", FILE_APPEND);
				$this->error['warning'] = $this->language->get('error_login');

				$this->model_user_user->addLoginAttempt($this->request->post['username']);

				unset($this->session->data['user_token']);
			} else {
				file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Login successful - deleting attempts\n", FILE_APPEND);
				$this->model_user_user->deleteLoginAttempts($this->request->post['username']);
			}
		}

		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Has errors: " . ($this->error ? 'YES' : 'NO') . "\n", FILE_APPEND);
		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Return value: " . (!$this->error ? 'TRUE' : 'FALSE') . "\n", FILE_APPEND);
		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - === VALIDATE END ===\n\n", FILE_APPEND);
		
		return !$this->error;
	}
}
