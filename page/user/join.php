<article class="join">
	<form action="/action/user/join_save" method="post">
		<input type="hidden" name="phone" class="phone"/>
		<input type="hidden" name="post_num" class="post_num"/>
		<header><span style="color:red">*</span>은 필수 입력사항 입니다.</header>
		<table>
			<tr class="pilsu">
				<th><label for="name">이름</label></th>
				<td><input type="text" name="name" id="name"/></td>
			</tr>
			<tr class="pilsu">
				<th><label for="id">ID</label></th>
				<td><input type="text" name="id" id="id" /><p class="id-chk-text">아이디는 영문,숫자로 6~12글짜 사이로 만들어주세요.</p></td>
			</tr>
			<tr class="pilsu">
				<th><label for="pw">PW</label></th>
				<td><input type="password" name="pw" id="pw" /></td>
			</tr>
			<tr>
				<th><label for="mail">E-mail</label></th>
				<td><input type="mail" name="mail" id="mail"/></td>
			</tr>
			<tr class="pilsu">
				<th><label for="post_num1">Post Number</label></th>
				<td>
					<input type="number" id="post_num1" size="6" /> -
					<input type="number" id="post_num2" size="6"/>
				</td>
			</tr>
			<tr class="pilsu">
				<th><label for="address">Address</label></th>
				<td><input type="text" name="address" id="address" /></td>
			</tr>
			<tr class="pilsu">
				<th><label for="phone1">Phone Number</label></th>
				<td>
					010 - 
					<input type="tel" id="phone1" size="5" maxlength="4"/>
					 - 
					<input type="tel" id="phone2" size="5" maxlength="4"/>
				</td>
			</tr>
			<tr class="pilsu">
				<th><label for="auto_put">자동가입방지</label></th>
				<td>
					<canvas width="150" height="80"></canvas>
					<input type="text" id="auto_put"/>
				</td>
			</tr>
		</table>
		<div class="moveBox-center">
			<input type="submit" value="확인" class="button2" />
			<input type="button" value="취소" class="button3" />
		</div>
	</form>
</article>