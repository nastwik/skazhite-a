               <section class="bg-blue">
                  <div class="container">
                     <div class="row g-4">
                        <div class="col-lg-6 offset-lg-3 text-center">
                              <div class="subtitle wow fadeInUp mb-3">Контакты</div>
                              <div class="section-title wow fadeInUp" data-wow-delay=".2s">Свяжитесь с нами</div>
                              <div class="spacer-single"></div>
                        </div>
                     </div>
                     <div class="row g-4 contacts-area">
                        <? if(carbon_get_theme_option( 'site_work_time' )) { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="relative">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/calendar.webp" class="abs bg-color-3 w-90px p-15 rounded-1 mb-3" alt="">
                                    <div class="relative ps-100 ms-4 wow fadeInUp">
                                        <div class="item-title">Режим работы</div>
                                        <p class="mb-0"><?php echo carbon_get_theme_option('site_work_time'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <? } ?>

                        <? if(carbon_get_theme_option( 'site_fact_address' )) { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="relative">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/location.webp" class="abs bg-color-3 w-90px p-15 rounded-1 mb-3" alt="">
                                    <div class="relative ps-100 ms-4 wow fadeInUp">
                                        <div class="item-title">Адрес</div>
                                        <p class="mb-0"><?php echo carbon_get_theme_option('site_fact_address'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <? } ?>

                        <? if(carbon_get_theme_option( 'site_phone' )) { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="relative">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/phone.webp" class="abs bg-color-3 w-90px p-15 rounded-1 mb-3" alt="">
                                    <div class="relative ps-100 ms-4 wow fadeInUp contact__link">
                                        <div class="item-title">Телефон</div>
                                        <a href="tel:<?php echo carbon_get_theme_option('site_phone_digits'); ?>" class="mb-0"><?php echo carbon_get_theme_option('site_phone'); ?></a>
                                    </div>
                                </div>
                            </div>
                        <? } ?>

                     </div>
                  </div>
               </section>

               <div id="maps">
                  <?php echo carbon_get_theme_option('site_map_coordinates'); ?>
               </div>

