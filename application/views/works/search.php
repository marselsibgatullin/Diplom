<div class="vacancy container">
<form action="/works/search" method="POST">
    <div class="form-group">
        <label class="col-sm-6 control-label">Введите ключевые слова:</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="key_words" name="key_words">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-8">
            <p>*Ключевые слова вводить маленькими буквами и разделять запятой и пробелом.</p>
        </div>
    </div>
    <div class="form-group col-sm-12">
		<button type="submit" class="moreinfo btn btn-primary">Поиск</button>
	</div>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-header">Совпадения</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php if (empty($list)): ?>
                                <p>Подходящие работы не найдены</p>
                            <?php else: ?>
                                <table class="table">
                                    <tr>
                                        <th>Автор</th>
                                        <th>Название работы</th>
                                        <th>Скачать</th>
                                    </tr>
                                    <?php foreach ($list as $val): ?>
                                    <tr>
                                            <td><a href="/profile/students/<?php echo $val[0]; ?>"><?php echo $val[2]; echo ' '; echo $val[1]; ?></a></td>
                                            <td><?php echo $val['tittle'];?></td>
                                            <td><a href="/profile/download/<?php echo $val['id']; ?>">Скачать работу</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>