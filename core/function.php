<?php
	function script($txt,$type,$url=''){
		switch($type){
			case 'return' : $url = RETURNPATH; break;
			case 'main' :	$url = '/view'; break;
			case 'url' :	$url = $url; break;
		}
		echo '<script>alert("'.$txt.'"); location.href="'.$url.'";</script>';
	}