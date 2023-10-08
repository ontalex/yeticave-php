<nav class="nav">
        <ul class="nav__list container">
                <li class="nav__item">
                        <a href="all-lots.html">Доски и лыжи</a>
                </li>
                <li class="nav__item">
                        <a href="all-lots.html">Крепления</a>
                </li>
                <li class="nav__item">
                        <a href="all-lots.html">Ботинки</a>
                </li>
                <li class="nav__item">
                        <a href="all-lots.html">Одежда</a>
                </li>
                <li class="nav__item">
                        <a href="all-lots.html">Инструменты</a>
                </li>
                <li class="nav__item">
                        <a href="all-lots.html">Разное</a>
                </li>
        </ul>
</nav>
<section class="lot-item container">
        <h2>
                <?= $lot["title"] ?>
        </h2>
        <div class="lot-item__content">
                <div class="lot-item__left">
                        <div class="lot-item__image">
                                <img src="../img/<?= $lot["img_url"] ?>" width="730" height="548" alt="Сноуборд">
                        </div>
                        <p class="lot-item__category">Категория: <span>
                                        <?= $lot["cat_title"] ?>
                                </span></p>
                        <p class="lot-item__description">
                                <?= $lot["description"] ?>
                        </p>
                </div>
                <div class="lot-item__right">
                        <div class="lot-item__state">
                                <?php $current_delta = delta_date($lot["date_end"]); ?>
                                <div
                                        class="lot__timer timer timer<?php if ($current_delta[0] == 0)
                                                echo "--finishing" ?>">
                                        <?= $current_delta[0] . ":" . $current_delta[1] ?>
                                </div>
                                <div class="lot-item__cost-state">
                                        <div class="lot-item__rate">
                                                <span class="lot-item__amount">Текущая цена</span>
                                                <span class="lot-item__cost">
                                                        <?= format_price($lot["price"]) ?>
                                                </span>
                                        </div>
                                        <div class="lot-item__min-cost">
                                                Мин. ставка <span>
                                                        <?= format_price($lot["price"] + $lot["price_step"]) ?> р
                                                </span>
                                        </div>
                                </div>
                                <form class="lot-item__form" action="https://echo.htmlacademy.ru" method="post"
                                        autocomplete="off">
                                        <p class="lot-item__form-item form__item form__item--invalid">
                                                <label for="cost">Ваша ставка</label>
                                                <input id="cost" type="text" name="cost"
                                                        placeholder="<?= format_price($lot["price"] + $lot["price_step"]) ?>">
                                                <span class="form__error">Введите наименование лота</span>
                                        </p>
                                        <button type="submit" class="button">Сделать ставку</button>
                                </form>
                        </div>
                        <div class="history">
                                <h3>История ставок (<span>10</span>)</h3>
                                <table class="history__list">
                                        <tr class="history__item">
                                                <td class="history__name">Иван</td>
                                                <td class="history__price">10 999 р</td>
                                                <td class="history__time">5 минут назад</td>
                                        </tr>
                                        <tr class="history__item">
                                                <td class="history__name">Константин</td>
                                                <td class="history__price">10 999 р</td>
                                                <td class="history__time">20 минут назад</td>
                                        </tr>
                                        <tr class="history__item">
                                                <td class="history__name">Евгений</td>
                                                <td class="history__price">10 999 р</td>
                                                <td class="history__time">Час назад</td>
                                        </tr>
                                        <tr class="history__item">
                                                <td class="history__name">Игорь</td>
                                                <td class="history__price">10 999 р</td>
                                                <td class="history__time">19.03.17 в 08:21</td>
                                        </tr>
                                        <tr class="history__item">
                                                <td class="history__name">Енакентий</td>
                                                <td class="history__price">10 999 р</td>
                                                <td class="history__time">19.03.17 в 13:20</td>
                                        </tr>
                                        <tr class="history__item">
                                                <td class="history__name">Семён</td>
                                                <td class="history__price">10 999 р</td>
                                                <td class="history__time">19.03.17 в 12:20</td>
                                        </tr>
                                        <tr class="history__item">
                                                <td class="history__name">Илья</td>
                                                <td class="history__price">10 999 р</td>
                                                <td class="history__time">19.03.17 в 10:20</td>
                                        </tr>
                                        <tr class="history__item">
                                                <td class="history__name">Енакентий</td>
                                                <td class="history__price">10 999 р</td>
                                                <td class="history__time">19.03.17 в 13:20</td>
                                        </tr>
                                        <tr class="history__item">
                                                <td class="history__name">Семён</td>
                                                <td class="history__price">10 999 р</td>
                                                <td class="history__time">19.03.17 в 12:20</td>
                                        </tr>
                                        <tr class="history__item">
                                                <td class="history__name">Илья</td>
                                                <td class="history__price">10 999 р</td>
                                                <td class="history__time">19.03.17 в 10:20</td>
                                        </tr>
                                </table>
                        </div>
                </div>
        </div>
</section>