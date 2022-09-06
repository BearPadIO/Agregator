<?php

include 'php/database.php';

$result = mysqli_query($link, "SELECT * FROM `exchange` ");
$result_2 = mysqli_query($link, "SELECT * FROM `agregator` ");
$result_3 = mysqli_query($link, "SELECT * FROM `ad_image` LIMIT 4");
$result_4 = mysqli_query($link, "SELECT * FROM `ad_5_block` LIMIT 5");
$result_5 = mysqli_query($link, "SELECT * FROM `ag_news` LIMIT 15");
$result_6 = mysqli_query($link, "SELECT * FROM `ag_news_pop` LIMIT 15");
$result_7 = mysqli_query($link, "SELECT * FROM `ad_image_pop`");
$result_8 = mysqli_query($link, "SELECT * FROM `ad2_pop`");
$result_9 = mysqli_query($link, "SELECT * FROM `fin_resource`");
$result_10 = mysqli_query($link, "SELECT * FROM `ad_birzhi` LIMIT 5");
$result_11 = mysqli_query($link, "SELECT * FROM `tg_kanali`");
$result_12 = mysqli_query($link, "SELECT * FROM `footer_contacts`");
$result_13 = mysqli_query($link, "SELECT * FROM `ad_birzhi_pop` LIMIT 5");
$result_14 = mysqli_query($link, "SELECT * FROM `extra_ad` LIMIT 5");
$result_15 = mysqli_query($link, "SELECT * FROM `extra_ad_pop` LIMIT 5");
?>


<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Агрегатор</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/css/splide.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/adaptive.css">
        <script src="js/jquery-2.0.2.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>
    <body style = "position: relative;">
        <div class="black"></div>
        <header>
            <img src="/src/logo.png" class="logo"></img>
            <div class="menu">
                <div class = "seper">
                    <div class="menu-btn"><a href="#news" class = "text">Новости</a></div>
                    <div class="menu-btn"><a href="#exchanges" class = "text">Обменники</a></div>
                    
                </div>
                <div class = "seper">
                    <div class="menu-btn"><a href="#aggregators" class = "text">Агрегаторы</a></div>
                    <div class="menu-btn"><a href="#resurs" class = "text">Ресурсы</a></div>
                    
                    
                </div>
                <div class = "seper">
                    <div class="menu-btn"><a href="#kanal" class = "text">Каналы</a></div>
                    <div class="menu-btn"><a href="#contacts" class = "text">Контакты</a></div>
                </div>
            </div>
        </header>
        <main id="mainpage">
        <style>
