<?php
include 'header.php';
?>
<link rel="stylesheet" href="css/style1.css">
<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://wa-groups.ru/img/user5.png" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Изменить фото
                        <input type="file" name="file"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        Имя Фамилия
                    </h5>
                    <h6>
                        Статус
                    </h6>
                    <p class="proile-rating">Количество круизов : <span>0</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Предстоящие бронирования</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Архив</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn btn-danger text-white" name="btnAddMore" value="Выйти"/>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>Ссылки</p>
                    <a href="">Ссылка 1</a><br/>
                    <a href="">Ссылка 2</a><br/>
                    <a href="">Ссылка 3</a>
                    <p>Ссылки</p>
                    <a href="">Ссылка 1</a><br/>
                    <a href="">Ссылка 2</a><br/>
                    <a href="">Ссылка 3</a><br/>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Рейс №1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Код бронирования</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123456ABC</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Дата бронирования</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>12.12.2022</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Время отправления</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>12:01</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Время прибытия</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>15:03</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Адрес города отправления</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Город</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Адрес города назначения</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Город</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </form>
</div>
<?php
include 'footer.php';
?>
