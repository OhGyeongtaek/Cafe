<article class="result">
	<input type="hidden" class="key" value="<?php echo $_GET['key']?>"/>
	<?php if(!empty($searchMenu[0]['title'])){?>
	<section class="page">
		<strong>페이지 부분 검색</strong>
		<?php foreach($searchMenu as $key => $val){ ?>
		<div class="menu<?php echo ($key+1); ?>">
			<strong><a href="/view/<?php echo $val['porder']?>/<?php echo $val['e_name']?>"><?php echo $val['title']; ?></a></strong>
			<span>검색된 단어의 개수 : <?php echo substr_count($val['text'],$_GET['key'])?></span>
		</div>
		<?php }?>
	</section>
	<?php }else{ ?>
		<p>페이지 부분에서 검색 결과가 없습니다.</p>
	<?php ?>
	<?php if(isset($user[0]['id'])){?>
	<section class="user">
		
	</section>
	<?php }else?>
		<p>유저 정보에서 검색된 결과가 없습니다.</p>
	<?php } ?>
</article>