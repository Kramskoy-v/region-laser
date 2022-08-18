<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма связи</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <main>
        <section class="top-page form-page">
            <div class="container">
            </div>
        </section>
        <section class="info-form">
            <div class="container">
                <h2 class="solution__title">Как оформить заказ?<br>
                    <span>Если вы самостоятельно подготавливаете файлы, присылайте нам:</span>
                </h2>
                <div class="info-form__wrap">
                    <div class="info-form__item">
                        <span class="info-form__number">1</span>
                        <h3 class="info-form__title">Чертеж в формате <br>".dxf"</h3>
                        <p class="info-form__desc">без обозначений, только векторы
                            (линии и дуги - являются траекторией
                            реза). Группируйте чертежи в папки
                            по требуемым материалам.
                            Название файла, будет
                            соответствовать позиции
                            в счете на оплату.</p>
                    </div>
                    <div class="info-form__item">
                        <span class="info-form__number">2</span>
                        <h3 class="info-form__title">Чертежи для разных <br> видов работ</h3>
                        <p class="info-form__desc">(гибка, сварка, сборка)
                            группируйте в соответствующие
                            папки</p>
                    </div>
                    <div class="info-form__item">
                        <span class="info-form__number">3</span>
                        <h3 class="info-form__title">Дополнительную <br> информацию</h3>
                        <p class="info-form__desc">(список деталей, количество
                            и дополнительные тех.операции),
                            для исключения ошибок,
                            заключите в отдельной таблице</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="feed-form">
            <div class="container">
                <h2 class="solution__title">Форма для заявок</h2>
                <form enctype="multipart/form-data" method="post" id="form" onsubmit="send(event, 'send.php')">
                    <div class="feed-form__row">
                        <input type="text" required placeholder="Имя" name="name" id="" class="input-text">
                        <input type="tel" required placeholder="Телефон" name="phone" id="" class="input-text">
                    </div>
                    <div class="feed-form__row">
                        <input type="email" placeholder="E-mail" name="email" id="" class="input-text">
                        <input type="text" required placeholder="Комментарий" name="text" id="" class="input-text">
                    </div>
                    <div class="feed-form__row">
                        <div class="input__wrapper">
                            <input name="myfile[]" type="file" id="input__file" class="input input__file" multiple>
                            <label for="input__file" class="input__file-button">
                                <span class="input__file-button-text">Прикрепить файл</span>
                            </label>
                        </div>
                        <button class="feed-form__button">Заказать</button>
                    </div>
                    <div class="feed-form__row">
                        <div class="checkbox">
                            <input id="usercheck" checked required type="checkbox" name="usercheck" class="checkbox__input">
                            <label for="usercheck" class="checkbox__label"><span>Я даю своё согласие на обработку
                                    персональных данных в соответствии с <a href="#" class="checkbox__link" target="blank">Условиями</a>*</span>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="requisites">
                <h4 class="requisites__name">ООО «Регион Лазер»</h4>
                <h5 class="requisites__legal">Юридический адрес :</h5>
                <p class="requisites__desc">394016, Воронежская обл, Воронеж г,<br>
                    Беговая ул, дом 14, квартира 26</p>
                <p class="requisites__desc">ОГРН: 1193668025803</p>
                <p class="requisites__desc">ИНН: 3664242482</p>
            </div>
            <div class="contacts form-page">

                <address>
                    <p class="contacts__info">г. Москва, просп. Андропова, 22,<br>
                        БЦ Нагатинский</p>
                    <a href="tel:+74994903000" class="contacts__info">+7(499) 490 30 00</a>
                    <a href="https://wa.me/+9003001661" class="contacts__info">WhatsApp: 8 900 300 16 61</a>
                    <a href="mailto:2120001@RL36.ru" class="contacts__info">2120001@RL36.ru</a>
                </address>
            </div>
        </div>
        <div class="back_to_top"></div>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>