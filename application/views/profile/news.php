<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Мои работы</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <?php if (empty($list)): ?>
                            <p>Список созданных вакансий пуст</p>
                        <?php else: ?>
                            <table class="table">
                                <tr>
                                    <th>Название</th>
                                    <th>Просмотреть</th>
                                </tr>
                                <?php foreach ($list as $val): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($val['tittle'], ENT_QUOTES); ?></td>
                                        <td><a href="/posts/detail/<?php echo $val['id']; ?>" class="btn btn-primary">Просмотреть</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>