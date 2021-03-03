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
                    <a class="nav-link text-uppercase" href="orders.php">журнал заказов</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="food.php">продукты</a>
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
                <div class="col-sm-12">

                    <div class="container">
                    <div class="form-popup" id="myForm">
                        <form action="popupsend.php" method="post" class="form-container">

                            <div class="container">
                                <div class="row">
                                <div class="col-xl-5 d-flex justify-content-between">
                                    <label for="Supplier"><b>Поставщик</b></label>
                                    <input type="text" pattern="[а-яА-ЯёЁ]{2,64}" id="Supplier" name="Supplier" required>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-5 d-flex justify-content-between">
                                    <label for="Name"><b>Название</b></label>
                                <input type="text" pattern="^[А-Яа-яЁё\s]+$" name="Name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-5 d-flex justify-content-between">
                                    <label for="Type"><b>Вид</b></label>
                                <input type="text" pattern="^[А-Яа-яЁё\s]+$" name="Type" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-5 d-flex justify-content-between">
                                    <label for="Quantity"><b>Количество</b></label>
                                <input type="number" min="1" max="255" name="Quantity"
                                    required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-5 d-flex justify-content-between">
                                    <label for="Date"><b>Дата</b></label>
                                <input type="text" id="date" name="Date" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xl-5 d-flex justify-content-between">
                                <button type="reset" class="btn-dark btn cancel" onclick="closeForm()">Закрыть</button>
                                <button class="btn btn-dark open-button" onclick="openForm()">Заказать</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted color-grey mt-5">
        <div class="container">
            <p class="float-right">
                <a class="text-decoration-none color-black" href="#">Наверх</a>
            </p>
            <p class="color-black">Разработка сайта - Дуб Роман</p>
        </div>
    </footer>


</body>

</html>