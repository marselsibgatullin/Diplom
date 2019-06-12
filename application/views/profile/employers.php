<div class="container emp-profile">
            <form method="post" action = "/profile/students/">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <h3>
                                <p><?php echo ($_SESSION['info']['company']);?>
                            </h3>
                            <h6>   
                                Работодатель
                            </h6>
                            <div class="profile-btn col-md-12">
                                <a class="btn profile-edit-btn" href="/profile/news/<?php echo $_SESSION['info']['id'];?>">Список вакансий</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h3>
                                        Личная информация
                                    </h3>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
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
                                                <label>О нас</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo ($_SESSION['info']['about']);?>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>