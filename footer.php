        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer class="section-dark">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-4 col-sm-6">
                        <? if(carbon_get_theme_option( 'site_logo' )) { ?>
                            <div class="de-flex-col">
                                <div class="footer__logo">
                                    <a href="/">
                                        <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('site_logo')); ?>" alt="logo" width="75">
                                        <div>
                                            <div class="text-white">Скажите «А»</div>
                                            <div class="text-white">ЛОР центр</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <? } ?>
                        <div class="spacer-20"></div>
                        <div class="widget">
                            <? if(carbon_get_theme_option( 'site_work_time' )) { ?>
                                <div class="fw-bold text-white"><i class="icofont-wall-clock me-2 id-color-2"></i>Режим работы</div>
                                    <?php echo carbon_get_theme_option('site_work_time'); ?>
                                <div class="spacer-20"></div>
                            <? } ?>
                            
                            <? if(carbon_get_theme_option( 'site_phone' )) { ?>
                                <div class="fw-bold text-white"><i class="icofont-phone me-2 id-color-2"></i>Телефон</div>
                                <a href="tel:<?php echo carbon_get_theme_option('site_phone_digits'); ?>"><?php echo carbon_get_theme_option('site_phone'); ?></a>
                            <? } ?> 

                            <div class="spacer-20"></div>
                            <? if(carbon_get_theme_option( 'site_email' )) { ?>    
                                <div class="fw-bold text-white"><i class="icofont-envelope me-2 id-color-2"></i>Почта</div>
                                <a href="mailto:<?php echo carbon_get_theme_option( 'site_email' ); ?>"><?php echo carbon_get_theme_option('site_email'); ?></a>
                            <? } ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                        <div class="widget">
                            <div class="link-name">Полезная информация</div>
                            <?php
                                wp_nav_menu( [
                                    'theme_location'  => 'menu_main_footer',
                                    'menu_class'      => 'footer-menu', 
                                ] );
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
                        <div class="widget">
                            <div class="link-name">Реквизиты</div>
                            <ul>
                                <li><strong>ИП</strong> Емельяненко Ольга Александровна</li>
                                <? if(carbon_get_theme_option( 'site_inn' )) { ?>
                                    <li><strong>ИНН</strong> <?php echo carbon_get_theme_option('site_inn'); ?></li>
                                <? } ?>
                                <? if(carbon_get_theme_option( 'site_kpp' )) { ?>
                                    <li><strong>КПП</strong> <?php echo carbon_get_theme_option('site_kpp'); ?></li>
                                <? } ?>
                                <? if(carbon_get_theme_option( 'site_ogrn' )) { ?>
                                    <li><strong>ОГРН</strong> <?php echo carbon_get_theme_option('site_ogrn'); ?></li>
                                <? } ?>
                            </ul>
                            <p>
                                <? if(carbon_get_theme_option( 'site_fact_address' )) { ?>
                                    <br>Фактический адрес: <?php echo carbon_get_theme_option('site_fact_address'); ?>
                                <? } ?>
                                <? if(carbon_get_theme_option( 'site_ur_address' )) { ?>
                                    <br>Юридический адрес: <?php echo carbon_get_theme_option('site_ur_address'); ?>
                                <? } ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="subfooter-content de-flex">
                                <div class="de-flex-col">
                                    Все права защищены © 2025. Разработка сайта <a href="https://flamingo.expert/" target="_blank" style="color:#EA1C26">&nbsp; Flamingo.expert</a>
                                </div>
                                <ul class="menu-simple">
                                    <li><a href="#">Согласие на обработку персональных данных</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- footer close -->
    <button class="go-top">
        <i class="icofont-arrow-up text-white"></i>
    </button>

    <!-- Javascript Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js" integrity="sha512-j7/1CJweOskkQiS5RD9W8zhEG9D9vpgByNGxPIqkO5KrXrwyDAroM9aQ9w8J7oRqwxGyz429hPVk/zR6IOMtSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://www.sng-it.ru/bitrix/templates/master/js/jquery.inputmask.bundle.min.js"></script>

    <?php wp_footer(); ?>

</body>
</html>