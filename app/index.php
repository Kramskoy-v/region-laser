<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регион лазер</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include 'header.php'; ?>

    <main>
        <section class="video">
            <div class="container">
                <div class="video__wrap">
                    <h1 class="page__title">ИЗГОТОВЛЕНИЕ ИЗДЕЛИЙ ИЗ МЕТАЛЛА</h1>
                    <h2 class="page__subtitle">Комплексная металлообработка на высокоточном оборудовании в разумные
                        сроки<br>
                        Работаем с Юридическими и Физическими лицами</h2>
                    <a href="page-form.php" class="button">Оформить заказ</a>
                    <a href="#features" class="video__link">
                        <img class="video__arrow" src="img/arrow_bottom.png" alt="стрелка вниз">
                    </a>
                </div>
                <video src="video/main.mp4" type="video/mp4" muted autoplay loop> </video>
            </div>
        </section>
        <section class="features" id="features">
            <div class="container">
                <div class="features__item">
                    <div class="features__image">
                        <img src="img/manufacture.png" alt="" class="features__img">
                    </div>
                    <p class="features__desc">Собственное производство</p>
                </div>
                <div class="features__item">
                    <div class="features__image">
                        <img src="img/consult.png" alt="" class="features__img">
                    </div>
                    <p class="features__desc">Подробная консультация со специалистами</p>
                </div>
                <div class="features__item">
                    <div class="features__image">
                        <img src="img/t-doc.png" alt="" class="features__img">
                    </div>
                    <p class="features__desc">Разработка технической документации</p>
                </div>
                <div class="features__item">
                    <div class="features__image">
                        <img src="img/watching.png" alt="" class="features__img">
                    </div>
                    <p class="features__desc">Онлайн отслеживание статуса заказа</p>
                </div>
                <div class="features__item">
                    <div class="features__image">
                        <img src="img/shipping.png" alt="" class="features__img">
                    </div>
                    <p class="features__desc">Доставка в любой регион РФ</p>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="features__image">
                                <img src="img/manufacture.png" alt="" class="features__img">
                            </div>
                            <p class="features__desc">Собственное производство</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="features__image">
                                <img src="img/consult.png" alt="" class="features__img">
                            </div>
                            <p class="features__desc">Подробная консультация со специалистами</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="features__image">
                                <img src="img/t-doc.png" alt="" class="features__img">
                            </div>
                            <p class="features__desc">Разработка технической документации</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="features__image">
                                <img src="img/watching.png" alt="" class="features__img">
                            </div>
                            <p class="features__desc">Онлайн отслеживание статуса заказа</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="features__image">
                                <img src="img/shipping.png" alt="" class="features__img">
                            </div>
                            <p class="features__desc">Доставка в любой регион РФ</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <section class="solution">
            <div class="container">
                <h2 class="solution__title">Напишите нам и мы поможем решить любую задачу<br>
                    <span>изготовим как простые детали, так и сложные металлоконструкции</span>
                </h2>
                <div class="button">Подробнее</div>
            </div>
        </section>
        <section class="services" id="services_block">
            <div class="container">
                <h2 class="services__title">Наши услуги</h2>
                <div class="card__wrap">
                    <a href="page-laser.php" class="card__item">
                        <div class="card__image">
                            <img src="img/services_laser.jpg" alt="" class="card__img">
                        </div>
                        <div class="card__info">
                            <h3 class="card__subtitle">Лазерная резка листового металла</h3>
                            <p class="card__desc">Размер рабочего поля 2000х3000мм Толщины от 0,5мм до 16мм</p>
                        </div>
                    </a>
                    <a href="#" class="card__item">
                        <div class="card__image">
                            <img src="img/services_plasma.jpg" alt="" class="card__img">
                        </div>
                        <div class="card__info">
                            <h3 class="card__subtitle">Плазменная резка листового металла</h3>
                            <p class="card__desc">Размер рабочего поля 1500х3000мм Толщины от 5мм до 40мм</p>
                        </div>
                    </a>
                    <a href="#" class="card__item">
                        <div class="card__image">
                            <img src="img/services_bend.jpg" alt="" class="card__img">
                        </div>
                        <div class="card__info">
                            <h3 class="card__subtitle">Гибка листового металла</h3>
                            <p class="card__desc">Современное высокоточное ЧПУ оборудование</p>
                        </div>
                    </a>
                    <a href="#" class="card__item">
                        <div class="card__image">
                            <img src="img/services_welding.jpg" alt="" class="card__img">
                        </div>
                        <div class="card__info">
                            <h3 class="card__subtitle">Все виды сварочных работ</h3>
                            <p class="card__desc">Новейшее оборудование для сварки толщин от 0,8мм</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="extras">
            <div class="container">
                <h2 class="extras__title">Мы поможем<br>
                    <span>с разработкой и подготовкой</span>
                </h2>
                <div class="extras__wrap">
                    <div class="extras__item">
                        <div class="extras__image">
                            <img src="img/extras_doc.png" alt="" class="extras__img">
                        </div>
                        <p class="extras__desc">Конструкторской документации</p>
                    </div>
                    <div class="extras__item">
                        <div class="extras__image">
                            <img src="img/extras_3d.png" alt="" class="extras__img">
                        </div>
                        <p class="extras__desc">3D моделей</p>
                    </div>
                    <div class="extras__item">
                        <div class="extras__image">
                            <img src="img/extras_revers.png" alt="" class="extras__img">
                        </div>
                        <p class="extras__desc">Реверс - инжиниринга</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="painting">
            <div class="container">
                <div class="painting__image">
                    <img src="img/painting.jpg" alt="" class="painting__img">
                </div>
                <div class="painting__info">
                    <h2 class="painting__title">Порошковая покраска</h2>
                    <p class="painting__desc">Мы устанавливаем разумные цены
                        на все виды работ. Напишите нам, если у вас появились вопросы!</p>
                    <a href="#" class="painting__link button">Подробнее</a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php' ?>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>