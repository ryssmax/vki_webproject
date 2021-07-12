<?php include ROOT . '/views/layouts/headerIndex.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-lg-6">

                <br/>
                
                <h1>Что такое GamersHaven?</h1>
<p>В нашем интернет-магазине вы сможете гарантированно приобрести ключи к играм от Steam, Uplay, Battle.net и прочих популярных игровых платформ. Наш магазин делает все для того, чтобы ваши покупки проходили быстро, с максимальным удобством и безопасностью, а цены оставались максимально доступными. </p>
<p>Вам не нужно проходить обязательную регистрацию, достаточно лишь указать электронный адрес при оформлении заказа и выбрать удобный способ оплаты. Это намного удобнее, чем идти в магазин или заказывать игры на ПК в интернете с доставкой на дом. Всего пара минут – и вы получите ключ активации.</p>
<br />
<h3 >Наши преимущества</h3>
<ul >
<li>Широкий ассортимент игр – более 2 000 позиций в каталоге</li>
<li>Техническая поддержка сайта поможет ответить на возникшие вопросы и решить их. </li>
<li>
<p>Наша аттестация в электронных платежных системах позволяет работать с самыми распространенными электронными кошельками: Вебмани, Киви, Яндекс</p>
<p>Принимаем и оплату по банковской карте (Visa, MasterCard)</p>
<p>Мобильные операторы (Билайн, ТЕЛЕ2, Мегафон и МТС)</p>
<p>Интернет-банкинг (Сбербанк.Онлайн, Альфа, Русский стандарт, ВТБ24, Промсвязьбанк)</p>
</li>
<li>Накопительная система скидок до 10%. Чем больше сумма покупок - тем больше скидка на последующие покупки. </li>
<li>Мы приобретаем ключи оптом у официальных дилеров, работающих напрямую с издателями</li>
<li>Регулярно мониторим другие крупные онлайн-магазины и готовы предложить самую низкую цену.</li>
</ul>
<p><br>
Работая на рынке компьютерных игр с 2012 года, мы приобретали бесценный опыт, внимательно выслушивали все мнения и пожелания покупателей. В результате наш сервис стал максимально простым и удобным, а процедура покупки невероятно легкой. Сегодня нас знают и доверяют сотни тысяч игроков в России и соседних странах. Свидетельство тому – свыше 8 000 положительных отзывов на нашей страничке Отзывы.
И это – огромный стимул для нас расти и развиваться дальше.
</p>
            </div>
        </div>
    </div>


    <!-- Тут погребён страый дизайн главной страницы сайта.
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Последние товары</h2>

                    <?php foreach ($latestProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                    <   <h2>$<?php echo $product['price']; ?></h2> 
                                        <p>
                                            <a href="/product/<?php echo $product['id']; ?>">
                                                <?php echo $product['name']; ?>
                                            </a>
                                        </p>
                                        <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div> -->





             <!--  <div class="recommended_items">recommended_items
                    <h2 class="title text-center">Рекомендуемые товары</h2>
                    
                    <div class="cycle-slideshow" 
                         data-cycle-fx=carousel
                         data-cycle-timeout=5000
                         data-cycle-carousel-visible=3
                         data-cycle-carousel-fluid=true
                         data-cycle-slides="div.item"
                         data-cycle-prev="#prev"
                         data-cycle-next="#next"
                         >                        
                             <?php foreach ($sliderProducts as $sliderItem): ?>
                            <div class="item">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?php echo Product::getImage($sliderItem['id']); ?>" alt="" />
                                            <h2>$<?php echo $sliderItem['price']; ?></h2>
                                            <a href="/product/<?php echo $sliderItem['id']; ?>">
                                                <?php echo $product['name']; ?>
                                            </a>
                                            <br/><br/>
                                            <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $sliderItem['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <?php if ($sliderItem['is_new']): ?>
                                            <img src="/template/images/home/new.png" class="new" alt="" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <a class="left recommended-item-control" id="prev" href="#recommended-item-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right recommended-item-control" id="next"  href="#recommended-item-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>

                </div>
            </div>/recommended_items

        </div>
    </div>-->

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>