<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include 'header.php'; ?>

    <main class="page-contacts">
        <section class="top-page">
            <div class="container"  style="background-image:url(img/contacts_page_bg.jpg)">
            <h1 class="page__title">Контакты</h1>
                <h3 class="page__subtitle"></h3>
            </div>
        </section>
        <div class="breadcrumbs">
            <div class="container">
                <a href="index.php" class="breadcrumbs__link">Главная /</a>
                <a href="page-about.php" class="breadcrumbs__link">О компании /</a>
                <span class="breadcrumbs__link">Контакты</span>
            </div>
        </div>
        <section class="contacts-block">
            <div class="container">
               <div class="contacts">
                   <p class="contacts__info">Phone: +7 (499) 490-30-00</p>
                        <p class="contacts__info">E-mail: 2120001@RL36.ru </p>
                        <p class="contacts__info">E-mail: buh@RL36.ru (Бухгалтерия)</p>
                        <p class="contacts__info">Адрес: г. Москва, пр-т. Андропова 22,
                            <br>Бизнес Центр Нагатинский</p>
                 <a href="https://vk.com/regionlaser99" class="contacts__info vk" target="_blank"><img src="img/vk.svg" class="contacts__vk" alt="Вконтакте"></a>
                </div>
                <div class="contacts">
                <p class="contacts__info">ООО «РЕГИОН ЛАЗЕР»</p>
                <p class="contacts__info">ИНН: 3664242482</p>
                <p class="contacts__info">ОГРН: 1193668025803</p>
                <p class="contacts__info">Адрес производства: 394019, Россия,
                    <br>г.Воронеж, ул. Торпедо 45Р</p>
             
                </div>
            </div>
        </section>
        <section class="map">
            <div class="container">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac41ef0a568d46092c0b3820eeed37b730fa4d8c4b332724ea06735f95170e14d&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>