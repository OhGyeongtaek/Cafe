<?php
	$txt1 = '	오후 12시 이전 입금 확인 주문 건에 한하여 당일 출고 가능합니다.
				(토, 일, 공휴일 제외)';

	$txt2 = '	평일 09:00~13:00, 14:00~19:00
				(토, 일, 공휴일 휴무)
				문의전화: 02-123-4567';
	
	$txt3 = '	ZeroCafe에 지속적인 관심을 가져주시는 고객님들께 깊은 감사의 말씀을 드리면서 
				보다 좋은 품질의 제품들을 선보일 것을 약속드립니다.
				감사합니다.';
?>
<article class="use">
	<div>
		<strong>당일출고 안내</strong>
		<p><?php echo nl2br($txt1); ?></p>
	</div>
	<div>
		<strong>구매문의 및 상담 이용시간</strong>
		<p><?php echo nl2br($txt2); ?></p>
	</div>
		<p><?php echo nl2br($txt3); ?></p>
</article>