<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Меню</title>
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
            <h2 class="text-center">Меню</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Наименование</th>
                        <th>Цена</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Салат «Оливье» (ветчина, картофель, огурец соленый, огурец свежий, яйцо, зеленый горошек,
                            морковь, лук репчатый, майонез)</td>
                        <td>32-00</td>
                    </tr>
                    <tr>
                        <td>Салат «Тещин язык» (язык свиной, помидор, картофель, лук репчатый, яйцо, майонез)</td>
                        <td>30-00</td>
                    </tr>
                    <tr>
                        <td>Салат «Фреско» (ветчина, капуста пекинская, помидор, масло)</td>
                        <td>28-00</td>
                    </tr>
                    <tr>
                        <td>Борщ «Флотский» </td>
                        <td>28-00</td>
                    </tr>
                    <tr>
                        <td>Суп лапша с фрикадельками</td>
                        <td>28-00</td>
                    </tr>
                    <tr>
                        <td>Окрошка</td>
                        <td>28-00</td>
                    </tr>
                    <tr>
                        <td>Филе куриное «Помидорка» (филе куриное, помидоры, сыр, майонез) </td>
                        <td>52-00</td>
                    </tr>
                    <tr>
                        <td>Рулетик «Коронный» (филе куриное, брынза шампиньоны, бекон)</td>
                        <td>64-00</td>
                    </tr>
                    <tr>
                        <td>Свинина запеченная с грибами</td>
                        <td>52-00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container">
            <h2 class="text-center mt-4">Наши клиенты</h2>
            <hr class="my-4">
            <table class="mt-5" width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td><img src="img/clients/ashan.png" width="190" vspace="5" hspace="5" height="80"
                                border="0"></td>
                        <td>
                            <br>
                        </td>
                        <td><img src="img/clients/volgofarm.png" width="190" vspace="5" hspace="5" height="89"
                                border="0"></td>
                        <td><img src="img/clients/leroymerlin.png" width="147" vspace="5" hspace="5" height="120"
                                border="0"></td>
                        <td><img src="img/clients/metro.png" width="190" vspace="5" hspace="5" height="77"
                                border="0"></td>
                    </tr>
                </tbody>
            </table>
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