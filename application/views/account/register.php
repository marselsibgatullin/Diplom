<div class="container1">
	<div class="row">
		<div class="col-md-3">
    	</div>
		<div class="col-md-offset-3 col-md-6">
			<form class="form-horizontal" action="/account/register" method="post">
				<span class="heading">Регистрация</span>
				<?php if(isset($vars['error'])): ?>
					<div class="alert alert-danger" role="alert">
	  				<?php echo($vars['error']); ?>
				</div>
				<?php endif; ?>
				<div><p>Выберите тип аккаунта:</p></div>
				<div class="form-group has-float-label">
					<select onchange="changeAccount(this)" class="form-control custom-select" id = "role" name = "role">
						<option value="student">Студент</option>
						<option value="employer">Работодатель</option>
					</select>
				</div>
				 <div><p>Введите данные:</p></div>
				<div class="form-group">
					<input type="email" class="form-control" id="inputEmail" placeholder="E-mail" name="email">
					<i class="fa fa-at"></i>
				</div>
				<div class="form-group help">
					<input type="password" class="form-control" id="inputPassword" placeholder="Пароль"  name="password" onchange="checkPass ()">
					<i class="fa fa-lock"></i>
				</div>
				<div class="form-group help">
					<input type="password" class="form-control" id="inputPasswordRepeat" placeholder="Повторите пароль" onchange="checkPass ()">
					<i id="inputPasswordIcon" class="fa fa-lock"></i>	
				</div>
				<div id="stud-form">
					<div class="form-group help">
						<input type="text" class="form-control" id="inputName" placeholder="Имя" name="name">
						<i class="fa fa-user"></i>
					</div>
					<div class="form-group help">
						<input type="text" class="form-control" id="inputSurname" placeholder="Фамилия" name="surname">
						<i class="fa fa-users"></i>
					</div>
					<div class="form-group help">
						<input type="date" class="form-control" id="inputBirthday" placeholder="Дата рождения" name="birthday">
						<i class="fa fa-birthday-cake"></i>
					</div>
					<div class="form-group help">
						<input type="text" class="form-control" id="inputUniversity" placeholder="Название университета" name="university">
						<i class="fa fa-university"></i>
					</div>
					<div class="form-group help">
						<select class="form-control custom-select" id="inputSpeciality" placeholder="Факультет" name="speciality">
							<option disabled>Выберите специальность</option>
							<option>(АНТЭ) Авиации, наземные транспорты и энергетика</option>
							<option>(ФМФ) Физика и математика</option>
							<option>(АЭП) Автоматики и электронное приборостроение</option>
                            <option>(КТЗИ) Компьютерные технологии и защита информации</option>
							<option>(РЭТ) Радиоэлектроники и телекоммуникаций</option>
							<option>(ЭУИСТ) Экономика, управление и социальные технологии</option>
						</select>
						<i class="fa fa-edit"></i>
					</div>
					<div><p>Выберите ваш курс:</p></div>
					<div class="form-group has-float-label">
						<select class="form-control custom-select" id="stage" name="stage">
							<option selected>1 - Бакалавр/Специалитет</option>
 							<option>2 - Бакалавр/Специалитет</option>
							<option>3 - Бакалавр/Специалитет</option>
							<option>4 - Бакалавр/Специалитет</option>
							<option>5 - Специалитет</option>
							<option>1 - Магистратура</option>
							<option>2 - Магистратура</option>
						</select>
						<i class="fa fa-signal"></i>
					</div>
				</div>
				<div class="form-group help invis" id="emp-form">
					<input type="text" class="form-control" id="inputCompany" placeholder="Название компании" name="company">
					<i class="fa fa-briefcase"></i>
				</div>
				<div class="form-group help">
					<input type="text" class="form-control" id="inputCity" placeholder="Город" name="city">
					<i class="fa fa-building"></i>
				</div>
				<div class="form-group">
					<button disabled type="submit" class="btn btn-default" id="button">Регистрация</button>
				</div>
			</form>
		</div>
	</div><!-- /.row -->
</div><!-- /.container -->