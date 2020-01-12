<?php
	class searchModel extends model{
		public function getMenu(){
			if(empty($_GET['key'])) return false;
			$sql = 'SELECT * FROM `menu`
					WHERE `sid` NOT IN (0) AND
						  `title` LIKE "%'.$_GET['key'].'%" OR
						  `text` LIKE "%'.$_GET['key'].'%"';
			return $this->resultAll($sql);
		}

		public function getUser(){
			if(empty($_GET['key'])) return false;
			$sql = 'SELECT `id`,`mail`,(SELECT COUNT(id) FROM `user`) AS cnt
					FROM `user`
					WHERE `id` LIKE "%'.$_GET['key'].'%" OR
						  `mail` LIKE "%'.$_GET['key'].'%"';
			return $this->resultAll($sql);
		}
	}