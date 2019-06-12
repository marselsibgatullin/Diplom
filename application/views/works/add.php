<form class="form-add" method="post" enctype="multipart/form-data" action="/works/add">
    <?php if(isset($vars['error'])): ?>
		<div class="alert alert-danger col-md-8" role="alert">
	    	<?php echo($vars['error']); ?>
		</div>
    <?php endif;?>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Название предмета</label>
        <div class="col-sm-8">
            <input type="text" id="course" class="form-control" name="course" placeholder="Название предмета">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Название файла</label>
        <div class="col-sm-8">
            <input type="text" id="tittle" class="form-control" name="tittle" placeholder="Название файла">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Ключевые слова</label>
        <div class="col-sm-8">
            <input type="text" id="key_words" class="form-control" name="key_words" placeholder="Ключевые слова">
        </div>
    </div>
    <div class="form-group">
        <label for="file" class="col-sm-2 control-label">Файл</label>
        <div class="col-sm-8">
            <input type="file" name="uploadFile" id="file">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" id="submit" class="moreinfo">Отправить</button>
            <div></div>
        </div>
    </div>
</form>