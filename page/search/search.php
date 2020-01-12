<article class="search">
	<header>
		<form action="/view/search/search" method="get">
			<input type="search" placeholder="검색어를 입력해주세요." name="key" required />
			<input type="submit" value="검색"/>
		</form>
	</header>
	<?php if(!empty($_GET['key'])) include PAGE.'search/result.php'; ?>
</article>