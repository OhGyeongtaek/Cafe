<?php
	class shoppingModel extends model{
		public function getList(){
			$sql = 'SELECT * FROM `shopping`';
			return $this->resultAll($sql);
		}	

		public function save($data){
			$sql = 'INSERT INTO `reserve` SET
						`name` = ?,
						`goods` = ?,
						`kg` = ?,
						`amount` = ?,
						`type` = ?,
						`date` = NOW()';

			foreach($data as $key=> $val){
				$this->query($sql,[	$_SESSION['id'],
									$val['0'],
									$val['1'],
									$val['2'],
									$_GET['method']]);
			}
			$url = $_GET['method'] === 'save'? '/view/user/information' : '/view/user/besket';
			$text = $_GET['method'] === 'save'? '주문이 완료되었습니다.' : '장바구니에 저장되었습니다.';

			script($text,'url',$url);
		}

		public function update(){
			$sql = 'UPDATE `reserve` SET
						`type` = ?,
						`amount` = ?
					WHERE idx = ? ';

			$this->query($sql,[	'save',
								$_GET['amount'],
								$_GET['idx']]);
			
			script('구매가 완료되었습니다.','return');
		}

		public function updateAll(){
			$sql = 'UPDATE `reserve` SET
						`type` = ?,
						`amount` = ?
					WHERE idx = ? ';

			foreach($_POST as $key => $val){
				$data = explode('-',$key);
				$this->query($sql,[	'save',
									$val,
									$data[1] ]);
			}
			script('전부 구입이 완료되었습니다.','url','/view/user/information');
		}
	}