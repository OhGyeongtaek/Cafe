<?php if(defined('HOMEPATH')) exit('please access the normal way');

	class shopping extends controller{
		public function _shopping(){
			$this->view->data['list'] = $this->nowModel->getList();
		}

		public function _save(){
			$this->save();
		}

		public function _keep(){
			$this->save();
		}

		public function save(){
			if(empty($_SESSION['id'])) script('로그인을 해주세요.','url','/view/user/login');
			if(empty($_POST)) exit('please access the normal way');

			$goods = [];

			foreach($_POST as $key => $val){
				$data = explode('/',$val);
				$goods[$key] = [$data[0],$data[1],$data[2]];
			}

			$this->nowModel->save($goods);
		}
		
		public function _update(){
			$this->nowModel->update();
		}
		
		public function _updateAll(){
			$this->nowModel->updateAll();
		}
	}