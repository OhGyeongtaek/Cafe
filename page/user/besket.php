<article class="besket">
	<?php if(isset($besket[0]['goods'])){?>
	<form action="/action/shopping/updateAll" method="post">
		<table class="tableSkin">
			<thead>
				<tr>
					<th>제품평</th>
					<th>선택옵션</th>
					<th>수량</th>
					<th>합계</th>
					<th>버튼</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($besket as $key => $val){ ?>
				<tr>
					<td><?php echo $val['goods']?></td>
					<td><?php echo $val['kg']?></td>
					<td>
						<input type="hidden" value="<?php echo $val[$val['kg']];?>" class="price" />
						<input type="hidden" value="<?php echo $val['amount']?>" name="idx-<?php echo $val['idx']?>" class="data" />
						<select>
						<?php 
							for($i = 1; $i <= 10; $i ++){
								$select = $i == $val['amount']? ' selected' : '';
								echo '
								<option value="'.$i.'"'.$select.'>'.$i.'</option>
								';
							}
						?>
						</select>
					</td>
					<td class="total-price"><?php echo number_format($val[$val['kg']]*$val['amount']).'원';?></td>
					<td>
						<a href="/action/shopping/update?idx=<?php echo $val['idx']?>">구매</a>
						<a href="/action/shopping/del?idx=<?php echo $val['idx']?>">삭제</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<footer class="moveBox-right">
			<input type="submit" value="전체상품구입" />
			<a href="/view/shopping/shopping">계속쇼핑</a>
		</footer>
	</form>
	<?php }else{ ?>
			<p class="list-none">장바구니에 물품이 없습니다.</p>
	<?php }?>
</article>