<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Лиза Дадонова">
    <meta name="keywords" content="animals, pets">

    <link rel="stylesheet" href="../styles/bootstrap.css">
    <link rel="stylesheet" href="../styles/base-styles.css">
    <link rel="stylesheet" href="../styles/preloader.css">
    <link rel="stylesheet" href="../styles/fonts.css">

    <link rel="stylesheet" href="../styles/landing_page/header.css">
    <link rel="stylesheet" href="../styles/landing_page/footer.css">
    <link rel="stylesheet" href="../styles/accounts/nav-account.css">
    <link rel="stylesheet" href="../styles/accounts/my-profile.css">
    <link rel="stylesheet" href="../styles/accounts/filters.css">
    <link rel="stylesheet" href="../styles/accounts/recent-actions.css">

    <link rel="favicon icon" href="../images/logo.svg">
    <title>
        Админ
    </title>

    <script src="../scripts/jquery-3.7.1.min.js"></script>
</head>
<body style="background-color: #fff8eb">
    <div class="header header_bg" data-accounts-bg>
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
                           href="index.php">
                            Главная страница
                        </a>
                    </li>
                </ul>
            </nav>

            <header class="account-header" data-admin>
                <div class="account-header__avatar" data-admin>
                    <img class="account-header__photo account-header__photo_image" src="../images/accounts/avatar.png" alt="avatar">

                    <h1 class="account-header__avatar_heading">
                        Администратор
                    </h1>

                    <ul class="account-header__ul">
                        <li class="account-header__li account-header__li_font">
                            Заявки на выгул
                        </li>

                        <li class="account-header__li account-header__li_font">
                            Пользователи
                        </li>

                        <li class="account-header__li account-header__li_font account-header__li_active">
                            Пожертвования
                        </li>

                        <li class="account-header__li">
                            <a class="account-header__li_font" href="index.php">
                                Выйти
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="account-header__gap"></div>

                <div class="account-header__container" data-admin>
                    <h2 class="account-header__heading" data-admin-heading>
                        Пожертвования
                    </h2>

                    <button class="account-header__button-filter">
                        Фильтры
                    </button>

                    <div class="" style="display: none">

                    </div>

                    <div class="recent-actions" data-admin>
                        <div class="recent-actions__row">
                            <h4 class="recent-actions__cell recent-actions__cell_font">
                                Дата
                            </h4>

                            <h4 class="recent-actions__cell recent-actions__cell_font">
                                ФИО
                            </h4>

                            <h4 class="recent-actions__cell recent-actions__cell_font">
                                Сумма
                            </h4>

                            <h4 class="recent-actions__cell recent-actions__cell_font">
                                Цель<br>пожертвования
                            </h4>

                            <h4 class="recent-actions__cell recent-actions__cell_font">
                                Статус заявки
                            </h4>
                        </div>

                        <div class="recent-actions__row">
                            <p class="recent-actions__cell recent-actions__cell_font">
                                30.10.2023
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Лыкова О.
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                3400₽
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Корм (Ева)
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font" data-status>
                                Ожидает
                            </p>

                            <select class="recent-actions__cell recent-actions__cell_font recent-actions_inactive" id="" name="status"
                                    data-status-select>
                                <option value="waiting">
                                    Ожидает
                                </option>

                                <option value="received">
                                    Получен
                                </option>

                                <option value="completed">
                                    Выполнен
                                </option>

                                <option value="rejected">
                                    Отклонён
                                </option>
                            </select>
                        </div>

                        <div class="recent-actions__row">
                            <p class="recent-actions__cell recent-actions__cell_font">
                                30.10.2023
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Лыкова О.
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                3400₽
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Корм (Ева)
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font" data-status>
                                Ожидает
                            </p>

                            <select class="recent-actions__cell recent-actions__cell_font recent-actions_inactive" id="" name="status"
                                    data-status-select>
                                <option value="waiting">
                                    Ожидает
                                </option>

                                <option value="received">
                                    Получен
                                </option>

                                <option value="completed">
                                    Выполнен
                                </option>

                                <option value="rejected">
                                    Отклонён
                                </option>
                            </select>
                        </div>

                        <div class="recent-actions__row">
                            <p class="recent-actions__cell recent-actions__cell_font">
                                30.10.2023
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Лыкова О.
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                3400₽
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Корм (Ева)
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font" data-status>
                                Ожидает
                            </p>

                            <select class="recent-actions__cell recent-actions__cell_font recent-actions_inactive" id="" name="status"
                                    data-status-select>
                                <option value="waiting">
                                    Ожидает
                                </option>

                                <option value="received">
                                    Получен
                                </option>

                                <option value="completed">
                                    Выполнен
                                </option>

                                <option value="rejected">
                                    Отклонён
                                </option>
                            </select>
                        </div>

                        <div class="recent-actions__row">
                            <p class="recent-actions__cell recent-actions__cell_font">
                                30.10.2023
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Лыкова О.
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                3400₽
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Корм (Ева)
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font" data-status>
                                Выполнен
                            </p>

                            <select class="recent-actions__cell recent-actions__cell_font recent-actions_inactive" id="" name="status"
                                    data-status-select>
                                <option value="waiting">
                                    Ожидает
                                </option>

                                <option value="received">
                                    Получен
                                </option>

                                <option value="completed">
                                    Выполнен
                                </option>

                                <option value="rejected">
                                    Отклонён
                                </option>
                            </select>
                        </div>

                        <div class="recent-actions__row">
                            <p class="recent-actions__cell recent-actions__cell_font">
                                30.10.2023
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Лыкова О.
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                3400₽
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Корм (Ева)
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font" data-status>
                                Ожидает
                            </p>

                            <select class="recent-actions__cell recent-actions__cell_font recent-actions_inactive" id="" name="status"
                                    data-status-select>
                                <option value="waiting">
                                    Ожидает
                                </option>

                                <option value="received">
                                    Получен
                                </option>

                                <option value="completed">
                                    Выполнен
                                </option>

                                <option value="rejected">
                                    Отклонён
                                </option>
                            </select>
                        </div>

                        <div class="recent-actions__row">
                            <p class="recent-actions__cell recent-actions__cell_font">
                                30.10.2023
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Лыкова О.
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                3400₽
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Корм (Ева)
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font" data-status>
                                Получен
                            </p>

                            <select class="recent-actions__cell recent-actions__cell_font recent-actions_inactive" id="" name="status"
                                    data-status-select>
                                <option value="waiting">
                                    Ожидает
                                </option>

                                <option value="received">
                                    Получен
                                </option>

                                <option value="completed">
                                    Выполнен
                                </option>

                                <option value="rejected">
                                    Отклонён
                                </option>
                            </select>
                        </div>

                        <div class="recent-actions__row">
                            <p class="recent-actions__cell recent-actions__cell_font">
                                30.10.2023
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Лыкова О.
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                3400₽
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Корм (Ева)
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font" data-status>
                                Отклонён
                            </p>

                            <select class="recent-actions__cell recent-actions__cell_font recent-actions_inactive" id="" name="status"
                                    data-status-select>
                                <option value="waiting">
                                    Ожидает
                                </option>

                                <option value="received">
                                    Получен
                                </option>

                                <option value="completed">
                                    Выполнен
                                </option>

                                <option value="rejected">
                                    Отклонён
                                </option>
                            </select>
                        </div>

                        <div class="recent-actions__row">
                            <p class="recent-actions__cell recent-actions__cell_font">
                                30.10.2023
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Лыкова О.
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                3400₽
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Корм (Ева)
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font" data-status>
                                Ожидает
                            </p>

                            <select class="recent-actions__cell recent-actions__cell_font recent-actions_inactive" id="" name="status"
                                    data-status-select>
                                <option value="waiting">
                                    Ожидает
                                </option>

                                <option value="received">
                                    Получен
                                </option>

                                <option value="completed">
                                    Выполнен
                                </option>

                                <option value="rejected">
                                    Отклонён
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="recent-actions" data-status style="display: none">
                        <div class="recent-actions__row">
                            <h4 class="recent-actions__cell recent-actions__cell_font">
                                ФИО
                            </h4>

                            <h4 class="recent-actions__cell recent-actions__cell_font">
                                Почта
                            </h4>

                            <h4 class="recent-actions__cell recent-actions__cell_font">
                                Сумма
                            </h4>

                            <h4 class="recent-actions__cell recent-actions__cell_font">
                                Дата
                            </h4>

                            <h4 class="recent-actions__cell recent-actions__cell_font">
                                Статус заявки
                            </h4>
                        </div>

                        <div class="recent-actions__row">
                            <p class="recent-actions__cell recent-actions__cell_font">
                                Лыкова О.
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                rrr@mail.ru
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                3400₽
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                30.10.2023
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Ожидает
                            </p>

                            <select class="recent-actions__cell recent-actions__cell_font" id="" name="status">
                                <option value="waiting">
                                    Ожидает
                                </option>

                                <option value="received">
                                    Получен
                                </option>

                                <option value="completed">
                                    Выполнен
                                </option>

                                <option value="rejected">
                                    Отклонён
                                </option>
                            </select>
                        </div>

                        <div class="recent-actions__row">
                            <p class="recent-actions__cell recent-actions__cell_font">
                                Лыкова О.
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                rrr@mail.ru
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                3400₽
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                30.10.2023
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Ожидает
                            </p>

                            <select class="recent-actions__cell recent-actions__cell_font" id="" name="status">
                                <option value="waiting">
                                    Ожидает
                                </option>

                                <option value="received">
                                    Получен
                                </option>

                                <option value="completed">
                                    Выполнен
                                </option>

                                <option value="rejected">
                                    Отклонён
                                </option>
                            </select>
                        </div>

                        <div class="recent-actions__row">
                            <p class="recent-actions__cell recent-actions__cell_font">
                                Лыкова О.
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                rrr@mail.ru
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                3400₽
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                30.10.2023
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Ожидает
                            </p>

                            <select class="recent-actions__cell recent-actions__cell_font" id="" name="status">
                                <option value="waiting">
                                    Ожидает
                                </option>

                                <option value="received">
                                    Получен
                                </option>

                                <option value="completed">
                                    Выполнен
                                </option>

                                <option value="rejected">
                                    Отклонён
                                </option>
                            </select>
                        </div>

                        <div class="recent-actions__row">
                            <p class="recent-actions__cell recent-actions__cell_font">
                                Лыкова О.
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                rrr@mail.ru
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                3400₽
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                30.10.2023
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Ожидает
                            </p>

                            <select class="recent-actions__cell recent-actions__cell_font" id="" name="status">
                                <option value="waiting">
                                    Ожидает
                                </option>

                                <option value="received">
                                    Получен
                                </option>

                                <option value="completed">
                                    Выполнен
                                </option>

                                <option value="rejected">
                                    Отклонён
                                </option>
                            </select>
                        </div>

                        <div class="recent-actions__row">
                            <p class="recent-actions__cell recent-actions__cell_font">
                                Лыкова О.
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                rrr@mail.ru
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                3400₽
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                30.10.2023
                            </p>

                            <p class="recent-actions__cell recent-actions__cell_font">
                                Ожидает
                            </p>

                            <select class="recent-actions__cell recent-actions__cell_font" id="" name="status">
                                <option value="waiting">
                                    Ожидает
                                </option>

                                <option value="received">
                                    Получен
                                </option>

                                <option value="completed">
                                    Выполнен
                                </option>

                                <option value="rejected">
                                    Отклонён
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </header>

            <div class="admin-buttons">
                <button class="admin-buttons_appearance">
                    Изменить статус
                </button>

                <button class="admin-buttons_appearance">
                    Сформировать отчёт
                </button>
            </div>
        </div>
    </div>

    <script src="../scripts/preloader.js"></script>
    <script src="../scripts/landing_page/burger.js"></script>
    <script src="../scripts/admin/change-status.js"></script>
    <script src="../scripts/admin/show-filters.js"></script>
    <script src="../scripts/personal_account/color-status.js"></script>
</body>
</html>