<?php
include 'header.php';
?>
<link rel="stylesheet" href="css/booking_managment.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="mt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9">
                <div class="card p-4 mt-3"><h3 class="heading mt-5 text-center">Управление бронью</h3>
                    <div class="d-flex justify-content-center px-5">
                        <div class="search"><input type="text" class="search-input" placeholder="Введите код бронирования" name=""> </div>
                    </div>
                    <div class="d-flex justify-content-center px-5">
                        <div class="search"><input type="text" class="search-input" placeholder="Введите адрес электронной почты" name=""> </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button type="button" class="btn">
                            <a href="#" class="search-icon"> <i class="fa fa-search"></i></a>
                        </button>
                    </div>
                    <!-- Modal -->
                    <div class="d-flex justify-content-center mt-4">
                        <p>Зайдя в бронирование, Вы сможете ознакомиться со следующей информацией:</p>
                    </div>
                    <div class="row g-1 px-4 mb-5">
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"><img
                                        src="https://i.imgur.com/Mb8kaPV.png" width="50">
                                <div class="text-center mg-text"><span class="mg-text">Данные о брони</span></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"><img
                                        src="https://i.imgur.com/ueLEPGq.png" width="50">
                                <div class="text-center mg-text"><span class="mg-text">Платежная информация</span></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"><img
                                        src="https://i.imgur.com/tmqv0Eq.png" width="50">
                                <div class="text-center mg-text"><span class="mg-text">Дата отправления</span></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"><img
                                        src="https://i.imgur.com/D0Sm15i.png" width="50">
                                <div class="text-center mg-text"><span class="mg-text">Информация о багаже</span></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"><img
                                        src="https://i.imgur.com/Z7BJ8Po.png" width="50">
                                <div class="text-center mg-text"><span class="mg-text">Возврат</span></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-inner p-3 d-flex flex-column align-items-center"><img
                                        src="https://i.imgur.com/YLsQrn3.png" width="50">
                                <div class="text-center mg-text"><span class="mg-text">Гарантии</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionInfoRace">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Информация о рейсе
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="col-md-7 col-lg-8">
                                        <h4 class="mb-3">Информация о бронировании</h4>
                                        <form class="needs-validation" novalidate="">
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label for="code_race" class="form-label">Код бронирования</label>
                                                    <input class="form-control" type="text" value="123456ABC" aria-label="Disabled input example" disabled readonly>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="cost_race" class="form-label">Стоимость бронирования</label>
                                                    <input class="form-control" type="text" value="2 000 RUB" aria-label="Disabled input example" disabled readonly>
                                                </div>

                                                <div class="col-12">
                                                    <label for="number_race" class="form-label">Номер рейса</label>
                                                    <div class="input-group has-validation">
                                                        <input class="form-control" type="text" value="АБС123" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label for="bus_race" class="form-label">Автобус</label>
                                                    <div class="input-group has-validation">
                                                        <input class="form-control" type="text" value="ЛиАЗ-677" aria-label="Disabled input example" disabled readonly>
                                                    </div>
                                                </div>

                                                <!--                                           Информация об автобусной перевозке-->
                                                <!--                                           Отправления-->

                                                <div class="col-md-3">
                                                    <label for="OutCity_race" class="form-label">Город отправления</label>
                                                    <input class="form-control" type="text" value="Чебоксары" aria-label="Disabled input example" disabled readonly>
                                                    <div class="invalid-feedback">
                                                        Expiration date required
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="OutAddress_race" class="form-label">Адрес отправления</label>
                                                    <input class="form-control" type="text" value="Чебоксары, пр. Яковлева, д.18, корп.2" aria-label="Disabled input example" disabled readonly>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="OutDate_race" class="form-label">Дата отправления</label>
                                                    <input class="form-control" type="text" value="8 декабря 2022 г." aria-label="Disabled input example" disabled readonly>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="OutTime_race" class="form-label">Время отправления</label>
                                                    <input class="form-control" type="text" value="12:08" aria-label="Disabled input example" disabled readonly>
                                                </div>

                                                <!--                                            Прибытие-->

                                                <div class="col-md-3">
                                                    <label for="InCity_race" class="form-label">Город назначения</label>
                                                    <input class="form-control" type="text" value="Чебоксары" aria-label="Disabled input example" disabled readonly>
                                                    <div class="invalid-feedback">
                                                        Expiration date required
                                                    </div>
                                                </div>


                                                <div class="col-md-3">
                                                    <label for="InAddress_race" class="form-label">Адрес назначения</label>
                                                    <input class="form-control" type="text" value="Чебоксары, пр. Яковлева, д.18, корп.2" aria-label="Disabled input example" disabled readonly>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="InDate_race" class="form-label">Дата назначения</label>
                                                    <input class="form-control" type="text" value="8 декабря 2022 г." aria-label="Disabled input example" disabled readonly>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="InTime_race" class="form-label">Время прибытия</label>
                                                    <input class="form-control" type="text" value="15:53" aria-label="Disabled input example" disabled readonly>
                                                </div>

                                                <div class="col-12">
                                                    <label for="Timeline_race" class="form-label">Время в пути</label>
                                                    <input class="form-control" type="text" value="3 часа 45 минут" aria-label="Disabled input example" disabled readonly>
                                                </div>

                                                <div class="col-12">
                                                    <label for="Chance_race" class="form-label">Вероятность отправления <span class="text-muted">(Шансы)</span></label>
                                                    <input class="form-control" type="text" value="100%" aria-label="Disabled input example" disabled readonly>
                                                </div>
                                            </div>


                                            <hr class="my-4">

                                            <h4 class="mb-3">Информация о пассажирах</h4>

                                            <div class="row gy-3">
                                                <div class="col-md-4">
                                                    <label for="Name_race" class="form-label">Имя</label>
                                                    <input class="form-control" type="text" value="Артём" aria-label="Disabled input example" disabled readonly>
                                                    <small class="text-muted">Данные видите только Вы.</small>
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="Surname_race" class="form-label">Фамилия</label>
                                                    <input class="form-control" type="text" value="Абрамов" aria-label="Disabled input example" disabled readonly>
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="datebirth_race" class="form-label">Дата рождения</label>
                                                    <input class="form-control" type="text" value="27 января 2004 г." aria-label="Disabled input example" disabled readonly>
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="numberdoc_race" class="form-label">Номер документа</label>
                                                    <input class="form-control" type="text" value="12 34 567890" aria-label="Disabled input example" disabled readonly>
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="OutPlace_race" class="form-label">Место в автобусе туда</label>
                                                    <input class="form-control" type="text" value="1 этаж, 8 место" aria-label="Disabled input example" disabled readonly>
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="InPlace_race" class="form-label">Место в автобусе обратно</label>
                                                    <input class="form-control" type="text" value="2 этаж, 4 место" aria-label="Disabled input example" disabled readonly>
                                                </div>
                                            </div>

                                            <hr class="my-4">

                                        </form>
                                    </div>
                                    <button type="button" class="btn btn-danger">Отменить бронь</button>
                                    <button type="button" class="btn btn-secondary">Изменить рейс</button>
                                    <button type="button" class="btn btn-light">Электронный чек</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
<?php
include 'footer.php';
?>