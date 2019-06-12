<div class="vacancy container">
<form action="/students/list" method="POST">
    <div class="form-group">
        <label class="col-sm-6 control-label">Выбор специальности</label>
        <div class="col-sm-8">
            <select id="speciality" class="form-control" name="speciality">
                <option disabled>Выберите специальность</option>
            <?php foreach ($spec as $str): ?>
                <option value="<?php echo $str['id'];?>"><?php echo $str['name'];?></option>
            <?php endforeach; ?>
			</select>
        </div>
    </div>
    <div class="form-group">
		<button type="submit" class="moreinfo btn btn-primary">Выбрать</button>
	</div>
        <?php if (!empty($list)): ?>
           <?php foreach ($list as $val): ?>
    <div class="card">
        <div class="card-header">
            Информация
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $val['surname'];echo ' '; echo $val['name']; ?></h5>
            <p class="card-text">Город: <?php echo $val['city'];?></p>
            <p class="card-text">Университет: <?php echo $val['university'];?></p>
            <p class="card-text">Курс: <?php echo $val['stage'];?></p>
            <p class="card-text">Дата рождения: <?php echo $val['birthday'];?></p>
            <a href="/profile/students/<?php echo $val['id']; ?>" class="moreinfo btn btn-primary">Подробнее</a>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="clearfix">
        <?php echo $pagination; ?>
    </div>
    <?php else:?>
        <div>
        <p class = "notfound">Студенты по данной специальности не найдены</p>
        </div>
    <?php endif; ?>
    </form>
</div>