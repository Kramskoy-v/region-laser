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

    <main>
        <section class="top-page contacts-page">
            <div class="container">
            </div>
        </section>
        <section class="contacts-block">
            <div class="container">
                <h2 class="contacts-block__title">Контакты</h2>
                <div class="contacts">
                    <address>
                        <p class="contacts__info">г. Москва, просп. Андропова, 22,<br>
                            БЦ Нагатинский</p>
                        <p class="contacts__info">+7(499) 490 30 00</p>
                        <p class="contacts__info">WhatsApp: 8 900 300 16 61</p>
                        <p class="contacts__info">4903000@RL36.ru</p>
                        <a href="#" class="contacts__info vk" target="_blank"><img src="img/vk.svg" class="contacts__vk" alt="Вконтакте"></a>
                    </address>
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