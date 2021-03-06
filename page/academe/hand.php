<?php
	$txt1 = '	여과지 옆쪽의 접지 부분을 접은 다음 아래쪽 접지 부분을 옆면 접지를 접은 반향과 반대로 접습니다. 
				드리퍼에 잘 밀착되도록 끼웁니다. ';

	$txt2 = '	잔에 뜨거운 물을 부어 미리 데웁니다. 서버를 사용할 경우 서버와 잔 모두를 충분히 데우는 게 좋습니다. ';

	$txt3 = '	원두를 갈아서 드리퍼에 담고 평평하게 합니다. 보통 1잔에 1스푼(10g)을 사용하며, 
				진한 커피를 좋아하는 경우에는 1.5~2스푼을 사용합니다. ';

	$txt4 = '	팔팔 끓기 직전의 물을 붓습니다. 커피에 최대한 가까이 대고, 가운데에서부터 나선형(모기향 모양)으로 
				돌려가면서 붓습니다. 처음에는 원두를 적실만큼 소량의 물을 붓고 20초 정도 두면 뜸이 들면서 훨씬 
				좋은 맛을 뽑아낼 수 있습니다. 뜸을 들일 때 커피 위로 굵은 거품이 올라와 둥근 산이 되는데, 
				이는 커피 안에 든 가스 성분이 빠지는 것으로 신선한 커피라야 거품이 생깁니다. 
				[TIP] 보통 85~86℃의 물을 사용합니다. 약배전 커피라면 89~91℃가 알맞으며, 강배전이라면 85℃ 아래로 합니다. ';

	$txt5 = '	뜸을 들이고 난 뒤 다시 중심에서 나선형으로 물을 부어가는 것을 반복합니다. 
				드리퍼에 든 커피가 움푹 꺼지지 않게 물을 가는 줄기로 계속 부어줍니다. 
				이때 여과지에 물이 직접 닿으면 드리퍼 벽을 타고 물이 바로 내려가 커피에서 물맛이 나므로 주의가 필요합니다. 
				원하는 양을 내린 뒤 드리퍼에 물이 찰랑찰랑한 상태에서 커피 추출을 멈춥니다. 
				물이 다 빠질 때까지 그냥 두면 쓰고 텁텁한 잡맛이 함께 들어갑니다. ';

	$txt6 = '   커피에 생긴 거품은 잡맛을 낼 수 있으므로 걷어냅니다. 서버에 여러 잔 분량을 내렸다면 여러 번 흔들어 
				고루 섞은 다음 잔에 담습니다. ';
?>

<article class="hand academe">
	<h2><img src="/static/img/hand_title.png" alt="title" title="title" /></h2>
	<p class="need">준비물 : 드리퍼, 여과지, 주전자, 커피</p>
	<div class="content1">
		<strong>1. 여과지 접기</strong>
		<p><?php echo nl2br($txt1)?></p>
	</div>
	<div class="content2">
		<strong>2. 잔데우기</strong>
		<p><?php echo nl2br($txt2)?></p>
	</div>
	<div class="content3">
		<strong>3. 원두 갈아서 담기</strong>
		<p><?php echo nl2br($txt3)?></p>
	</div>
	<div class="content4">
		<strong>4. 뜸 들이기</strong>
		<p><?php echo nl2br($txt4)?></p>
	</div>
	<div class="content5">
		<strong>5. 나선형으로 물 붓기</strong>
		<p><?php echo nl2br($txt5)?></p>
	</div>
	<div class="content6">
		<strong>6. 거품걷어내기</strong>
		<p><?php echo nl2br($txt6)?></p>
	</div>
</article>