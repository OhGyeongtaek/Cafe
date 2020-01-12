<article class="board-search-page">
	<?php include PAGE.'board/header.php'; ?>
	<table class="tableSkin">
		<thead>
			<tr>
				<th>No</th>
				<th>제목</th>
				<th>이름</th>
				<th>작성일</th>
				<th>조회수</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($search as $key => $val){ ?>
				<tr>
					<td><?php echo $val['od']?></td>
					<td>
						<a href="/view/board/view/idx=<?php echo $val['idx']?>" style="padding-left:
						
						">
						<?php echo $val['title']?>
						</a>
					</td>
					<td><?php echo $val['name']?></td>
					<td><?php echo $val['day']?></td>
					<td><?php echo $val['hit']?></td>
				</tr>
		<?php }?>
		</tbody>
	</table>
	<div class="paging moveBox-center">
		<?php echo $paging; ?>
	</div>
</article>