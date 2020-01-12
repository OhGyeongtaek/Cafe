window.format = function(data){
	var func = new Intl.NumberFormat();
	return func.format(data);
}

$(function(){
	if($('.sub').length === 0){
		/*snow effect*/
		function make_snow(){
			var rand = Math.floor(Math.random()*5,-2),
				left = Math.floor(Math.random()*2000)+1;
			if(rand > 5|| rand <=0 || left > $(window).width()){
				make_snow();
				return false;
			}
			$('.snow').append('<img src="/static/img/nun'+rand+'.png" data-speed="'+(rand*5000)+'" style="left:'+left+'px">');
			setTimeout(function(){move_snow()},50);
		}

		function move_snow(){
			var snow = $('.snow img').length,
				target = '.snow img:nth-of-type('+snow+')',
				speed = $(target).data('speed');
			$(target).animate({'top':'430px'},speed,function(){
				$(this).remove();
			});
			setTimeout(function(){make_snow()},30);
		}
		make_snow();

		/*end*/

		/*user menu*/
		var user_menu = 0;
		function menu_move(){
			if(user_menu === 3) return false;
			user_menu ++;
			$('.cont-up .wrap-content ul li:nth-of-type('+user_menu+')').addClass('on_li');
			setTimeout(function(){menu_move();},200);
		}		
		menu_move();

		//opacity 슬라이드 만들다 말았음!!
		var od = 0,
			moveTime = null;
		
		function opacity(){
			od = od>=3? 1 : od + 1;
			$('.slide_btn a').css('background','#fff');
			$('.slide_btn a:nth-of-type('+od+')').css('background','#ff3c3c');
			$('.active_img').removeClass('active_img');
			$('.cont-up > ul > li:nth-of-type('+od+')').addClass('active_img');
			moveTime = setTimeout(function(){ opacity(); },4000);
		}
		moveTime = setTimeout(function(){ opacity(); },4000)
		
		$('.slide_btn a').click(function(e){
			e.preventDefault();
			od = Number($(this).attr('href').substr(-1,1))-1;
			clearTimeout(moveTime);
			opacity();
		});
	}
	if($('.join').length > 0){

		/*not auto join*/
		var str = 'qwertyuiopasdfghjklzxcvbnm1234567890QWERTYUIOPASDFGHJKLZXCVBNM';
		var ctxStr = str.split('').sort(function(){ return 0.5-Math.random(); }).join('');
		var canvas = document.querySelector('.join canvas');
		var ctx = canvas.getContext('2d');
		var txt = ctxStr.substring(0,6);

		ctx.beginPath();
			ctx.font = '30px margun gothic';
			ctx.fillText(txt,10,50);
			ctx.strokeStyle="#FF0000";
			ctx.moveTo(10,43.5); 
			ctx.lineTo(120,43.5); 
			ctx.stroke();
		ctx.closePath();

		var url = canvas.toDataURL();
		$('canvas').after('<img src="'+url+'" title="자동가입방지" alt="자동가입방지">').remove();

		/*end*/

		/*add text*/
		$('.pilsu th').each(function(){
			var text = '<span style="color:red">&nbsp;*&nbsp;</span>'+$(this).html();
			$(this).html(text);
		});
		/*end*/

		/*form chk*/
		$('.join form').submit(function(){
			var smt = true;
			$('.pilsu td input').each(function(){
				if($(this).val() === ''){
					$(this).css('background','#d73e3e');
					smt = false;
				}else{
					$(this).css('background','#fff');
				}
			});
			if(txt !== $('#auto_put').val()){
				alert('자동가입방지를 확인해주세요.');
				$('.auto_put').css('background','#d73e3e');
				return false;
			}

			if(!smt || !id_chk){
				alert('입력사항을 확인해주세요.');
				return false;
			}else{
				$('.join > form > .phone').val($('#phone1').val()+' - '+$('#phone2').val());
				$('.join > form > .post_num').val($('#post_num1').val()+' - '+$('#post_num2').val());
			}
		});
		/*end*/

		/*id chk*/
		var id_chk = false;

		$('#id').keyup(function(){
			var key = $(this).val(); 
			if(!/^[(a-z0-9)]{6,12}$/.test(key)){
				$('.id-chk-text').html('<span style="color:red">아이디는 영문,숫자로 6~12글짜 사이로 만들어주세요.</span>');
				return false;
			}
			$.get('/action/user/id_chk',{'key':key},function(txt){
				if(txt == ''){
					$('.id-chk-text').html('<span style="color:green;">사용 가능한 아이디입니다.</span>');
					id_chk = true;
				}else{
					$('.id-chk-text').html('<span stype="color:red">중복된 아이디 입니다.</span>');
				}
				console.log(txt);
			});
		});
	}

	if($('.review').length > 0){
		if($('.idx-value').val() == ''){
			alert('잘못된 접근입니다.');
			return false;
		}

		$('.review-btn').click(function(){
			if($('.review-text').val() === '') return false;

			if($('.id-value').val() === ''){
				alert('로그인을 해주세요.');
				location.href="/view/user/login";
				return false;
			}else{
				var data = {
					id : $('.id-value').val(),
					text : $('#review-text').val(),
					idx : $('.idx-value').val()
				}

				console.log($('#review-text').val());
				$.get('/action/board/review_save',data,function(txt){
					var html = $('.review-list').html();
					$('.review-list').html(txt+html);
				});
			}
		});
	}

	if($('.shopping').length > 0){
		$('.shopping header input').click(function(){
			if($('input:checked').length > 0){
				$('.shopping form').attr('action',$(this).data('url'));
					$('input:checked').each(function(i){
						console.log(i);
						var base	= $(this).parent().parent();
						var kg		= $('.kg',base).val();
						var amount	= $('.amount',base).val();
						var name	= $('strong',base).html();
						var val		= name+'/'+kg+'/'+amount;
						$('.shopping form').append('<input type="hidden" name="goods'+(i+1)+'" value="'+val+'">');
					});
				$('.shopping form').submit();
			}else{
				alert('상품은 한가지 이상 선택해주세요.');
				return false;
			}
		});
	}

	if($('.besket').length > 0){
		$('.besket a').click(function(){
			var amount = $(this).parent().parent().find('select').val();
			var href = $(this).attr('href')+'&amount='+amount;
			$(this).attr('href',href);
		});
		$('.besket table a').button();
		$('.besket select').change(function(){
			var val = Number($(this).val());
			var td = Number($(this).parent().find('.price').val());
			var total = val*td;

			$(this).parent().find('.data').val(val);
			$(this).parent().parent().find('.total-price').html(format(total)+'원');
		});

		$('.besket form').submit(function(){
			$('.besket table tbody tr').each(function(){
				var val = $('select',this).val();
				$('.data',this).val(val);
			});
		});
	}

	function all_replace(str, searchStr, replaceStr) {

		while (str.indexOf(searchStr) != -1) {
			str = str.replace(searchStr, replaceStr);
		}

		return str;

	}
});
