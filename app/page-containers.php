<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ёмкости металлические</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include 'header.php'; ?>
    <main class="page-product">
        <section class="top-page">
            <div class="container">
                <h1 class="page__title">Ёмкости металлические</h1>
                <h2 class="page__subtitle laser"></h2>
            </div>
        </section>
        <div class="breadcrumbs">
            <div class="container">
                <a href="index.php" class="breadcrumbs__link">Главная /</a>
                <a href="page-products.php" class="breadcrumbs__link">Продукция /</a>
                <span class="breadcrumbs__link">Ёмкости металлические</span>
            </div>
        </div>
        <section class="painting">
            <div class="container">
                <div class="painting__image">
                    <img src="img/products_container.jpg" alt="" class="painting__img">
                </div>
                <div class="painting__info">
                    <h2 class="painting__title">Ёмкости металлические</h2>
                    <p class="painting__desc">Баки для питьевой воды, контейнеры для песка или стружки, тара для
                        пищевой промышленности</p>
                    <a href="#form-block" class="button">Заказать</a>
                </div>
            </div>
        </section>
        <section class="product-info">
            <div class="container">
                <div class="swiper mySwiper swiperProduct">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="info-block__image">
                                <img src="img/laser_page_1.jpg" alt="" class="info-block__img">
                            </div>
                            <h3 class="info-block__title">Высокая точность обработки</h3>
                        </div>
                        <div class="swiper-slide">
                            <div class="info-block__image">
                                <img src="img/laser_page_2.jpg" alt="" class="info-block__img">
                            </div>
                            <h3 class="info-block__title">Отсутствие необходимости в финишной обработке</h3>
                        </div>
                        <div class="swiper-slide">
                            <div class="info-block__image">
                                <img src="img/laser_page_3.jpg" alt="" class="info-block__img">
                            </div>
                            <h3 class="info-block__title">Экономичное использование материала</h3>
                        </div>
                        <div class="swiper-slide">
                            <div class="info-block__image">
                                <img src="img/laser_page_1.jpg" alt="" class="info-block__img">
                            </div>
                            <h3 class="info-block__title">Высокая точность обработки</h3>
                        </div>
                        <div class="swiper-slide">
                            <div class="info-block__image">
                                <img src="img/laser_page_2.jpg" alt="" class="info-block__img">
                            </div>
                            <h3 class="info-block__title">Отсутствие необходимости в финишной обработке</h3>
                        </div>
                        <div class="swiper-slide">
                            <div class="info-block__image">
                                <img src="img/laser_page_3.jpg" alt="" class="info-block__img">
                            </div>
                            <h3 class="info-block__title">Экономичное использование материала</h3>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
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