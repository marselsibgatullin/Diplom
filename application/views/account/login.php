<div class="container1">
	<div class="row">
		<div class="col-md-3">
    	</div>
		<div class="col-md-offset-3 col-md-6">
			<form class="form-horizontal" action="/account/login" method="POST">
				<span class="heading">Авторизация</span>
				<?php if(isset($vars['error'])): ?>
					<div class="alert alert-danger" role="alert">
	  				<?php echo($vars['error']); ?>
				</div>
				<?php endif; ?>
				<div><p>Вход в качестве:</p></div>
				<div class="form-group has-float-label">
					<select class="form-control custom-select" id="role" name="role">
						<option value="student" selected>Студент</option>
 						<option value="employer">Работодатель</option>
 					</select>
				</div>
				<div><p>Данные для входа:</p></div>
				<div class="form-group">
					<input type="email" class="form-control" id="inputEmail" placeholder="E-mail" name="email">
					<i class="fa fa-at"></i>
				</div>
				<div class="form-group help">
					<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
					<i class="fa fa-lock"></i>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-default">ВХОД</button>
				</div>
			</form>
		</div>
	</div>
</div>