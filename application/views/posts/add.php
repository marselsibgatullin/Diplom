<form class="form-add" method="post" action="/posts/add">
    <?php if(isset($vars['error'])): ?>
		<div class="alert alert-danger col-md-8" role="alert">
	    	<?php echo($vars['error']); ?>
		</div>
    <?php endif;?>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Заголовок вакансии</label>
        <div class="col-sm-8">
            <input type="text" id="tittle" class="form-control" name="tittle" placeholder="Название файла">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Выбор специальности</label>
        <div class="col-sm-8">
            <select id="speciality" class="form-control" name="speciality">
                <option disabled>Выберите специальность</option>
                <option>(АНТЭ) Авиации, наземные транспорты и энергетика</option>
                <option>(ФМФ) Физика и математика</option>
                <option>(АЭП) Автоматики и электронное приборостроение</option>
                <option>(КТЗИ) Компьютерные технологии и защита информации</option>
                <option>(РЭТ) Радиоэлектроника и телекоммуникации</option>
                <option>(ЭУИСТ) Экономика, управление и социальные технологии</option>
			</select>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Описание вакансии</label>
        <div class="col-sm-8">
            <textarea class="form-control" id="text" name="text"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" id="submit" class="moreinfo">Отправить</button>
            <div></div>
        </div>
    </div>
</form>