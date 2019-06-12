<div class="container emp-profile">
            <form method="post" action = "/profile/students/">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <h3>
                                <p><?php echo ($_SESSION['info']['name']); echo(' '); echo ($_SESSION['info']['surname']);?>
                            </h3>
                            <h6>   
                                Студент
                            </h6>
                            <div class="profile-btn col-md-12">
                                <a class="btn profile-edit-btn" href="/students/works/<?php echo $_SESSION['info']['id'];?>">Список работ студента</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h3>
                                        Личная информация
                                    </h3>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Обо мне</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">   
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                            <div class="col-md-6">
                                                <label>E-mail</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo ($_SESSION['info']['email']);?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Дата рождения</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo ($_SESSION['info']['birthday']);?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Мобильный телефон</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><?php echo ($_SESSION['info']['number']);?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Город</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p><?php echo ($_SESSION['info']['city']);?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Университет</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo ($_SESSION['info']['university']);?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Специальность</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo ($_SESSION['info']['speciality']);?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Курс</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo ($_SESSION['info']['stage']);?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Обо мне</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo ($_SESSION['info']['about']);?>
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