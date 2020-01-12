<?php if(!defined('BASEPATH')) exit('please access the normal way');

	class boardModel extends model{
		public function getList(){
			$page = empty($_GET['page'])? 0 : $_GET['page'];
			$getList = $page * 10;
			$sql = 'SELECT *,(select COUNT(idx) FROM `board`) AS cnt
					FROM `board`
					ORDER BY `od` DESC
					LIMIT '.$getList.',10';
			return $this->resultAll($sql);
		}

		public function save(){
			$dap = !isset($_POST['dap'])? 0 : $_POST['dap']+1;
			$idx = empty($_POST['idx'])? 0 : $_POST['idx'];

			if(empty($_POST['idx'])){
				$sql = 'SELECT od FROM `board` ORDER BY `od` DESC';
				$od = $this->result($sql);
				$od = $od['od']+1;
			}else{
				$sql = 'SELECT `od` FROM `board` WHERE `idx` = ?';
				$data = $this->result($sql,[$_POST['idx']]);
				$od = $data['od'];
			}

			$sql = 'UPDATE `board` SET od = od+1 WHERE od >= ?';
			$this->query($sql,[$od]);

			$sql = 'INSERT INTO `board` SET
						`title` = ?,
						`name` = ?,
						`day` = NOW(),
						`od` = ?,
						`text` = ?,
						`dap` = ?,
						`midx` = ?';

			$this->query($sql,[	$_POST['title'],
								$_SESSION['id'],
								$od,
								$_POST['text'],
								$dap,
								$idx]);
			
			script('글쓰기가 완료되었습니다.','url','/view/board/board');
		}

		public function view(){
			$sql = 'SELECT * FROM `board` WHERE idx = ?';
			return $this->result($sql,[$_GET['idx']]);
		}

		public function review_data(){
			$sql = 'SELECT * FROM `review` WHERE midx = ? ORDER BY `idx` DESC';
			return $this->query($sql,[$_GET['idx']]);
		}

		public function hit(){
			$sql = 'UPDATE `board` SET hit = hit +1 WHERE idx = ?';
			$this->query($sql,[$_GET['idx']]);
		}

		public function review_save(){
			$sql = 'INSERT INTO `review` SET
						text = ?,
						midx = ?,
						name = ?,
						date = NOW()';

			$this->query($sql,[	$_GET['text'],
								$_GET['idx'],
								$_GET['id']]);
		}

		public function search(){
			$page = empty($_GET['page'])? 0 : $_GET['page'];
			$getList = $page * 10;
			$sql = 'SELECT `title`,`text`,`name`,`od`,`day`,`hit`,`idx`,
							(SELECT COUNT(idx)
							 FROM `board`
							 WHERE '.$_GET['colurm'].' LIKE "%'.$_GET['key'].'%" ) AS cnt
					FROM `board`
					WHERE '.$_GET['colurm'].' LIKE "%'.$_GET['key'].'%"
					ORDER BY `od` DESC
					LIMIT '.$getList.',10';

			return $this->resultAll($sql);
		}
	}