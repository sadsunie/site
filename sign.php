<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Столовая</title>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand text-uppercase" href="index.php">Главная</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="dishes.php">блюда</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="menu.php">меню</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#">журнал заказов</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#">продукты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="account.php">аккаунт</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main">

        <section class="jumbotron text-center logo"></section>

        <div class="formsb">
            <div class="container col-xl-6">

                <div class="row d-flex justify-content-between">

                        <form action="validation/auth.php" method="post" class="form-signin">
                            <h1 class="h3 mb-3 font-weight-normal">Войди</h1>

                            <input type="email" name="email" id="email" class="form-control mb-1" placeholder="Почта"
                                required autofocus>

                            <input type="password" name="pass" id="pass" class="form-control mb-1" placeholder="Пароль"
                                required>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me"> Запомнить
                                </label>
                            </div>
                            <button class="btn btn-success" type="submit">Продолжить</button>
                        </form>


                        <form action="validation/check.php" method="post" class="form-signin">
                            <h1 class="h3 mb-3 font-weight-normal">Зарегистрироваться</h1>

                            <input type="email" name="email" id="email" class="form-control mb-1" placeholder="Почта"
                                required>
                            <input type="text" name="name" id="name" class="form-control mb-1" placeholder="Имя"
                                required>
                            <input type="password" name="pass" id="pass" class="form-control mb-1" placeholder="Пароль"
                                required>

                            <button class="btn btn-success" type="submit">Продолжить</button>
                        </form>
                </div>
            </div>

        </div>

    </main>

    <footer class="text-muted color-grey fixed-bottom">
        <div class="container">
            <p class="float-right">
                <a class="text-decoration-none color-black" href="#">Наверх</a>
            </p>
            <p class="color-black">Разработка сайта - Дуб Роман</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>