<?php if(! defined('BASEPATH')) exit('Please access the normal way');
class view{

	public $model = [];
	public $data = [];

	public function init(){
		$this->data['link'] = empty($_GET['controller'])? 'main' : 'sub';
		$this->data['menu'] = $this->model['menu']->getMenu();

		if(isset($_GET['controller'])){
			$this->data['user'] = $this->model['user']->getUser();
		}

		$data = null;
		foreach($this->data['menu'] as $key => $val){
			if($val['sid'] == 0){
				$data[$val['porder']][$val['sid']] = $val;
			}else{
				$data[$val['porder']][$val['e_name']] = $val;
			}
		}
		$this->data['menu_data'] = $data;
	}

	public function execute(){
		$this->init();
		extract($this->data);
		include PAGE.'header.php';
		include PAGE.$link.'.php';
		include PAGE.'footer.php';
	}
}