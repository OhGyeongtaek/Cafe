<header class="board-search">
	<form action="/view/board/search" method="get">
		<div>
			<select name="colurm" id="colurm">
				<option value="text">내용</option>
				<option value="title">제목</option>
				<option value="name">작성자</option>
			</select>
			<input type="search" name="key" id="key" autocomplete="off"/>
		</div>
		<input type="submit" value="Search" />
	</form>
</header>
<div class="board-header">
	<strong class="board-title">Free Board</strong>
	<a href="/view/board/write" class="board-botton">글쓰기</a>
</div>