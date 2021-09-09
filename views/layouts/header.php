<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BRAHOLKA</title>

    <link href="/template/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/template/css/fontello.css">

    <link rel="stylesheet" href="/template/css/style.css" />

</head>

<body>

    <div class="main">

        <header>
            <nav class="header-nav">

                <ul class="nav justify-content-start header-menu-top ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/about/">Оплата</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about/">Доставка</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link icon-phone" href="#">(+38) 097-741-63-30</a>
                    </li>

                </ul>

            </nav>


            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" title="home" href="/"><img src="/template/images/home/Baraholka.svg" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">


                        <form class="mx-auto ">
                            <input class="form-control rounded-pill width-search " type="search" placeholder="Поиск" aria-label="Поиск">


                        </form>


                        <ul class="navbar-nav ms-auto me-5 mb-lg-0">


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="icon-user-o"></i>
                                </a>
                                <?php if (User::isGuest()) : ?>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/user/login/">Вход</a></li>
                                        <li><a class="dropdown-item" href="/user/register">Регистрация<a>
                                        <li>

                                    </ul>



                                <?php else : ?>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/cabinet/">Аккаунт</a></li>

                                        <li><a class="dropdown-item" href="/user/logout/">Выход</a></li>
                                    </ul>

                                <?php endif; ?>

                            </li>


                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/cart/">
                                    <i class="icon-basket"><span id="cart-count"> </span>
                                        <?php //echo Cart::countItems(); ?></i>
                                </a>
                            </li>

                        </ul>



                    </div>
                </div>
            </nav>

        </header>