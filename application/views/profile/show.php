<div class="container emp-profile">
            <form method="post" action = "/profile/edit">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <h3>
                                <?php if(isset($_SESSION['student'])): echo ($_SESSION['student']['name']); echo(' '); echo ($_SESSION['student']['surname']); ?>
                                <?php elseif(isset($_SESSION['employer'])): echo ($_SESSION['employer']['company']); endif;?>
                            </h3>
                            <?php if(isset($_SESSION['student'])): ?>
                                <h6>   
                                    Студент
                                </h6>
                            <?php elseif(isset($_SESSION['employer'])): ?>
                                <h6>   
                                    Работодатель
                                </h6>
                            <?php else: ?>
                                <h6>   
                                    None
                                </h6>
                            <?php endif; ?>
                            <div class="profile-btn col-md-12">
                                <a class="btn profile-edit-btn" href="/profile/edit">Редактировать профиль</a>
                            </div>
                            <?php if(isset($_SESSION['student'])): ?>
                            <div class="profile-btn col-md-12">
                                <a class="btn profile-edit-btn" href="/works/list/1">Список моих работ</a>
                            </div>
                            <?php elseif(isset($_SESSION['employer'])): ?>
                            <div class="profile-btn col-md-12">
                                <a class="btn profile-edit-btn" href="/posts/list/1">Список моих вакансий</a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h3>
                                        Личная информация
                                    </h3>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <?php if(isset($_SESSION['student'])): ?>
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Информация</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Блог</a>
                                </li> -->
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">   
                    </div>
                    <div class="prof col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>E-mail</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php if(isset($_SESSION['student'])): echo ($_SESSION['student']['email']);?>
                                                <?php elseif(isset($_SESSION['employer'])): echo ($_SESSION['employer']['email']); endif;?></p>
                                            </div>
                                        </div>
                                        <?php if(isset($_SESSION['student'])): ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Дата рождения</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo ($_SESSION['student']['birthday']);?></p>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Мобильный телефон</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><?php if(isset($_SESSION['student'])): echo ($_SESSION['student']['number']);?>
                                                <?php elseif(isset($_SESSION['employer'])): echo ($_SESSION['employer']['number']); endif;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Город</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><?php if(isset($_SESSION['student'])): echo ($_SESSION['student']['city']);?>
                                                <?php elseif(isset($_SESSION['employer'])): echo ($_SESSION['employer']['city']); endif;?></p>
                                            </div>
                                        </div>
                                        <?php if(isset($_SESSION['student'])): ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Университет</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo ($_SESSION['student']['university']);?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Специальность</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo ($_SESSION['student']['speciality']);?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Курс</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo ($_SESSION['student']['stage']);?></p>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <?php if(isset($_SESSION['student'])): ?>
                                                    <label>Обо мне</label>
                                                <?php elseif(isset($_SESSION['employer'])): ?>
                                                    <label>О Нас</label>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php if(isset($_SESSION['student'])): echo ($_SESSION['student']['about']);?>
                                                <?php elseif(isset($_SESSION['employer'])): echo ($_SESSION['employer']['about']); endif;?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Список постов с фото(необязательно)</label><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>