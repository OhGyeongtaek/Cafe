<article class="shopping">
	<header>
		<input type="button" data-url="/action/shopping/save" value="즉시구매"/>
		<input type="button" data-url="/action/shopping/keep" value="장바구니담기"/>
	</header>
	<form action="#" method="post">
		<?php foreach($list as $key => $val){?>
			<div data-goods="<?php echo $val['goods']?>">
				<div><input type="checkbox" /></div>
				<img src="/static/shopping/<?php echo $val['goods']?>.jpg" alt="<?php echo $val['goods']?>" title="<?php echo $val['goods']?>"/>
				<strong><?php echo $val['goods'];?></strong>
				<p>
					<span>kg</span>
					<select class="kg">
						<option value="1kg">1kg 개당 <?php echo number_format($val['1kg'])?>kg</option>
						<option value="10kg">10kg 개당 <?php echo number_format($val['10kg'])?>kg</option>
						<option value="20kg">20kg 개당 <?php echo number_format($val['20kg'])?>kg</option>
					</select>
				</p>
				<p>
					수량
					<select class="amount">
						<?php for($i=1; $i <= 10; $i++){ ?>
						<option value="<?php echo $i;?>"><?php echo $i;?>개</option>
						<?php } ?>
					</select>
				</p>
			</div>
		<?php }?>
	</form>
</article>