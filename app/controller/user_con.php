<?php
	class user extends controller{
		public function _join(){
			$this->login_chk(); 
		}

		public function _id_chk(){
			$data = $this->nowModel->id_chk();
			if(!empty($data['id'])) echo 'not use id';
		}

		public function _join_save(){
			echo $_POST['id'];
			$this->login_chk();
			$this->nowModel->join_save();
		}

		public function _login_action(){
			$this->login_chk();

			$data = $this->nowModel->login_action();

			if($data['cnt'] == 0){
				script('다시 확인해주세요.','url','/view/user/login');
			}else{
				$_SESSION['id'] = $data['id'];
				$_SESSION['name'] = $data['name'];
				$this->nowModel->login_ok();
				script('환영합니다.','main');
			}
		}

		public function _login(){
			$this->login_chk();
		}

		public function login_chk(){
			if(isset($_SESSION['id'])){
				header('Location:/view');
				exit();
			}
		}

		public function _logout(){
			unset($_SESSION['id'],$_SESSION['name']);
			header('Location:/view');
		}
		
		public function _information(){
			$data = $this->nowModel->getData('save');
			$total = '';
			foreach($data as $key => $val){
				$total += $val[$val['kg']]*$val['amount'];
			}
			$this->view->data['infor'] = $data;
			
			$this->view->data['infor']['total'] = $total;
		}

		public function _besket(){
			$data = $this->nowModel->getData('keep');
			$this->view->data['besket'] = $data;
		}
	}