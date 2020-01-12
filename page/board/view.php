<article class="board-view">
	<table>
		<thead>
			<tr>
				<th>제목</th>
				<td colspan="3"><?php echo $view['title']?></td>
			</tr>
			<tr>
				<th>작성자</th>
				<td><?php echo $view['name']?></td>
				<th>작성일</th>
				<td><?php echo $view['day']?></td>
			</tr>
		</thead>
	</table>
	<div>
		<?php echo nl2br($view['text']); ?>
	</div>
	<footer class="moveBox-center">
		<a href="/view/board/board">목록으로</a>
		<a href="/view/board/write/idx=<?php echo $view['idx']?>&dap=<?php echo $view['dap']?>">답글달기</a>
	</footer>
	<section class="review-write">
		<input type="hidden" value="<?php echo @$_SESSION['id']; ?>" class="id-value"/>
		<input type="hidden" value="<?php echo @$_GET['idx']; ?>" class="idx-value"/>
		<textarea name="review-text" id="review-text" cols="30" rows="10"></textarea>
		<input type="button" value="댓글작성" class="review-btn" />
	</section>

	<section class="review">
		<ul class="review-list">
			<?php foreach($review as $key => $val){ ?>
			<li>
				<strong><?php echo $val['name']?></strong>
				<p><?php echo nl2br($val['text']);?></p>
				<span><?php echo $val['date']?></span>
			</li>
			<?php } ?>
		</ul>
	</section>
</article>