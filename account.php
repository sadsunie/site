<?php
session_start();
?>

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

<?php
if ($_COOKIE['user'] == ''):
header('Location: /site/sign.php');
?>

<?php else: ?>

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
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="calculator.php">калькулятор</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main">

        <section class="jumbotron text-center logo"></section>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Ваш Аккаунт</h2>
                    <img src="img/profile.png" width="200" height="200" alt="acimg">
                    <h3> Имя: <?=$_COOKIE['user']?></h3>
                    <h3> Почта: <?=$_COOKIE['email']?></h3>
                    <h3><a href="validation/exit.php">Выйти из аккаунта.</a></h3>
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted color-grey">
        <div class="container">
            <p class="float-right">
                <a class="text-decoration-none color-black" href="#">Наверх</a>
            </p>
            <p class="color-black">Разработка сайта - Дуб Роман</p>
        </div>
    </footer>

<?php endif; ?>	

</body>
</html>