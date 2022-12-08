<?php
include 'header.php';
?>
<div class="mt-4">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="card p-4 mt-3">
                <div class="d-flex justify-content-center mt-4">
                    <p>Рейсы доступные на данный момент:</p>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Рейс №1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table">
                                    <thead>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><button type="button" class="btn btn-secondary">1</button><button type="button" class="btn btn-secondary">2</button><br></td><td><button type="button" class="btn btn-secondary">3</button></td>
                                    </tr>
                                    <tr>
                                        <td><button type="button" class="btn btn-secondary">4</button><button type="button" class="btn btn-secondary">5</button><br></td><td><button type="button" class="btn btn-secondary">6</button></td>
                                    </tr>
                                    <tr>
                                        <td><button type="button" class="btn btn-secondary">7</button><button type="button" class="btn btn-secondary">8</button><br></td><td><button type="button" class="btn btn-secondary">9</button></td>
                                    </tr>
                                    <tr>
                                        <td><button type="button" class="btn btn-secondary">10</button><button type="button" class="btn btn-secondary">11</button><br></td><td><button type="button" class="btn btn-secondary">12</button></td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <td><button type="button" class="btn btn-secondary">13</button><button type="button" class="btn btn-secondary">14</button><br></td><td><button type="button" class="btn btn-secondary">15</button></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-success">Подтвердить место</button>
                                <button type="button" class="btn btn-secondary">Отменить рейс</button>
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