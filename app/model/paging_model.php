<?php

class pagingModel{
	public function paging($total){
		$total = round($total/10);
		if($total == 0) return false;
		$page = empty($_GET['page'])? 0 : $_GET['page'];
		$block = 10;
		$start = (floor($page/$block)* $block) + 1;

		$last = min($start + $block-1,$total);
		$last  = ($last < 1) ? 1 : $last;


		$key = empty($_GET['key'])? '' : $_GET['key'];
		$colurm = empty($_GET['colurm'])? '' : $_GET['colurm'];
		$html = '';
		if($page !== 0){
			$html .= '<td><div><a href="/view/'.$_GET['controller'].'/'.$_GET['method'].'?key='.$key.'&colurm='.$colurm.'&page='.($page-1).'">◀</a></div></td>';
		}

		for($start; $start<=$last; $start++){
			$class = ($page+1) == $start ? 'class="on"' : '';
			$html .= '<a href="/view/'.$_GET['controller'].'/'.$_GET['method'].'?key='.$key.'&colurm='.$colurm.'&page='.($start-1).'" '.$class.'>'.$start.'</a>';
		}

		if($page+1 != $total){
			$html .= '<td><div><a href="/view/'.$_GET['controller'].'/'.$_GET['method'].'?key='.$key.'&colurm='.$colurm.'&page='.($page+1).'">▶</a></div></td>';
		}

		return $html;
	}
}