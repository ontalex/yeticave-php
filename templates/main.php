<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное
        снаряжение.</p>
    <ul class="promo__list">

        <!--заполните этот список из массива категорий-->
        <?php foreach ($categories as $category): ?>
            <li class="promo__item promo__item--<?= $category["code"] ?>">
                <a class="promo__link" href="pages/all-lots.html?category=<?= $category["code"] ?>">
                    <?= $category["title"] ?>
                </a>
            </li>
        <?php endforeach; ?>

    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">

        <!--заполните этот список из массива с товарами-->
        <?php foreach ($lot_list as $lot): ?>
            <?php $current_delta = delta_date($lot["date_end"]); ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="/img/<?= $lot["img_url"] ?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                        <span class="lot__category">
                            <?= $lot["category"] ?>
                        </span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html">
                            <?= $lot["title"] ?>
                        </a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost">
                                    <?= format_price($lot["price"]) ?><b class="rub">р</b>
                                </span>
                        </div>
                        <div class="lot__timer timer timer<?php if($current_delta[0] == 0) echo "--finishing" ?>">
                            <?= $current_delta[0] . ":" . $current_delta[1] ?>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>

    </ul>
</section>
