<?php
include 'header.php';
?>

<section class="pb-4">
    <div class="bg-white border rounded-5">

        <section class="w-100 p-4 d-flex justify-content-center pb-4">
            <form style="width: 26rem;">
                <p class="text-center fs-1">Авторизация</p>

                <div class="form-outline mb-4">
                    <input type="text" id="form3Example3" class="form-control">
                    <label class="form-label" for="form3Example3" style="margin-left: 0px;">Номер телефона</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>

                <div class="form-outline mb-4">
                    <input type="password" id="form3Example4" class="form-control">
                    <label class="form-label" for="form3Example4" style="margin-left: 0px;">Пароль</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64.8px;"></div><div class="form-notch-trailing"></div></div></div>

                <button type="button" class="btn btn-primary btn-block mb-4">Войти</button>
            </form>
        </section>
    </div>
</section>

<?php
include 'footer.php';
?>