html {
  scroll-behavior: smooth; /* свойство scroll-behavior не наследуется, применяется к прокручиваемым блокам */ 
}
</style>
<!--            <div class="full-version"><a href="https://agr.bearpad.io/mobindex.php" class="text ">Мобильная версия</a></div>-->
            <div class = "first-section" id="check_n">
                <div class="news-section" id="news">
                    <section id = "outer-slider" class="splide" aria-labelledby="check_n" style = "width: 82.5%;">
                        <h2 class = "text changer-text">Актуальные новости</h2>

                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php

                                        while ( $item_5 = mysqli_fetch_assoc($result_5) )
                                        {
                                            ?>
                                            <a class="splide__slide news-block-li" href="javascript:PopUpShow(<?php echo $item_5['id']?>)">
                                                <div class="news-image"><img src="src/<?php echo $item_5['image']?>" alt="" class="news-image-css"></div>
                                                <h2 class="news-heading text"><?php echo $item_5['heading'] ?></h2>
                                                <hr class = "ssv">
                                                <div class="news-block text"><?php echo $item_5['text']?></div>
                                            </a>

                                            <?php
                                        }
                                    ?>
                                
                            </ul>

                        </div>
                    </section>
                    <?php

                                    while ( $item_6 = mysqli_fetch_assoc($result_6) )
                                    {
                                        ?>
                                        <div class="b-popup" id="popup<?php echo $item_6['id']?>">
                                            <div class="b-popup-content">
                                                <div class="news-image-pop"><img src="src/<?php echo $item_6['image']?>" alt="" class="news-image-css"></div>
                                                <h2 class="news-heading-pop text"><?php echo $item_6['heading'] ?></h2>
                                                <div class="news-block-pop text"><?php echo $item_6['text']?></div>
                                                <a href="javascript:PopUpHide(<?php echo $item_6['id']?>)" class="close-button">&#10006;</a>
                                            </div>
                                        </div>

                                        
                                        <script>
                                            $(document).ready(function(){
                                                   
                                                function PopUpHide(id){
                                                $(`#popup${id}`).hide();
                                            }
                                            });
                                            
                                            function PopUpShow(id){
                                                $(`#popup${id}`).show();
                                                $('.black').css("display", "block");
                                            }
                                            //Функция скрытия PopUp
                                            function PopUpHide(id){
                                                $(`#popup${id}`).hide();
                                                $('.black').css("display", "none");
                                            }
                                        </script>
                                        

                                        <?php
                                    }
                                    ?>
                </div>
                <div class="info-group" id="exchanges">
                    <div class="changer-section" style = "min-height: 700px;">
                        <h2 class="text changer-text" id = "checker2">Список обменников</h2>
                        <section id = "inner-slider-3" class="splide sec-content-group-first-section" aria-label="Basic Structure Example" style = "height: 660px;">
                            <div class="splide__track">
                                <div class="splide__list">
                                    <?php
                                        while ( $item = mysqli_fetch_assoc($result) )
                                        {
                                            ?>
                                    
                                    <div class="changer splide__slide">
                                        
                                        <div style = "display: flex;">
                                            <span class="info-exchange text"><?php echo $item['name'] ?></span>
                                            <span class="info-exchange svp text"><image class="ex-top<?php echo $item['id']?>" src="/src/top.png"></image><span>
                                            <span class="info-exchange text exvm"><?php echo $item['id'] ?></span>
                                        </div>

                                        <hr class = "ssv">
                                        <span class="info-exchange text" style = "font-weight: 300; margin: 0.2em 0; text-align: left;"><?php echo $item['text'] ?></span>
                                        
                                        <hr class = "ssv">
                                        <div class="ssl">
                                            <span class="text" style = "color:black;">Telegram:<a href="https://t.me/<?php echo $item['telegram']?>" class = "text ssp"><?php echo $item['telegram'] ?></a></span>
                                            <span class="text" style = "color:black;">WEB:<a href = "http://<?php echo $item['web'] ?>" target="_blank" class = "text ssp"><?php echo $item['web'] ?></a></span>
                                            <span class="text" style = "color:black;">Phone Number #1:<a  href="tel:<?php echo $item['phone']?>"class = "text ssp"><?php echo $item['phone'] ?></a></span>
                                        
                                        </div>
                                    </div>
                                    


                                        <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </section>
                    </div>
                   
                    <div class="aggregator-group" style = "min-height: 640px;" id="aggregators">
                        <h2 class="text changer-text" >Список агрегаторов</h2>
                        <section id = "inner-slider-2" class="splide sec-content-group-first-section" aria-label="Basic Structure Example" style = "height: 600px;">
                            <div class="splide__track" id = "checker3">
                                <div class="splide__list">
                                <?php
                                        while ( $item_2 = mysqli_fetch_assoc($result_2) )
                                        {
                                            ?>

                                    <div class="aggregator splide__slide">
                                        <div style = "display: flex;">
                                            <span class="info-exchange text"><?php echo $item_2['name'] ?></span>
                                            <span class="info-exchange svp text"><image class="ag-top<?php echo $item_2['id']?>" src="/src/top.png"></image><span>
                                            <span class="info-exchange text exvm"><?php echo $item_2['id'] ?></span>
                                        </div>
                                        <hr class = "ssv">
                                        <span class="info-exchange text" style = "font-weight: 300; margin: 0.2em 0; text-align: left;"><?php echo $item_2['text'] ?></span>
                                        
                                        <hr class = "ssv">
                                        <div class="ssl">
                                            <span class="text" style = "color:black;">Telegram:<a href="https://t.me/<?php echo $item_2['telegram']?>" class = "text ssp"><?php echo $item_2['telegram'] ?></a></span>
                                            <span class="text" style = "color:black;">WEB:<a href="http://<?php echo $item_2['web'] ?>" target="_blank" class = "text ssp"><?php echo $item_2['web'] ?></a></span>
                                            <span class="text" style = "color:black;">Phone Number #1:<a href="tel:<?php echo $item_2['phone']?>" class = "text ssp"><?php echo $item_2['phone'] ?></a></span>
                                        </div>
                                    </div>
                                        <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="fin-group" style = "min-height: 310px;" id="resurs">
                        <h2 class="text changer-text">Список Фин.Ресурсов</h2>
                        <section id = "inner-slider-4" class="splide sec-content-group-first-section" aria-label="Basic Structure Example" style = "height: 510px !important;">
                            <div class="splide__track">
                                <div class="splide__list">
                                    <?php
                                    while ( $item_9 = mysqli_fetch_assoc($result_9) )
                                    {
                                        ?>

                                        <div class="aggregator splide__slide">
                                            <div style = "display: flex;">
                                                <span class="info-exchange text"><?php echo $item_9['name'] ?></span>
                                                <span class="info-exchange svp text"><image class="fin-top<?php echo $item_9['id']?>" src="/src/top.png"></image><span>
                                                <span class="info-exchange text exvm"><?php echo $item_9['id'] ?></span>
                                            </div>
                                            <hr class = "ssv">
                                            <span class="info-exchange text" style = "font-weight: 300; margin: 0.2em 0; text-align: left;"><?php echo $item_9['text'] ?></span>

                                            <hr class = "ssv">
                                            <div class="ssl">
                                                <span class="text" style = "color:black;">Telegram:<a href="https://t.me/<?php echo $item_9['link']?>" class = "text ssp"><?php echo $item_9['link'] ?></a></span>
                                                <span class="text" style = "color:black;">WEB:<span class = "text ssp"><?php echo $item_9['web'] ?></span></span>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="fin-group" style = "min-height: 310px;" id="kanal">
                        <h2 class="text changer-text">Список Телеграм Каналов</h2>
                        <section id = "inner-slider-5" class="splide sec-content-group-first-section" aria-label="Basic Structure Example" style = "height: 510px !important;">
                            <div class="splide__track">
                                <div class="splide__list">
                                    <?php
                                    while ( $item_11 = mysqli_fetch_assoc($result_11) )
                                    {
                                        ?>

                                        <div class="aggregator splide__slide">
                                            <div style = "display: flex;">
                                                <span class="info-exchange text"><?php echo $item_11['name'] ?></span>
                                                <span class="info-exchange svp text"><image class="tg-top<?php echo $item_11['id']?>" src="/src/top.png"></image><span>
                                                <span class="info-exchange text exvm"><?php echo $item_11['id'] ?></span>
                                            </div>
                                            <hr class = "ssv">
                                            <span class="info-exchange text" style = "font-weight: 300; margin: 0.2em 0; text-align: left;"><?php echo $item_11['text'] ?></span>

                                            <hr class = "ssv">
                                            <div class="ssl">
                                                <span class="text" style = "color:black;">Telegram:<a href="https://t.me/<?php echo $item_11['link']?>" class = "text ssp"><?php echo $item_11['link'] ?></a></span>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
            <div class = "second-section">
                <div>
                    <p class="text svf">Топ обменников</p>
                    <div class="ad-sec-content-group">
                        <?php
                        while ( $item_3 = mysqli_fetch_assoc($result_3) )
                        {
                            ?>
                            <div class="block-3"><img src="src/<?php echo $item_3['src']?>" alt="" class="ad-block-img" onclick="javascript:ADPopUpShow(<?php echo $item_3['id']?>)"></div>

                            <?php
                        }
                        ?>
                    </div>
                </div>
                <section class="sec-content-group sec-content-group-color sec-agr-group">
                    <p class="text">Топ агрегаторов</p>
                        <?php
                            while ( $item_4 = mysqli_fetch_assoc($result_4) )
                            {
                                ?>
                                <li class="splide__slide splide__slide_ad" onclick="javascript:AD2PopUpShow(<?php echo $item_4['id']?>)"><img src="src/<?php echo $item_4['src']?>" alt="" class="block-5-img"><p class = "text splide__slide_span"><?php echo $item_4['name'] ?></p></li>

                                <?php
                            }
                        ?>
                </section>

                <section class="sec-content-group sec-content-group-color-2 extra2">
                    <p class="text">Топ бирж</p>
                    <?php
                    while ( $item_10 = mysqli_fetch_assoc($result_10) )
                    {
                        ?>
                        <li class="splide__slide splide__slide_ad extra" onclick="javascript:AD3PopUpShow(<?php echo $item_10['id']?>)"><img src="src/<?php echo $item_10['src']?>" alt="" class="block-5-img"><p class = "text splide__slide_span"><?php echo $item_10['name'] ?></p></li>
                        <?php
                    }
                    ?>
                </section>

                <div class="sec-content-group sec-content-group-color sec-content-group2" style = "margin: 2em 0 2em 0;"><span class="sec-content-group-text text sec-content-group2">В разработке</span></div>

                <section class="sec-content-group sec-content-group-color-2 extra2" style = "height: max-content !important;">
                    <p class="text">Реклама</p>
                    <?php
                    while ( $item_14 = mysqli_fetch_assoc($result_14) )
                    {
                        ?>
                        <li class="splide__slide splide__slide_ad extra" style = "height: 120px" onclick="javascript:AD4PopUpShow(<?php echo $item_14['id']?>)"><img src="src/<?php echo $item_14['src']?>" alt="" class="block-5-img" style = "width: 100%;"></li>
                        <?php
                    }
                    ?>
                </section>
            </div>


            <?php

            while ( $item_7 = mysqli_fetch_assoc($result_7) )
            {
                ?>
                <div class="ex-popup" id="ad_popup<?php echo $item_7['id']?>">
                    <div class="ex-popup-content">

                        <h2 class="ex-heading-pop text"><?php echo $item_7['name'] ?></h2>
                        <p class="ex-block-pop text"></p>
                        <div class="text" style = "color: black;padding: 0.5em; font-weight: 300;word-break: break-all;"><?php echo $item_7['text']?></div>
                        <p class="ex-block-pop text"></p>
                        <div class="contact-group">
                            <span class="text" style = "color:black;">Telegram:<a href="https://t.me/<?php echo $item_7['telegram']?>"class = "text contact-text-after"><?php echo $item_7['telegram']?></a></span>
                            <span class="text" style = "color:black;">WhatsApp:<a href="https://wa.me/<?php echo $item_7['whatsapp']?>"class = "text contact-text-after"><?php echo $item_7['whatsapp']?></a></span>
                            <span class="text" style = "color:black;">WEB:<a href="http://<?php echo $item_7['web']?>" class = "text contact-text-after"><?php echo $item_7['web']?></a></span>
                            <span class="text" style = "color:black;">Phone Number #1:<a href="tel:<?php echo $item_7['phone1']?>" class = "text contact-text-after"><?php echo $item_7['phone1']?></a></span>
                            <span class="text" style = "color:black;">Phone Number #2:<a href="tel:<?php echo $item_7['phone2']?>"class = "text contact-text-after"><?php echo $item_7['phone2']?></a></span>
                            <!--Возможно есть смысл представить не как текст, а как линки -->
                        </div>
                        <a href="javascript:ADPopUpHide(<?php echo $item_7['id']?>)" class="close-button">&#10006;</a>

                    </div>
                </div>


                <script>
                    $(document).ready(function(){

                        function ADPopUpHide(id){
                        $(`#ad_popup${id}`).hide();
                    }
                    });

                    function ADPopUpShow(id){
                        $(`#ad_popup${id}`).show();
                    }
                    //Функция скрытия PopUp
                    function ADPopUpHide(id){
                        $(`#ad_popup${id}`).hide();
                    }
                </script>


                <?php
            }
            ?>

            <?php

            while ( $item_8 = mysqli_fetch_assoc($result_8) )
            {
                ?>
                <div class="ex-popup" id="ad2_popup<?php echo $item_8['id']?>">
                    <div class="ex-popup-content">

                        <h2 class="ex-heading-pop text"><?php echo $item_8['name'] ?></h2>
                        <p class="ex-block-pop text"></p>
                        <div class="text" style = "color: black;padding: 0.5em; font-weight: 300;word-break: break-all;"><?php echo $item_8['text']?></div>
                        <p class="ex-block-pop text"></p>
                        <div class="contact-group">
                            <span class="text" style = "color:black;">Telegram:<a href="https://t.me/<?php echo $item_8['telegram']?>"class = "text contact-text-after"><?php echo $item_8['telegram'] ?></a></span>
                            <span class="text" style = "color:black;">WhatsApp:<a href="https://wa.me/<?php echo $item_8['whatsapp']?>" class = "text contact-text-after"><?php echo $item_8['whatsapp'] ?></a></span>
                            <span class="text" style = "color:black;">WEB:<a href="http://<?php echo $item_8['web'] ?>" class = "text contact-text-after"><?php echo $item_8['web'] ?></a></span>
                            <span class="text" style = "color:black;">Phone Number #1:<a href="tel:<?php echo $item_8['phone1']?>" class = "text contact-text-after"><?php echo $item_8['phone1'] ?></a></span>
                            <span class="text" style = "color:black;">Phone Number #2:<a href="tel:<?php echo $item_8['phone2']?>" class = "text contact-text-after"><?php echo $item_8['phone2'] ?></a></span>
                            <!--Возможно есть смысл представить не как текст, а как линки -->
                        </div>
                        <a href="javascript:AD2PopUpHide(<?php echo $item_8['id']?>)" class="close-button">&#10006;</a>

                    </div>
                </div>


                <script>
                    $(document).ready(function(){

                        function AD2PopUpHide(id){
                        $(`#ad2_popup${id}`).hide();
                    }
                    });

                    function AD2PopUpShow(id){
                        $(`#ad2_popup${id}`).show();
                    }
                    //Функция скрытия PopUp
                    function AD2PopUpHide(id){
                        $(`#ad2_popup${id}`).hide();
                    }
                </script>


                <?php
            }
            ?>

            <?php

            while ( $item_13 = mysqli_fetch_assoc($result_13) )
            {
                ?>
                <div class="ex-popup" id="ad3_popup<?php echo $item_13['id']?>">
                    <div class="ex-popup-content">

                        <h2 class="ex-heading-pop text"><?php echo $item_13['name'] ?></h2>
                        <p class="ex-block-pop text"></p>
                        <div class="text" style = "color: black;padding: 0.5em; font-weight: 300;word-break: break-all;"><?php echo $item_13['text']?></div>
                        <p class="ex-block-pop text"></p>
                        <div class="contact-group">
                            <span class="text" style = "color:black;">WEB:<a href="http://<?php echo $item_13['link']?>" target="_blank" class = "text contact-text-after"><?php echo $item_13['link']?></a></span>
                        </div>
                        <a href="javascript:AD3PopUpHide(<?php echo $item_13['id']?>)" class="close-button">&#10006;</a>

                    </div>
                </div>


                <script>
                    $(document).ready(function(){

                        function AD3PopUpHide(id){
                            $(`#ad3_popup${id}`).hide();
                        }
                    });

                    function AD3PopUpShow(id){
                        $(`#ad3_popup${id}`).show();
                    }
                    //Функция скрытия PopUp
                    function AD3PopUpHide(id){
                        $(`#ad3_popup${id}`).hide();
                    }
                </script>


                <?php
            }
            ?>

            <?php

            while ( $item_15 = mysqli_fetch_assoc($result_15) )
            {
                ?>
                <div class="ex-popup" id="ad4_popup<?php echo $item_15['id']?>">
                    <div class="ex-popup-content">

                        <h2 class="ex-heading-pop text"><?php echo $item_15['name'] ?></h2>
                        <p class="ex-block-pop text"></p>
                        <div class="text" style = "color: black;padding: 0.5em;word-break: break-all;"><?php echo $item_15['text']?></div>
                        <p class="ex-block-pop text"></p>
                        <div class="contact-group">
                            <span class="text" style = "color:black;">Telegram:<a href="https://t.me/<?php echo $item_15['telegram']?>"class = "text contact-text-after"><?php echo $item_15['telegram'] ?></a></span>
                            <span class="text" style = "color:black;">WhatsApp:<a href="https://wa.me/<?php echo $item_15['whatsapp']?>" class = "text contact-text-after"><?php echo $item_15['whatsapp'] ?></a></span>
                            <span class="text" style = "color:black;">WEB:<a href="http://<?php echo $item_15['web'] ?>" class = "text contact-text-after"><?php echo $item_15['web'] ?></a></span>
                            <span class="text" style = "color:black;">Phone Number #1:<a href="tel:<?php echo $item_15['phone1']?>" class = "text contact-text-after"><?php echo $item_15['phone1'] ?></a></span>
                            <span class="text" style = "color:black;">Phone Number #2:<a href="tel:<?php echo $item_15['phone2']?>" class = "text contact-text-after"><?php echo $item_15['phone2'] ?></a></span>
                            <!--Возможно есть смысл представить не как текст, а как линки -->
                        </div>
                        <a href="javascript:AD4PopUpHide(<?php echo $item_15['id']?>)" class="close-button">&#10006;</a>

                    </div>
                </div>


                <script>
                    $(document).ready(function(){

                        function AD4PopUpHide(id){
                            $(`#ad4_popup${id}`).hide();
                        }
                    });

                    function AD4PopUpShow(id){
                        $(`#ad4_popup${id}`).show();
                    }
                    //Функция скрытия PopUp
                    function AD4PopUpHide(id){
                        $(`#ad4_popup${id}`).hide();
                    }
                </script>


                <?php
            }
            ?>


        </main>
        <footer class="footer">
            <div style="display: flex; align-content: center;     align-items: center; padding-left: 5em; gap: 10px;">
            <img src="/src/contact.png" alt="" style="width: 25px; height: 25px ">
            <h2 class="footer-h2 text-footer">Контакты</h2>
            </div>
            <div class="footer-block" id="contacts">
                <?php
                while ( $item_12 = mysqli_fetch_assoc($result_12) )
                {
                ?>
                <div>
                    <div class="footer-block-element">
                        <div class="footer-block-element-2">
                        <p class="text-footer">Email:</p>
                        <div class="footer-block-last">
                            <a href="mailto:<?php echo $item_12['mail']?>" class="text-footer"><?php echo $item_12['mail']?></a>
                        </div>
                        </div>
                    </div>
                    <div class="footer-block-element">
                        <div class="footer-block-element-2">
                        <p class="text-footer">Telegram:</p>
                        <div class="footer-block-last">
                            <a href="https://t.me/<?php echo $item_12['tg']?>" class="text-footer"><?php echo $item_12['tg']?></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="footer-block-element">
                        <div class="footer-block-element-2">
                        <p class="text-footer">Phone:</p>
                        <div class="footer-block-last">
                            <a href="tel:<?php echo $item_12['phone']?>" class="text-footer"><?php echo $item_12['phone']?></a>
                        </div>
                        </div>
                    </div>
                    <div class="footer-block-element">
                        <div class="footer-block-element-2">
                        <p class="text-footer">WhatsApp:</p>
                        <div class="footer-block-last">
                            <a href="https://wa.me/<?php echo $item_12['whatsapp']?>" class="text-footer"><?php echo $item_12['whatsapp']?></a>
                        </div>
                        </div>
                    </div>
                 </div>
                    <?php
                }
                ?>
            </div>
        </footer>
        <script src = "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/js/splide.min.js"></script>
        <script src = "js/slider-news.js"></script>
        <script src = "js/top.js"></script>
    </body>
</html>