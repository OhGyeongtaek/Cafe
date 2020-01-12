<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Keywords" content="원두,자유게시판,커피,아카데미,쇼핑,검색,">
  <meta name="Description" content="제로카페는 쇼핑메이지에서 원두를 구매할 수 있습니다.">
  <link rel="stylesheet" href="/static/css/ui.css" />
  <link rel="stylesheet" href="/static/css/common.css" />
  <link rel="stylesheet" href="/static/css/<?php echo $link; ?>.css" />
  <link rel="stylesheet" href="/static/css/print.css" media="print" />
  <script type="text/javascript" src="/static/js/jquery.js"></script>
  <script type="text/javascript" src="/static/js/ui.js"></script>
  <title>zero cafe</title>
 </head>
 <body>
<div class="snow"></div>
 <section class="wrap">
 	<header>
		<section class="header">
	 		<h1><a href="/view"><img src="/static/img/logo.png" alt="logo" title="logo"/></a></h1>
			<nav>
				<?php
					$menuData = [];
					foreach($menu as $key => $val){
						$menuData[$val['porder']][$val['sid']] = $val;
					}
					$html = '';
					foreach($menuData as $key => $val){
						$html .= '<li>';
						$html .= '<a href="/view/'.$key.'/'.$val['0']['e_name'].'">'.$val['0']['title'].'</a>';
						$html .= '<ul>';
						for($cnt=1; $cnt < sizeof($val); $cnt++){
							if(sizeof($val) === 1) continue;
							$html .= '<li><a href="/view/'.$val[$cnt]['porder'].'/'.$val[$cnt]['e_name'].'">'.$val[$cnt]['title'].'</a></li>';
						}
						$html .= '</ul>';
						$html .= '</li>';
					}
					echo '<ul>'.$html.'</ul>';
				?>
			</nav>
		</section>
 	</header>