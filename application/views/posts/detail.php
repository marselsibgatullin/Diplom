<form class="form-add" method="post" action="/posts/add">
    <?php if(isset($vars['error'])): ?>
		<div class="alert alert-danger col-md-8" role="alert">
	    	<?php echo($vars['error']); ?>
		</div>
    <?php endif;?>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label"><b>Заголовок вакансии:</b></label>
        <div class="col-sm-8">
            <h4 class="post-title"><?php echo ($vars[0]['tittle']); ?></h4>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label"><b>Специальность:</b></label>
        <div class="col-sm-8">
            <h5 class="post-title"><?php echo ($vars[0]['speciality']); ?></h5>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label"><b>Описание вакансии:</b></label>
        <div class="col-sm-8">
            <p><em><?php echo ($vars[0]['text']); ?></em></p>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-8">
            <p><b>Профиль автора:</b><a href="/profile/employers/<?php echo $vars[0]['emp_id']; ?>">    Ссылка</a></p>
        </div>
    </div>
</form>