<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продукция</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include 'header.php'; ?>
    <main class="page-product">
        <section class="top-page" style="background-image:url(img/contacts_page_bg.jpg)">
            <div class="container">
                <h1 class="page__title">Продукция</h1>
                <h3 class="page__subtitle laser"></h3>
            </div>
        </section>
        <div class="breadcrumbs">
            <div class="container">
                <a href="index.php" class="breadcrumbs__link">Главная /</a>
                <span class="breadcrumbs__link">Продукция</span>
            </div>
        </div>
        <section class="products">
            <div class="container">
                <h2 class="products__title">Продукция</h2>
                <div class="card__wrap">
                    <a href="page-containers.php" class="card__item">
                        <div class="card__image">
                            <img src="img/products_container.jpg" alt="" class="card__img">
                        </div>
                        <div class="card__info">
                            <h3 class="card__subtitle">Ёмкости металлические</h3>
                            <p class="card__desc">Баки для питьевой воды, контейнеры для песка или стружки, тара для
                                пищевой промышленности</p>
                        </div>
                    </a>
                    <a href="page-plates.php" class="card__item">
                        <div class="card__image">
                            <img src="img/products_plates.jpg" alt="" class="card__img">
                        </div>
                        <div class="card__info">
                            <h3 class="card__subtitle">Фланцы, пластины</h3>
                            <p class="card__desc">Изготовление металлических косынок, переходников, прокладок, уголков
                                дисков, звездочек, закладных</p>
                        </div>
                    </a>
                    <a href="page-fenders.php" class="card__item">
                        <div class="card__image">
                            <img src="img/products_fenders.jpg" alt="" class="card__img">
                        </div>
                        <div class="card__info">
                            <h3 class="card__subtitle">Отбойники</h3>
                            <p class="card__desc">Производство защитных ограждений для безопасности на складе и парковке
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="light-work">
            <div class="container">
                <div class="light-work__wrap">
                    <div class="light-work__item">
                        <div class="light-work__icon">
                            <img src="img/bid_icon.png" alt="" class="light-work__img">
                        </div>
                        <h3 class="light-work__subtitle">ОСТАВЛЯЕТЕ НАМ ЗАЯВКУ</h3>
                        <p class="light-work__desc">Любым удобным способом-по почте, WhatsAp или по телефону</p>
                    </div>
                    <div class="light-work__item">
                        <div class="light-work__icon">
                            <img src="img/consult_icon.png" alt="" class="light-work__img">
                        </div>
                        <h3 class="light-work__subtitle">КОНСУЛЬТИРУЕМ ПО ИЗГОТОВЛЕНИЮ</h3>
                        <p class="light-work__desc">Уточняем необходимые параметры заказа и сроки</p>
                    </div>
                    <div class="light-work__item">
                        <div class="light-work__icon">
                            <img src="img/doc_icon.png" alt="" class="light-work__img">
                        </div>
                        <h3 class="light-work__subtitle">ПОДГОТАВЛИВАЕМ ТЕХ ДОКУМЕНТАЦИЮ</h3>
                        <p class="light-work__desc">Рассчитываем смету заказа и подготавливаем чертежи</p>
                    </div>
                    <div class="light-work__item">
                        <div class="light-work__icon">
                            <img src="img/target_icon.png" alt="" class="light-work__img">
                        </div>
                        <h3 class="light-work__subtitle">ИЗГОТОВЛИВАЕМ</h3>
                        <p class="light-work__desc">После оплаты отправляем заказ в изготовление</p>
                    </div>
                    <div class="light-work__item">
                        <div class="light-work__icon">
                            <img src="img/shipping_icon.png" alt="" class="light-work__img">
                        </div>
                        <h3 class="light-work__subtitle">ДОСТАВЛЯЕМ</h3>
                        <p class="light-work__desc">Отправляем ваш заказ в любой регион РФ</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="feed-form" id="form-block">
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
                        <button class="feed-form__button">Заказать</button>
                    </div>
                    <div class="feed-form__row">
                        <div class="checkbox">
                            <input id="usercheck" checked required type="checkbox" name="usercheck" class="checkbox__input">
                            <label for="usercheck" class="checkbox__label"><span>Я даю своё согласие на обработку
                                    персональных данных в соответствии с <a href="page-privacyPolicy.php" class="checkbox__link" target="blank">Условиями</a>*</span>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php include 'footer.php' ?>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>