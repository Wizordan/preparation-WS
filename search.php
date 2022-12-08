<?php
include 'header.php';
?>
<link rel="stylesheet" href="css/booking.css">
<div class="container">
    <h2>Найдите поездку</h2>
    <div class="row">
        <div class="col-12">
            <form class="form">
                <div class="row mb-2">
                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                        <select name="" id="" class="form-control custom-select">
                            <option value="">Назначение</option>
                            <option value="">Дагестан</option>
                            <option value="">Иннополис</option>
                            <option value="">Грозный</option>
                            <option value="">Свияжск</option>
                            <option value="">Арзамас</option>
                            <option value="">Казань</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
                        <input type="text" class="form-control" name="daterange">
                    </div>
                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
                        <input type="text" class="form-control" placeholder="# человек">
                    </div>

                </div>
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                        <input type="submit" class="btn btn-primary btn-block" value="Найти">
                    </div>
                    <div class="col-lg-8">
                        <label class="control control--checkbox mt-3">
                            <span class="caption">Сохранить поиск</span>
                            <input type="checkbox" checked="checked" />
                            <div class="control__indicator"></div>
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br><br><br>
    <h3>Результаты поиска по вашему запросу</h3>
    <div class="category__content-tours">
        <ul class="category__tours-list" id="posts">
            <li class="category__tours-item clearfix">
                <a href="#" class="category__tours-link clearfix" title="автобусный тур Умный город Иннополис – Остров-град Свияжск">
                    <div class="category__tours-left category__tours-left--53526" style="background-image: url(images/inno.jpg)"></div>
                    <div class="category__tours-right">
                        <div class="category__tours-top category__tours-top_featured">
                            <div class="category__tours-inner  category__tours-inner_featured">
                                <h4 class="category__tours-title">Умный город Иннополис – Остров-град Свияжск</h4>
                                <div class="category__tours-excerpt">Номер рейса: 2123           Автобус: Желтый крутой
                                    <br> Время отправления: 15:00           Время прибытия: 18:00           Время в пути: 3 часа</div>
                            </div>
                        </div>
                        <div class="category__tours-bottom clearfix">
                            <div class="category__tours-cost category__tours-cost_featured"><span title="Цена">от 2300 р.</span><span class="category__tours-date" title="Ближайший выезд"><img src="images/calendar.png" alt="" class="category__tours-image category__tours-image_desktop"><img src="images/calendar_sky.png" alt="" class="category__tours-image category__tours-image_mobile"> Вероятность отправления 25.12.2022 составляет 50%.</span></div>
                            <div class="category__tours-more category__tours-more_featured" data-remodal-target="request">
                                Заказать
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="category__tours-item clearfix">
                <a href="#" class="category__tours-link clearfix" title="автобусный тур Новогодний Дагестан + Грозный">
                    <div class="category__tours-left category__tours-left--53477" style="background-image: url(images/dages.jpg)"></div>
                    <div class="category__tours-right">
                        <div class="category__tours-top category__tours-top_featured">
                            <div class="category__tours-inner  category__tours-inner_featured">
                                <h4 class="category__tours-title">Новогодний Дагестан + Грозный</h4>
                                <div class="category__tours-excerpt">Номер рейса: 2123           Автобус: Желтый крутой
                                    <br> Время отправления: 15:00           Время прибытия: 18:00           Время в пути: 3 часа</div>
                            </div>
                        </div>
                        <div class="category__tours-bottom clearfix">
                            <div class="category__tours-cost category__tours-cost_featured"><span title="Цена">от 34500 руб</span><span class="category__tours-date" title="Ближайший выезд"><img src="images/calendar.png" alt="" class="category__tours-image category__tours-image_desktop"><img src="images/calendar_sky.png" alt="" class="category__tours-image category__tours-image_mobile"> Вероятность отправления 29.12.2022 составляет 25%.</span></div>
                            <div class="category__tours-more category__tours-more_featured" data-remodal-target="request">Заказать</div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="category__tours-item clearfix">
                <a href="#" class="category__tours-link clearfix" title="автобусный тур Нижний Новгород + Фабрика ёлочных игрушек">
                    <div class="category__tours-left category__tours-left--53453" style="background-image: url(images/eloc.jpg)"></div>
                    <div class="category__tours-right">
                        <div class="category__tours-top category__tours-top_featured">
                            <div class="category__tours-inner  category__tours-inner_featured">
                                <h4 class="category__tours-title">Нижний Новгород + Фабрика ёлочных игрушек</h4>
                                <div class="category__tours-excerpt">Номер рейса: 2123           Автобус: Желтый крутой
                                    <br> Время отправления: 15:00           Время прибытия: 18:00           Время в пути: 3 часа</div>
                            </div>
                        </div>
                        <div class="category__tours-bottom clearfix">
                            <div class="category__tours-cost category__tours-cost_featured"><span title="Цена">от 3700 р</span><span class="category__tours-date" title="Ближайший выезд"><img src="images/calendar.png" alt="" class="category__tours-image category__tours-image_desktop"><img src="images/calendar_sky.png" alt="" class="category__tours-image category__tours-image_mobile"> Вероятность отправления 22.01.2023 составляет 5%.</span></div>
                            <div class="category__tours-more category__tours-more_featured" data-remodal-target="request">Заказать</div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php
include 'footer.php';
?>
