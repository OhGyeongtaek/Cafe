<?php $menu = $menu_data[$_GET['controller']]; ?>
<section class="sub">
	<section class="cont-up"></section>
	<section class="content">
		<header class="sub-position"><strong><?php echo $menu[0]['title']?></strong>
			<ul>
				<li><a href="/view">HOME</a> &gt; </li>
				<li><a href="/view/<?php echo $_GET['controller'].'/'.$_GET['controller'] ?>"><?php echo $menu[0]['title']; ?></a> &gt; </li>
				<li><strong><?php echo @$menu_data[$_GET['controller']][$_GET['method']]['title']; ?></strong></li>
			</ul>
		</header>
		<aside>
			<?php
				foreach($menu_data[$_GET['controller']] as $key => $val){
					if($key === 0) continue;
					$class = $_GET['method'] === $key? 'on-menu' : '';
					echo '<a href="/view/'.$_GET['controller'].'/'.$val['e_name'].'" class="'.$class.'">'.$val['title'].'</a>';
				}
			?>
		</aside>
		<?php include '/page/'.$_GET['controller'].'/'.$_GET['method'].'.php'; ?>
	</section>
</section>