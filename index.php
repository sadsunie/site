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

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-4 d-flex">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/dishes/dish_1.png" alt="">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h4 class="card-title">Первые блюда</h4>
                                    <p class="card-text">Супы на курином бульоне, домашняя лапша, вкуснейшие борщи и
                                        солянки - всё это не оставит Вас равнодушным.</p>
                                </div>
                                <div><a class="btn btn-primary" href="#">Подробнее</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/dishes/dish_2.png" alt="">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h4 class="card-title">Вторые блюда</h4>
                                    <p class="card-text">Мастера мясного цеха порадуют Вас широким ассортиментом вторых
                                        блюд от народных "гуляша" и "поджарки" до всевозможных шедевров из мяса и рыбы.
                                    </p>
                                </div>
                                <div><a class="btn btn-primary" href="#">Подробнее</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/dishes/dish_3.jpg" alt="">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h4 class="card-title">Гарниры</h4>
                                    <p class="card-text">В "Фабрике вкуса" представлен разнообразный ассортимент простых
                                        и сложных гарниров: гречка с квашенной капустой, плов овощной, грибочки тушеные,
                                        а картофельное пюре - сама нежность.</p>
                                </div>
                                <div class="mt-3"><a class="btn btn-primary" href="#">Подробнее</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/dishes/dish_4.jpg" alt="">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h4 class="card-title">Салаты</h4>
                                    <p class="card-text">Классические: винегрет, "сельдь под шубой", " оливье", а также
                                        десятки других салатов из овощей, мяса и морепродуктов изготавливаются только из
                                        натуральных продуктов самого высокого качества.</p>
                                </div>
                                <div class="mt-3"><a class="btn btn-primary" href="#">Подробнее</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/dishes/dish_5.jpg" alt="">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h4 class="card-title">Блюда из творога</h4>
                                    <p class="card-text">Только у нас Вы сможете насладиться чудесной запеканкой,
                                        оригинальными сырниками, кружевными блинчиками и прочими сладкими деликатесами.
                                    </p>
                                </div>
                                <div><a class="btn btn-primary" href="#">Подробнее</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="img/dishes/dish_6.jpg" alt="">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h4 class="card-title">Вегетарианские блюда</h4>
                                    <p class="card-text">Любители вегетарианских блюд найдут у нас обширный ассортимент
                                        блюд из моркови, цветной капусты, картофеля, броколи и многих других полезных
                                        овощей и фруктов.</p>
                                </div>
                                <div><a class="btn btn-primary" href="#">Подробнее</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <h2 class="text-center mt-4">Наши клиенты</h2>
        <hr class="my-4">
        <table class="mt-5" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody>
                <tr>
                    <td><img src="img/clients/ashan.png" width="190" vspace="5" hspace="5" height="80" border="0">
                    </td>
                    <td>
                        <br>
                    </td>
                    <td><img src="img/clients/volgofarm.png" width="190" vspace="5" hspace="5" height="89"
                            border="0"></td>
                    <td><img src="img/clients/leroymerlin.png" width="147" vspace="5" hspace="5" height="120"
                            border="0"></td>
                    <td><img src="img/clients/metro.png" width="190" vspace="5" hspace="5" height="77" border="0">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="jumbotron text-center">
            <h2>О компании</h2>
            <hr class="my-4">
            <p class="text-left">
                Ежедневно услугами нашей компании пользуются сотни жителей г.Волгограда, за что мы им очень благодарны.
                В своей работе мы исходим из того, что горячее, сбалансированное питание – основа здоровья любого
                человека. Именно поэтому мы используем только натуральные продукты, которые мы закупаем у проверенных
                годами поставщиков. Наша гордость – победа в конкурсе «Городской фестиваль здоровья» в номинации «Самое
                здоровое блюдо»
                <br>
                Основа предприятия – это наш коллектив: грамотный и требовательный заведующий производством,
                высококлассные повара, кассиры, посудомойщицы, грузчики, водители-экспедиторы, весь технический и
                административный персонал - все те кто своими руками ежедневно создает для Вас благо – полноценный обед.
            </p>
        </div>
    </div>

    <footer class="text-muted color-grey">
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