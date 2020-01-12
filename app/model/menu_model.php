<?php if(! defined('BASEPATH')) exit('please access the normal way');

class menuModel extends model{
	public function getMenu(){
		$sql = 'SELECT porder,mid,sid,title,e_name FROM `menu`';
		return $this->resultAll($sql);
	}
}