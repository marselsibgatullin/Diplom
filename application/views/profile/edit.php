<div class="container emp-profile">
            <form action = "/profile/edit" method="post">
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
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h3>
                                        Личная информация
                                    </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <?php if(isset($_SESSION['student'])): ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Дата рождения</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" id="inputBirthday" name="birthday" value="<?php echo $_SESSION['student']['birthday'];?>">
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Мобильный телефон</label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php if(isset($_SESSION['student'])): ?>
                                                <input type="text" class="form-control phone" id="inputNumber" name="number" value="<?php echo $_SESSION['student']['number'];?>">
                                                <?php elseif(isset($_SESSION['employer'])): ?>
                                                <input type="text" class="form-control phone" id="inputNumber" name="number" value="<?php echo $_SESSION['employer']['number'];?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Город</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php if(isset($_SESSION['student'])): ?>
                                                <input type="text" class="form-control phone" id="inputCity" name="city" value="<?php echo $_SESSION['student']['city'];?>">
                                                <?php elseif(isset($_SESSION['employer'])): ?>
                                                <input type="text" class="form-control phone" id="inputCity" name="city" value="<?php echo $_SESSION['employer']['city'];?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php if(isset($_SESSION['student'])): ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Университет</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="inputUniversity" name="university" value="<?php echo $_SESSION['student']['university'];?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Специальность</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select id="speciality" class="form-control" name="speciality">
                                                <option disabled>Выберите специальность</option>
                                                <option <?php if ($_SESSION['student']['speciality']=="(АНТЭ) Авиации, наземные транспорты и энергетика") echo "selected";?>>(АНТЭ) Авиации, наземные транспорты и энергетика</option>
                                                <option <?php if ($_SESSION['student']['speciality']=="(ФМФ) Физика и математика") echo "selected";?>>(ФМФ) Физика и математика</option>
                                                <option <?php if ($_SESSION['student']['speciality']=="(АЭП) Автоматики и электронное приборостроение") echo "selected";?>>(АЭП) Автоматики и электронное приборостроение</option>
                                                <option <?php if ($_SESSION['student']['speciality']=="(КТЗИ) Компьютерные технологии и защита информации") echo "selected";?>>(КТЗИ) Компьютерные технологии и защита информации</option>
                                                <option <?php if ($_SESSION['student']['speciality']=="(РЭТ) Радиоэлектроники и телекоммуникаций") echo "selected";?>>(РЭТ) Радиоэлектроника и телекоммуникации</option>
                                                <option <?php if ($_SESSION['student']['speciality']=="(ЭУИСТ) Экономика, управление и социальные технологии") echo "selected";?>>(ЭУИСТ) Экономика, управление и социальные технологии</option>
			                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Курс</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="inputStage" name="stage" value="<?php echo $_SESSION['student']['stage'];?>">
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
                                                <?php if(isset($_SESSION['student'])): ?>
                                                <textarea class="form-control" id="inputAbout" name="about"><?php echo $_SESSION['student']['about'];?></textarea>
                                                <?php elseif(isset($_SESSION['employer'])): ?>
                                                <textarea class="form-control" id="inputAbout" name="about"><?php echo $_SESSION['employer']['about'];?></textarea><?php endif; ?></textarea>
                                            </div>
                                        </div>
                                <div class="profile-btn col-md-6">
                                    <button type="submit" class="btn profile-edit-btn">Сохранить</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>