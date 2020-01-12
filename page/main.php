<section class="body">
	<section class="cont-up">
		<ul>
			<li class="slide1 active_img"></li>
			<li class="slide2"></li>
			<li class="slide3"></li>
		</ul>
		<section class="wrap-content">
			<?php if(empty($_SESSION['id'])){?>
			<span>가입한사람 : <?php echo @$user.'명'?></span>
			<?php }else{?>
			<span>방문횟수 : <?php echo @$user.'번'?></span>
			<?php }?>

			<ul>
				<?php if(isset($_SESSION['id'])){ ?>
				<li><a href="/action/user/logout"><img src="/static/img/logout.png" alt="login" title="login" /></a></li>
				<?php }else{?>
				<li><a href="/view/user/login"><img src="/static/img/login.png" alt="login" title="login" /></a></li>
				<?php }?>
				<li><a href="/view/user/join"><img src="/static/img/join.png" alt="join" title="join" /></a></li>
				<li><a href="/view/user/mypage"><img src="/static/img/mypage.png" alt="mypage" title="mypage" /></a></li>
			</ul>
		</section>
		<section class="slide_btn_wrap">
			<div class="slide_btn">
				<a href=".slide1" style="background:#ff3c3c;">slide1</a>
				<a href=".slide2">slide2</a>
				<a href=".slide3">slide3</a>
			</div>
		</section>
	</section>
	<section class="main-content">
		<section class="main-content1">
			<article class="hand">
				<strong>핸드드립</strong>
				<p>	드리퍼와 여과지만 있으면 사무실이나 집,<br>
					혹은 그 어디에서든 간편하게 커피를<br>
					내릴 수 있어요!
				</p>
				<a href="/view/academe/hand">바로가기</a>
			</article>
			<article class="franch">
				<strong>프렌치 프레스</strong>
				<p>	프렌치 프레스로 만든 커피는 진하고<br>
					향이 풍부하며 입안에서<br>
					느껴지는 무게감이 좋습니다.
				</p>
				<a href="/view/academe/french">바로가기</a>
			</article>
		</section>
		<section class="main-content2">
			<article class="content1">
				<strong>Academe</strong>
				<p>카페모카 아카데미에서 커피 도구의 대해 알아보세요.</p>
			</article>
			<article class="content2">
				<strong>Shopping</strong>
				<p>카페모카에서는 원두를 팝니다.</p>
			</article>
			<article class="content3">
				<header>
					<strong>Free Board</strong>
					<a href="/view/board/board">more</a>
				</header>
				<ul>
					<li><a href="/view/board/board">카페모카에서 산 원두 진짜 맛잇어요</a><span>2015-01-16</span></li>
					<li><a href="/view/board/board">카페모카에서 산 원두 진짜 맛잇어요</a><span>2015-01-16</span></li>
					<li><a href="/view/board/board">카페모카에서 산 원두 진짜 맛잇어요</a><span>2015-01-16</span></li>
					<li><a href="/view/board/board">카페모카에서 산 원두 진짜 맛잇어요</a><span>2015-01-16</span></li>
					<li><a href="/view/board/board">카페모카에서 산 원두 진짜 맛잇어요</a><span>2015-01-16</span></li>
				</ul>
			</article>
		</section>
	</section>
</section>