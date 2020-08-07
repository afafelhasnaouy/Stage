<?php

	
	class Users {
		public $db;
		public function __construct() {
			// Mysql connection
			$this->db = new mysqli("localhost", "root","","afaf");
		}

	
		public function getData() {
			$data = array();
			$sql = $this->db->prepare("SELECT * FROM cheques WHERE type = 'Encours'");
			//$sql->bind_param('i', $type);
			$sql->execute();

			// fetch result
			$get_result = $sql->get_result();
			// fetching data and storing to array
			while($res = $get_result->fetch_object()) {
				$data[] = $res;
			}
			// return array
			return $data;
		}
		
		public function porte() {
			$data = array();
			$sql = $this->db->prepare("SELECT * FROM cheques WHERE type = 'EnPortfeuille'");
			//$sql->bind_param('i', $type);
			$sql->execute();

			// fetch result
			$get_result = $sql->get_result();
			// fetching data and storing to array
			while($res = $get_result->fetch_object()) {
				$data[] = $res;
			}
			// return array
			return $data;
		}
		public function delete($id) {
			$return = false;
			$sql = $this->db->prepare("DELETE FROM cheques WHERE n_cheq = ?");
			$sql->bind_param('i', $id);
			$sql->execute();

			
			return $return;
		}

		


	}
	?>
