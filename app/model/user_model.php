<?php
	class userModel extends model{
		public function id_chk(){
			$sql = 'SELECT *
					FROM `user`
					WHERE `id` = ?';
			return $this->result($sql,[$_GET['key']]);
		}
		
		public function login_ok(){
			$sql  = 'UPDATE `user` SET hit=hit+1 WHERE `id` = ?';
			$this->query($sql,[$_POST['id']]);
		}

		public function join_save(){
			$sql = 'INSERT INTO `user` SET 
						`id` = ?,
						`pw` = ?,
						`address` = ?,
						`phone` = ?,
						`post_num` = ?,
						`mail` = ?,
						`name` = ?';

			$this->query($sql,[	$_POST['id'],
								$_POST['pw'],
								$_POST['address'],
								$_POST['phone'],
								$_POST['post_num'],
								$_POST['mail'],
								$_POST['name']]);

			script('환영합니다.','url','/view/user/login');
		}

		public function login_action(){
			$sql = 'SELECT *,COUNT(*) as cnt
					FROM `user`
					WHERE `id` = ? AND `pw` = ?';

			return $this->result($sql,[$_POST['id'],$_POST['pw']]);
		}

		public function getUser(){
			if(empty($_SESSION['id'])){
				$sql = 'SELECT COUNT(id) as cnt FROM `user`';
				$data = $this->result($sql);
				$return = $data['cnt'];
			}else{
				$sql = 'SELECT `hit` FROM `user` WHERE id = ?';
				$data = $this->result($sql,[$_SESSION['id']]);
				$return = $data['hit'];
			}

			return $return;
		}

		public function getData($type){
			if(empty($_SESSION['id'])) script("이 페이지는 로그인후 접근이 가능합니다.",'main');
			$sql = 'SELECT 
						r.goods , r.kg, r.amount,r.type, r.idx,
						s.1kg, s.10kg, s.20kg						
					FROM `reserve` AS r
					JOIN `shopping` AS s ON s.goods = r.goods
					WHERE name = ? AND r.type = ?';

			return $this->resultAll($sql,[$_SESSION['id'],$type]);
		}


	}