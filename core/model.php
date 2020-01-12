<?php
	class model{
		public $db;
		public function __construct(){
			$this->db = new PDO('mysql:host=127.0.0.1; dbname=cafe; charset=utf8','root','');
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}

		public function query($sql,$arr=[]){
			try{
				$stmt = $this->db->prepare($sql);
				$stmt->execute($arr);
				return $stmt;
			}catch(PDO_Exception $e){
				echo nl2br($e);
			}
		}

		public function entity($data){
			if(is_array($data)){
				foreach($data as $key => $val){
					if(is_array($val))	$this->entity($val);
					else				$data[$key] = htmlentities(stripslashes($val),ENT_QUOTES,'utf-8');
				}
				return $data;
			}
		}

		public function result($sql,$arr=[]){
			return $this->entity($this->query($sql,$arr)->fetch());
		}

		public function resultAll($sql,$arr=[]){
			return $this->entity($this->query($sql,$arr)->fetchAll());
		}
	}