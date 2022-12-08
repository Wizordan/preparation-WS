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
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <a href="#" class="search-icon"> <i class="fa fa-search"></i></a>
                    </button>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Информация о рейсе
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Дата отправки</th>
                                                        <th scope="col">Дата прибытия</th>
                                                        <th scope="col">Выход на посадку</th>
                                                        <th scope="col">Время посадки</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>1</td>
                                                        <td>sadasd</td>
                                                        <td>asdasd</td>
                                                        <td>asdasdasd</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td colspan="2">Larry the Bird</td>
                                                        <td>@twitter</td>
                                                        <td>@twitter</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Информация о рейсе
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Дата отправки</th>
                                        <th scope="col">Дата прибытия</th>
                                        <th scope="col">Выход на посадку</th>
                                        <th scope="col">Время посадки</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>1 декабря 15:21</td>
                                        <td>2 декабря 18:12</td>
                                        <td>GATE1</td>
                                        <td>Бог знает</td>
                                    </tr>
                                    </tbody>
                                </table>
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