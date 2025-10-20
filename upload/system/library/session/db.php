<?php
namespace Session;

final class DB {
	public $maxlifetime;

	public function __construct($registry) {
		$this->db = $registry->get('db');

		$this->maxlifetime = ini_get('session.gc_maxlifetime') !== null ? (int)ini_get('session.gc_maxlifetime') : 1440;

		$this->gc();
	}

	public function read($session_id) {
		$debug_log = defined('DIR_LOGS') ? DIR_LOGS . 'session_db_debug.log' : '/tmp/session_db_debug.log';
		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - READ session_id: " . $session_id . "\n", FILE_APPEND);
		
		$query = $this->db->query("SELECT `data` FROM `" . DB_PREFIX . "session` WHERE `session_id` = '" . $this->db->escape($session_id) . "' AND `expire` > '" . $this->db->escape(date('Y-m-d H:i:s', time())) . "'");

		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Query rows: " . $query->num_rows . "\n", FILE_APPEND);
		
		if ($query->num_rows) {
			file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Raw data: " . $query->row['data'] . "\n", FILE_APPEND);
			$decoded = json_decode($query->row['data'], true);
			file_put_contents($debug_log, date('Y-m-d H:i:s') . " - Decoded data: " . print_r($decoded, true) . "\n", FILE_APPEND);
			return $decoded;
		} else {
			file_put_contents($debug_log, date('Y-m-d H:i:s') . " - No session found - returning false\n", FILE_APPEND);
			return false;
		}
	}

	public function write($session_id, $data) {
		$debug_log = defined('DIR_LOGS') ? DIR_LOGS . 'session_db_debug.log' : '/tmp/session_db_debug.log';
		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - WRITE session_id: " . $session_id . "\n", FILE_APPEND);
		file_put_contents($debug_log, date('Y-m-d H:i:s') . " - WRITE data: " . print_r($data, true) . "\n", FILE_APPEND);
		
		if ($session_id) {
			$json_data = json_encode($data);
			file_put_contents($debug_log, date('Y-m-d H:i:s') . " - JSON encoded: " . $json_data . "\n", FILE_APPEND);
			
			$this->db->query("REPLACE INTO `" . DB_PREFIX . "session` SET `session_id` = '" . $this->db->escape($session_id) . "', `data` = '" . $this->db->escape($json_data) . "', `expire` = '" . $this->db->escape(date('Y-m-d H:i:s', time() + (int)$this->maxlifetime)) . "'");
			
			file_put_contents($debug_log, date('Y-m-d H:i:s') . " - WRITE completed\n", FILE_APPEND);
		}

		return true;
	}

	public function destroy($session_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "session` WHERE `session_id` = '" . $this->db->escape($session_id) . "'");

		return true;
	}

	public function gc() {
		if (ini_get('session.gc_divisor') && $gc_divisor = (int)ini_get('session.gc_divisor')) {
			$gc_divisor = $gc_divisor === 0 ? 100 : $gc_divisor;
		} else {
			$gc_divisor = 100;
		}

		if (ini_get('session.gc_probability')) {
			$gc_probability = (int)ini_get('session.gc_probability');
		} else {
			$gc_probability = 1;
		}

		if (mt_rand() / mt_getrandmax() < $gc_probability / $gc_divisor) {
			$this->db->query("DELETE FROM `" . DB_PREFIX . "session` WHERE `expire` < '" . $this->db->escape(date('Y-m-d H:i:s', time())) . "'");

			return true;
		}
	}
}
