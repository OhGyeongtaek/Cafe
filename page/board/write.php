<article class="board-write">
	<form action="/action/board/save" method="post">
		<?php
			if(isset($_GET['idx'])){
				echo '	<input type="hidden" name="idx" id="idx" value="'.$_GET['idx'].'"/>
						<input type="hidden" name="dap" id="dap" value="'.$_GET['dap'].'"/>';
			}
			?>
		<table>
			<tbody>
				<tr>
					<th><label for="title">제목</label></th>
					<td><input type="text" name="title" id="title" required/></td>
				</tr>
				<tr>
					<th><label for="text">내용</label></th>
					<td><textarea name="text" id="text" cols="30" rows="10" required></textarea></td>
				</tr>
			</tbody>
		</table>
		<div class="moveBox-center">
			<input type="submit" value="글쓰기" class="button1"/>
		</div>
	</form>
</article>