@layout('layouts.index')

@section('head-title')
聯絡我們
@endsection

@section('content')
<div class="main-content contact-bg-div">
	<div class="contact-content-div">
		<h3 class="contact-h3">Contact Us</h3>
		<?php echo Form::open(route('contact'), 'POST', array('class' => 'form-horizontal')); ?>
			<div class="control-group">
				<label class="control-label" for="type">哪種問題</label>
				<div class="controls">
					<select name="type">
						<option>異業合作</option>
						<option>代理行銷</option>
						<option>其他（留言處可說明）</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name">姓名</label>
				<div class="controls">
					<input type="text" id="name" name="name" placeholder="請輸入您的姓名">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="phone">電話</label>
				<div class="controls">
					<input type="text" id="phone" name="phone" placeholder="請輸入您的電話號碼">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="mobilePhone">手機</label>
				<div class="controls">
					<input type="text" id="mobilePhone" name="mobile" placeholder="請輸入您的手機號碼">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="email">電子信箱</label>
				<div class="controls">
					<input type="text" id="email" name="email" placeholder="請輸入您的Email信箱">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="contactTime">何時方便</label>
				<div class="controls">
					<select name="time" id="contactTime">
						<option>白天 8:00~12:00</option>
						<option>下午 14:00~18:00</option>
						<option>晚上 18:00~22:00</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="message">內容</label>
				<div class="controls">
					<textarea id="message" name="message" style="height:150px;"></textarea>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn">送出</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection