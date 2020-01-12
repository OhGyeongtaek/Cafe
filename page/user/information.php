<article class="information">
	<?php if(!empty($infor[0]['goods'])){ ?>
	<table class="tableSkin">
		<thead>
			<tr>
				<th>제품명</th>
				<th>선택옵션</th>
				<th>수량</th>
				<th>합계</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($infor as $key => $val){ if($key === 'total') continue; ?>
			<tr>
				<td><?php echo $val['goods'];?></td>
				<td><?php echo $val['kg'];?></td>
				<td><?php echo $val['amount'];?></td>
				<td><?php echo number_format($val[$val['kg']]*$val['amount']).'원';?></td>
			</tr>
			<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th><?php echo number_format($infor['total']).'원';?></th>
			</tr>
		</tfoot>
	</table>
	<?php } ?>
	<footer>
		<a href="/view/shopping/shopping">계속쇼핑</a>
	</footer>

</article>