<?php
	if(empty($_GET['mode'])) header('Location:/view');

	header('Content-type:text/html; charset=utf-8');
	session_start();

	define('BASEPATH',__DIR__);

	define('APP',BASEPATH.'/app/');
	define('PAGE',BASEPATH.'/page/');
	define('CORE',BASEPATH.'/core/');
	define('STATICPATH',BASEPATH.'/static/');

	define('MODEL',APP.'/model/');
	define('CON',APP.'/controller/');
	
	define('ERR','error');

	if(isset($_SERVER['HTTP_REFERER'])){
		define('RETURNPATH',$_SERVER['HTTP_REFERER']);
	}
	
	/*error*/
	if(defined('ERR')){
		switch(ERR){
			case 'normal' : error_reporting(0); break;
			case 'error' : error_reporting(E_ALL); break;
			default : exit('Please access the normal way');
		}
	}

	include CORE.'model.php';
	include CORE.'function.php';
	include CORE.'controller.php';
	include CORE.'view.php';

	if(is_file(CON.$_GET['controller'].'_con.php')){
		include CON.$_GET['controller'].'_con.php';
		$con = new $_GET['controller']();
		if(method_exists($con,'init')) $con->init();
		if(method_exists($con,'_'.$_GET['method'])) $con->{'_'.$_GET['method']}();
	}else $con = new Controller();

	if(isset($con)&& $_GET['mode'] === 'view') $con->view->execute();