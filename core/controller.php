<?php if(! defined('BASEPATH')) exit('Please access the normal way');

	class controller{

		public $view;
		public $model = [];
		public $nowModel;

		public function __construct(){
			$this->view = new View();
			$this->thisModel();
			$this->loadModel('menu');

			if(isset($_GET['controller'])){
				$this->loadModel('user');
			}
		}

		public function loadModel($name){
			if(is_file(MODEL.$name.'_model.php')){
				include_once MODEL.$name.'_model.php';
				$model = $name.'Model';
				$this->model[$name] = new $model();
				$this->view->model[$name] = new $model();
			}
		}

		public function thisModel(){
			if(is_file(MODEL.$_GET['controller'].'_model.php')){
				include MODEL.$_GET['controller'].'_model.php';
				$model = $_GET['controller'].'Model';
				$this->nowModel = new $model();
			}
		}
	}