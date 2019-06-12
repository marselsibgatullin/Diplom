<div class="news container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (empty($list)): ?>
                <p>Список вакансий пуст</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <div class="post-preview">
                        <a href="/posts/detail/<?php echo $val['id']; ?>">
                            <h3 class="post-title"><?php echo htmlspecialchars($val['tittle'], ENT_QUOTES); ?></h2>
                        </a>
                        <p class="clip post-subtitle"><?php echo htmlspecialchars($val['text'], ENT_QUOTES); ?></p>
                        <p><a href="/profile/employers/<?php echo $val['emp_id']; ?>">Перейти на страницу автора</a></p>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <div class="clearfix">
                    <?php echo $pagination; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>