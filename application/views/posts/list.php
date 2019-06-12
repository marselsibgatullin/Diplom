<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Мои вакансии</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <?php if (empty($list)): ?>
                            <p>Список созданных вакансий пуст</p>
                            <a href="/posts/add" class="btn btn-primary">Добавить</a>
                        <?php else: ?>
                            <table class="table">
                                <tr>
                                    <th>Название</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                                <?php foreach ($list as $val): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($val['tittle'], ENT_QUOTES); ?></td>
                                        <td><a href="/posts/edit/<?php echo $val['id']; ?>" class="btn btn-primary">Редактировать</a></td>
                                        <td><a href="/posts/delete/<?php echo $val['id']; ?>" class="btn btn-danger">Удалить</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            <?php echo $pagination; ?>
                        <?php endif; ?>
                        <?php if (!empty($list)): ?>
                            <a href="/posts/add" class="btn btn-primary">Добавить</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>