<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Лиза Дадонова">
    <meta name="keywords" content="animals, pets">

    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="../styles/bootstrap.css">
    <link rel="stylesheet" href="../styles/base-styles.css">
    <link rel="stylesheet" href="../styles/preloader.css">
    <link rel="stylesheet" href="../styles/fonts.css">

    <link rel="stylesheet" href="../styles/landing_page/header.css">
    <link rel="stylesheet" href="../styles/landing_page/about-us.css">
    <link rel="stylesheet" href="../styles/landing_page/our-pets.css">
    <link rel="stylesheet" href="../styles/landing_page/help.css">
    <link rel="stylesheet" href="../styles/landing_page/footer.css">
    <link rel="stylesheet" href="../styles/landing_page/validation.css">
    <link rel="stylesheet" href="../styles/landing_page/threads.css">
    <link rel="stylesheet" href="../styles/landing_page/log.css">

    <link rel="favicon icon" href="../images/logo.svg">
    <title>
        Tangle
    </title>

    <script src="../scripts/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="preloader">
        <div class="preloader_image"></div>
    </div>
    
    <div class="log"></div>

    <div class="header header_bg">
        <div class="container">
            <nav class="row nav">
                <div class="col-5 col-md-6 logo">
                    <img class="logo_image"
                         src="../images/logo.svg"
                         alt="logo">
                </div>

                <div class="col-md-6 nav__burger"><span></span></div>

                <ul class="col-7 col-md-12 nav__ul">
                    <li class="nav__li">
                        <a class="nav_font"
                           href="#about-us">
                            О приюте
                        </a>
                    </li>

                    <li class="nav__li">
                        <a class="nav_font"
                           href="#our-pets">
                            Наши питомцы
                        </a>
                    </li>

                    <li class="nav__li">
                        <a class="nav_font"
                           href="#help">
                            Помощь
                        </a>
                    </li>

                    <li class="nav__li">
                        <a class="nav_font"
                           href="personal-account.php">
                            Личный кабинет
                        </a>
                    </li>
                </ul>
            </nav>

            <h1 class="header__heading-box header__heading-box_font">
                У любви нет<br><span>породы</span>
            </h1>

            <div class="row related-lists">
                <div class="col-12 related-lists__container">
                    <h2 class="heading">
                        Подобрать питомца
                    </h2>

                    <form class="related-lists__flex-box" action="#" method="post">
                        <fieldset class="related-lists__flex-element">
                            <label class="related-lists_font" for="type-animal">
                                Вид
                            </label>

                            <select class="related-lists__select" id="type-animal" name="type-animal" required>
                                <option value="" disabled>
                                    Выберите
                                </option>

                                <option value="dog">
                                    Собака
                                </option>

                                <option value="cat">
                                    Кошка
                                </option>
                            </select>

                            <svg class="related-lists__arrow" width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="related-lists__arrow_size" d="M1 1L4.5 7L8 1" stroke="black" stroke-width="1.3"/>
                            </svg>
                        </fieldset>

                        <fieldset class="related-lists__flex-element">
                            <label class="related-lists_font" for="gender">
                                Пол
                            </label>

                            <select class="related-lists__select" id="gender" name="gender" required>
                                <option value="" disabled>
                                    Выберите
                                </option>

                                <option value="man">
                                    Мальчик
                                </option>

                                <option value="woman">
                                    Девочка
                                </option>
                            </select>

                            <svg class="related-lists__arrow" width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="related-lists__arrow_size" d="M1 1L4.5 7L8 1" stroke="black" stroke-width="1.3"/>
                            </svg>
                        </fieldset>

                        <fieldset class="related-lists__flex-element">
                            <label class="related-lists_font" for="age">
                                Возраст
                            </label>

                            <select class="related-lists__select" id="age" name="age" required>
                                <option value="" disabled>
                                    Выберите
                                </option>

                                <option value="2">
                                    2 года
                                </option>

                                <option value="5">
                                    5 лет
                                </option>

                                <option value="10">
                                    10 лет
                                </option>
                            </select>

                            <svg class="related-lists__arrow" width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="related-lists__arrow_size" d="M1 1L4.5 7L8 1" stroke="black" stroke-width="1.3"/>
                            </svg>
                        </fieldset>

                        <input class="related-lists__button related-lists__button_appearance" type="submit" value="Найти">
                    </form>

                    <img class="related-lists_image" src="../images/landing_page/header/pets.png" alt="image">
                </div>
            </div>
        </div>
    </div>

    <main class="main">
        <svg class="main__thread" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1038.9 964.4">
            <defs>
                <style>
                    .cls-1{fill:none;stroke:#fe5b00;stroke-opacity:0.45;stroke-width:3px;}
                </style>
            </defs>
            <g id="Слой_2" data-name="Слой 2">
                <g id="Слой_1-2" data-name="Слой 1">
                    <path class="cls-1" d="M1.5,0c0,227.07,374.13,8.45,482.67,156.51C646.57,378.05,1038.39,92,834.39,368s297.79,144.76-25.5,379.5C693.89,831,1038.37,963,1038.37,963"/>
                </g>
            </g>
        </svg>

        <section class="container about-us" data-aos="fade-right">
            <div class="row about-us__flex-box">
                <h2 class="heading" id="about-us">
                    О приюте
                </h2>

                <p class="col-8 col-md-12 about-us_font about-us__text-container">
                    Наша команда была собрана, чтобы помогать животным, которые столкнулись с жизненными трудностями. С кем-то  не справились, на кого-то не хватило времени, а на кого-то терпения.<br><br>У нас работают высококвалифицированные кинологи и фелинологи, а  также очень внимательные и чуткие волонтеры. Они смогут помочь скорректировать поведение животного, провести осмотр в ветклинике, и питомец будет готов отправиться в новый дом!
                </p>

                <div class="col-4 about-us__image">
                    <img class="about-us__image_size" src="../images/landing_page/about-us/dog.png" alt="dog">
                </div>

                <ul class="col-6 col-md-12 about-us__ul">
                    <li class="about-us__li">
                        <span>17</span><br>лет работы
                    </li>

                    <li class="about-us__li">
                        <span>60+</span><br>опытных сотрудников и волонтёров
                    </li>

                    <li class="about-us__li">
                        <span>834</span><br>питомца нашли свой дом
                    </li>
                </ul>
            </div>
        </section>

        <svg class="main__thread" id="Слой_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 240 668" style="enable-background:new 0 0 240 668;"
             xml:space="preserve">
            <style type="text/css">
                .st0{fill:none;stroke:#FE5B00;stroke-width:3;stroke-opacity:0.45;}
            </style>
            <g>
                <path shape-rendering="crispEdges" class="st0" d="M0,600.9c193-138,287-233,210.5-439.9C169.2,70.8,90.5,228.1,0,50.9"/>
            </g>
        </svg>

        <div class="our-pets__bg-box">
            <svg class="our-pets__bg-box_bg" width="1324" height="730" viewBox="0 0 1024 733" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M651.194 700.219C785.318 767.719 942.268 674.716 998.635 611.686C1037.29 568.467 1020.27 364.896 1020.27 225.714C1020.27 127.515 962.284 199.999 878.883 103.561C795.481 7.12391 683.26 -7.37621 643.799 20.1155C404.892 186.553 88.3577 -161.72 3.47755e-06 103.561C3.47755e-06 103.561 -7.68562e-06 256.507 9.98939e-06 414.859C2.76644e-05 573.21 7.83376 656.87 137.35 717.769C266.865 778.668 517.069 632.719 651.194 700.219Z" fill="#FFECC6" fill-opacity="0.5"/>
            </svg>
        </div>

        <section class="our-pets" data-aos="fade-right">
            <div class="container our-pets__box">
                <h2 class="heading" id="our-pets">
                    Наши питомцы
                </h2>

                <div class="row our-pets__list-animals">
                    <div class="col-6 col-sm-12 our-pets__animal-block">
                        <img class="our-pets__image" src="../images/landing_page/our-pets/pet-1.png"
                             alt="cat">

                        <div class="our-pets__text-block">
                            <h3 class="our-pets_heading">
                                Молли
                            </h3>

                            <p class="our-pets_font">
                                Пол: девочка<br>Возраст: 6 месяцев<br>Вес: 1,5 кг
                            </p>

                            <a href="#">
                                <svg class="our-pets__arrow" width="31" height="8" viewBox="0 0 31 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5L30 4.5V3.5L0 3.5L0 4.5Z" fill="black"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="col-6 col-sm-12 our-pets__animal-block">
                        <img class="our-pets__image" src="../images/landing_page/our-pets/pet-2.png" alt="cat">

                        <div class="our-pets__text-block">
                            <h3 class="our-pets_heading">
                                Колин
                            </h3>

                            <p class="our-pets_font">
                                Пол: мальчик<br>Возраст: 5 месяцев<br>Вес: 3 кг
                            </p>

                            <a href="#">
                                <svg class="our-pets__arrow" width="31" height="8" viewBox="0 0 31 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5L30 4.5V3.5L0 3.5L0 4.5Z" fill="black"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="col-6 our-pets__animal-block">
                        <img class="our-pets__image" src="../images/landing_page/our-pets/pet-3.png" alt="cat">

                        <div class="our-pets__text-block">
                            <h3 class="our-pets_heading">
                                Лия
                            </h3>

                            <p class="our-pets_font">
                                Пол: девочка<br>Возраст: 4 месяца<br>Вес: 6 кг
                            </p>

                            <a href="#">
                                <svg class="our-pets__arrow" width="31" height="8" viewBox="0 0 31 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5L30 4.5V3.5L0 3.5L0 4.5Z" fill="black"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="col-6 our-pets__animal-block">
                        <img class="our-pets__image" src="../images/landing_page/our-pets/pet-4.png" alt="cat">

                        <div class="our-pets__text-block">
                            <h3 class="our-pets_heading">
                                Буч
                            </h3>

                            <p class="our-pets_font">
                                Пол: мальчик<br>Возраст: 2 месяцев<br>Вес: 12 кг
                            </p>

                            <a href="#">
                                <svg class="our-pets__arrow" width="31" height="8" viewBox="0 0 31 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30.3536 4.35355C30.5488 4.15829 30.5488 3.84171 30.3536 3.64645L27.1716 0.464466C26.9763 0.269204 26.6597 0.269204 26.4645 0.464466C26.2692 0.659728 26.2692 0.976311 26.4645 1.17157L29.2929 4L26.4645 6.82843C26.2692 7.02369 26.2692 7.34027 26.4645 7.53553C26.6597 7.7308 26.9763 7.7308 27.1716 7.53553L30.3536 4.35355ZM0 4.5L30 4.5V3.5L0 3.5L0 4.5Z" fill="black"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="button">
                    <button class="button_appearance" type="button">
                        Все питомцы
                    </button>
                </div>
            </div>
        </section>

        <section class="container help" data-aos="fade-right">
            <h2 class="heading" id="help">
                Как нам помочь
            </h2>

            <div class="row help__container">
                <img class="col-6 col-md-12 help__image" src="../images/landing_page/help/cat.png" alt="cat">

                <div class="col-6 col-md-12 help__text-container">
                    <ul class="help__ul">
                        <li class="help__li">
                            Сделать небольшое пожертвование приюту
                        </li>

                        <li class="help__li">
                            Помочь волонтерам с выгулом и уходом за питомцами
                        </li>

                        <li class="help__li">
                            Привезти в приют различный инвентарь (лечебные корма, лекарства, поводки)
                        </li>
                    </ul>

                    <div class="button">
                        <button class="button_appearance" onclick="toggleLog()">
                            Перейти
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer footer_bg">
        <img class="main__thread" src="../images/landing_page/thread-3.svg" alt="thread">

        <div class="container">
            <div class="row footer__content-box">
                <div class="col-2 col-md-6 logo">
                    <img class="logo_image" src="../images/logo.svg" alt="logo">
                </div>

                <div class="footer__info-block">
                    <h4 class="footer__info-block_heading">
                        О приюте
                    </h4>

                    <ul class="footer__ul">
                        <li class="footer__li">
                            Наша история
                        </li>

                        <li class="footer__li">
                            Как пройти
                        </li>

                        <li class="footer__li">
                            Время работы
                        </li>
                    </ul>
                </div>

                <div class="footer__info-block">
                    <h4 class="footer__info-block_heading">
                        Помощь
                    </h4>

                    <ul class="footer__ul">
                        <li class="footer__li">
                            Стать волонтером
                        </li>

                        <li class="footer__li">
                            Пожертвования
                        </li>

                        <li class="footer__li">
                            Купить корм
                        </li>
                    </ul>
                </div>

                <div class="footer__info-block">
                    <h4 class="footer__info-block_heading">
                        Контакты
                    </h4>

                    <ul class="footer__ul">
                        <li class="footer__li">
                            г. Талдом, ул. Мира, д. 34
                        </li>

                        <li class="footer__li">
                            klubok_shelter@gmail.com
                        </li>

                        <li class="footer__li">
                            +7 (999) 777 - 88 - 99
                        </li>
                    </ul>
                </div>

                <div class="footer__links-block">
                    <a class="footer__svg" href="#">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="22" height="22" fill="url(#pattern0)"/>
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_1_404" transform="scale(0.00195312)"/>
                                </pattern>
                                <image id="image0_1_404"
                                       width="512"
                                       height="512"
                                       xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAAAXNSR0IArs4c6QAAIABJREFUeAHtnQe0LEXVth9Qco76gSioRANBEBQT6mdEDBhABSQpZsSsgASzIiign4kkigkFc8CEAQEVMCBBkiBBgsQLkv5/vXKOnDt3zpyenu7eVV1vrXXXPTPT3bXrqV17V3fv2gUuJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmACJmAC4QQWAVYHHgDcH1gZWCZcKgtgAiZgAiZgAibQGIH1gdcAXwJOAS4D7gL+35B/1wC/AY4G3gE8Gli4MUl8IRMwARMwARMwgdYILAlsCxwLXDHEyQ9z/KO+uxr4IrAdsGhrUvvCJmACJmACJmACYxNYCngx8FXglgac/mwTAk0o9gVWHVtCn2ACJmACJmACJtAIAb2z3x44HpjXotMfNhm4DTgUWKGRlvgiJmACJmACJmACIwksC7wMOAG4tWOnP2wi8E9gF2ChkVL7RxMwARMwARMwgbEJLA/sCHwb0J33MEcc/d2vgTXGbplPMAETMAETMAETmI/AisDOwPeA2xN1+oOTDj0NeNJ8rfAHEzABEzABEzCBOQloLf5uwA+AOzJx+oOTAMn9xjlb6gNMwARMwARMoHACiqZ/FfDjjJ3+4CRAnw8ovF/dfBMwARMwARNYgIAy7ykxz0+B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HvF3TRDIOWnQ9Bjp4n8tB3YxARMolMDqgJLtdGFsVMdNwEsLZe1md0sg56RBXY3HL3bbJa7NBEwgNQL7dTQBOMuP/FPr+t7Lk3PSoC4mAXv0XgPcQBMwgZEElGP/4pYnAZ8EFh8phX80gXYI5J40qM2JwHrtIPdVTcAEciKwFnBhC5OAfwHb5gTCsvaSQO5Jg9qYBJzfy552o0zABGoR0DKqcxucBPwGWLOWJD7JBNohkHPSoKYnAR9rB7GvagImkCsBZQhURr5JjM1lwI7AQrlCsNy9JuCkQfeMb2UgdDEBEzCB+QgsOuXAzxhzIqCkPvt6E5/5WPpDmgRKTxqk5X96LeJiAiZgArMSeDLwHUAbhgx7KnA1oKVEuuNfedar+AcTSI9AyUmD3pxed1giEzCBVAksDKw0tYzvscA2wKZ+zJ9qd1muMQiUljToRmC5Mfj4UBMwARMwARPoLYGSkgY5+K+3auyGmYAJmIAJ1CFQQtIgLfVdpg4cn2MCJmACJmACfSbQ56RBdwJ6fediAiZgAiZgAiYwhEBfkwYdOKSt/soETMAETMAETGCAQJ+SBp0G3Hegff5oAiZgAiZgAiYwC4E+JA3Sbp/rzNI+f20CJmACJmACJjALgdyTBr1qlnb5axMwARMwARMwgTkI5Jg06G5g7zna5Z9NwARMwARMwAQqEMgladBtwHYV2uNDTMAETMAETMAEKhJIPWmQ0nN7uV/FzvRhJmACJmACJjAOAQXV/XaW/TGG7ZnR1XfnAA8epyE+1gRMwARMwARMYDwCyhfwLuD2RCYCPwWUyMjFBEzABEzABEygAwIbAmcFTgKuA97odf4d9LSrMAETMAETMIEBAosCrwH+1uFE4A7gE8CKA7L4owmYgAmYgAmYQMcEtG32C4FTW5wI/AM4AFij47a5OhMwARMwARMwgQoEHg8cAvy5gcnAZcCxwAv8qL8CeR9iAiZgAiZgAokQ+B/g5cBRwG+A84EbhkwMlLb3YuB3wBeB3YG1E2mDxTABEzABEzABE2iIgGIHVgceCCzZ0DV9GRMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwARMwgVwI/H/7N0iR4BGl6QAAAABJRU5ErkJggg=="/>
                            </defs>
                        </svg>
                    </a>

                    <a class="footer__svg" href="https://vk.me/enottip">
                        <img src="../images/landing_page/footer/vk.svg" alt="vk">
                    </a>

                    <a class="footer__svg" href="#">
                        <img src="../images/landing_page/footer/whatsapp.svg" alt="whatsapp">
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
    <script src="../scripts/preloader.js"></script>
    <script src="../scripts/landing_page/burger.js"></script>
    <script src="../scripts/landing_page/log.js"></script>
</body>
</html>