<?php
	
	class Users {
		public $db;
		public function __construct() {
			// Mysql connection
			$this->db = new mysqli("localhost", "root","","afaf");
		}

		// inserting data
		public function insert($nom, $date_cheq, $ville, $banq, $n_cheq, $montant, $type, $tiers, $n_contrat, $username) {
			// creating prepared statement
			$sql = $this->db->prepare("INSERT INTO cheques (nom, date_cheq, ville, banq, n_cheq, montant, type, tiers, n_contrat, username) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$sql->bind_param('ssssssssss',$nom, $date_cheq, $ville, $banq, $n_cheq, $montant, $type, $tiers, $n_contrat, $username);
			return $sql->execute();
		}
		public function getData($username) {
			$data = array();
			$sql = $this->db->prepare("SELECT * FROM cheques WHERE username = ?");
			$sql->bind_param('i', $username);
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

		public function getUserById($username) {
			$data = array();
			$sql = $this->db->prepare("SELECT * FROM cheques WHERE username = ?");
			$sql->bind_param('i', $username);
			$sql->execute();

			// fetch result
			$get_result = $sql->get_result();
			// fetching data and storing to array
			$res = $get_result->fetch_object();
			return $res;
		}

		

		// deleting data
		public function delete($n_cheq) {
			$return = false;
			$sql = $this->db->prepare("DELETE FROM cheques WHERE n_cheq = ?");
			$sql->bind_param('i', $n_cheq);
			$sql->execute();

			// Count affected rows
			if($sql->affected_rows > 0) {
				$return = true;
			}
			return $return;
		}

		public function recherche($date1,$date2) {
			$data = array();
			$sql = $this->db->prepare("SELECT * FROM cheques WHERE date_cheq BETWEEN ? AND ? ");
			$sql->bind_param('ss', $date1,$date2);
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
		public function valider($id) {
			$data = array();
			$sql = $this->db->prepare("UPDATE cheques SET action=Valide WHERE n_cheq= ? ");
			$sql->bind_param('i', $id);
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

		public function modifdate($date3,$id) {
			$data = array();
			$sql = $this->db->prepare("UPDATE cheques SET date_cheq=? WHERE n_cheq= ? ");
			$sql->bind_param('ii',$date3, $id);
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


		
	}