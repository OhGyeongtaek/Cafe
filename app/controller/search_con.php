<?php

class search extends controller{
	public function _search(){
		if(empty($_GET['key'])) return false;
		$menu_data = $this->nowModel->getMenu();
		$user_data = $this->nowModel->getUser();
		foreach($menu_data as $key=> $val){
			$text = strstr($val['text'],$_GET['key']);
			$menu_data[$key]['text'] = $text;
		}
		$this->view->data['searchMenu'] = $menu_data;
		$this->view->data['user'] = $user_data;
	}
}
