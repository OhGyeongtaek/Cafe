<?php
class board extends controller{
	public function  _board(){
		$this->loadModel('paging');
		$page = empty($_GET['page'])? 0 : $_GET['page'];
		$list = $this->nowModel->getList(); 
		$this->view->data['board'] = $list;
		$this->view->data['paging'] = $this->model['paging']->paging($list[0]['cnt']);
	}

	public function _write(){
		if(empty($_SESSION['name'])) script('로그인후 접근이 가능합니다.','main');
	}

	public function _save(){
		if(empty($_SESSION['name'])) script('로그인후 접근이 가능합니다.','main');
		$this->nowModel->save();
	}

	public function _view(){
		$this->view->data['view'] = $this->nowModel->view();
		$this->view->data['review'] = $this->nowModel->review_data();
		$this->nowModel->hit();
	}

	public function _review_save(){
		$this->nowModel->review_save();
		echo '
			<li>
				<strong>'.$_SESSION['id'].'</strong>
				<p>'.nl2br($_GET['text']).'</p>
				<span>'.date('Y-mm-dd',time()).'</span>
			</li>';
	}

	public function _search(){
		$this->loadModel('paging');
		$search = $this->nowModel->search();
		$this->view->data['search'] = $search;
		$this->view->data['paging'] = $this->model['paging']->paging($search[0]['cnt']);
	}
}