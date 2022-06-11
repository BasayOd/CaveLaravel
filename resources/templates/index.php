<section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <!--заполните этот список из массива категорий-->
            <?php foreach ($categories as  $value) { ?>
                <li class="promo__item promo__item--<?=$value['icon']?>">
                    <a class="promo__link" href="pages/all-lots.html"><?= strip_tags($value['name']) ?></a>
                </li>
            <?php } ?>

        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            
            <?php foreach ( $products as $key => $value) {?>
            
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?= strip_tags($value['url'])  ?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?= strip_tags($value['name'])  ?></span>
                    <h3 class="lot__title"><a class="text-link" href="lot.php?id=<?=  $value['id']?>"><?= strip_tags($value['name']) ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?= form_price(strip_tags($value['price'])) ?></span>
                        </div>
            <div class="lot__timer timer <?= check_alarm($value['dt_end'])?>">
                            <?= show_remaining_time($value['dt_end'],'now') ?>
                        </div>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </section>