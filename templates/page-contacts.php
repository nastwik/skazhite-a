<?php

/*
Template Name: Контакты
*/

get_header();
?>     
   <div class="no-bottom no-top" id="content">

      <div id="top"></div>

      <section class="bg-blue section-dark pb-0 relative overflow-hidden">
         <div class="container relative">
            <div class="row g-3 align-items-center page-header">
               <div class="col-lg-6 page-header__text">
                  <div class="relative">
                     <div class="header-title wow fadeInUp mb-2" data-wow-delay=".2s">Контакты</div>
                        <ul class="floens-breadcrumb list-unstyled wow fadeInUp" data-wow-delay=".3s">
                           <li><a href="/">Главная</a></li>
                           <li><span>Контакты</span></li>
                        </ul>
                     <div class="spacer-single"></div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="template-offer__img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/misc/4.png" class="w-100" alt="" >
                  </div>
               </div>  
            </div>
         </div>
      </section>
      
      <section class="relative overflow-hidden">
         <div class="container">
            <div class="row g-4 grid-divider">
               <?php if(carbon_get_theme_option( 'site_ur_address' )) { ?>
                  <div class="col-md-1-5 wow fadeInRight" data-wow-delay=".2s">
                     <div class="text-center">       
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/white/notes.png" class="bg-color w-90px p-15 rounded-1 mb-3 wow scaleIn" alt="">                     
                        <div class="item-title">Юридический адрес</div>
                        <p class="mb-0"><?php echo carbon_get_theme_option('site_ur_address'); ?></p>
                     </div>
                  </div>
               <? } ?>
               <?php if(carbon_get_theme_option('site_fact_address')) { ?>
                  <div class="col-md-1-5 wow fadeInRight" data-wow-delay=".4s">
                     <div class="text-center">                  
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/white/location.png" class="bg-color w-90px p-15 rounded-1 mb-3 wow scaleIn" alt="">            
                        <div class="item-title">Фактический адрес</div>
                        <p class="mb-0"><?php echo carbon_get_theme_option('site_fact_address'); ?></p>
                     </div>
                  </div>
               <? } ?>
               <?php if(carbon_get_theme_option('site_work_time')) { ?>
                  <div class="col-md-1-5 wow fadeInRight" data-wow-delay=".6s">
                     <div class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/white/calendar.webp" class="bg-color w-90px p-15 rounded-1 mb-3 wow scaleIn" alt="">                              
                        <div class="item-title">Режим работы</div>
                        <p class="mb-0"><?php echo carbon_get_theme_option('site_work_time'); ?></p>
                     </div>
                  </div>
               <? } ?>
               <?php if(carbon_get_theme_option('site_phone')) { ?>
                  <div class="col-md-1-5 wow fadeInRight" data-wow-delay=".8s">
                     <div class="text-center contact__link">                         
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/white/phone.png" class="bg-color w-90px p-15 rounded-1 mb-3 wow scaleIn" alt="">     
                        <div class="item-title">Телефон</div>
                        <a href="tel:<?php echo carbon_get_theme_option('site_phone_digits'); ?>" class="mb-0"><?php echo carbon_get_theme_option('site_phone') ?></a><br>
                     </div>
                  </div>
               <? } ?>
               <?php if(carbon_get_theme_option('site_email')) { ?>
                  <div class="col-md-1-5 wow fadeInRight" data-wow-delay="1s">
                     <div class="text-center contact__link">       
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/white/email.png" class="bg-color w-90px p-15 rounded-1 mb-3 wow scaleIn" alt="">                       
                        <div class="item-title">Почта</div>
                        <a href="mailto:<?php echo carbon_get_theme_option('site_email'); ?>"><?php echo carbon_get_theme_option('site_email'); ?></a>
                     </div>
                  </div>
               <? } ?>
            </div>
         </div>
      </section>


      <? if(carbon_get_theme_option( 'site_map_coordinates' )) { ?>
         <section class="contact-one">
            <div class="contact-one__map">
               <div id="maps">
                     <?php echo carbon_get_theme_option('site_map_coordinates'); ?>
               </div>
            </div>
            <div class="container relative">
               <div class="row g-4 justify-content-between align-items-center">
                  <div class="col-lg-7"></div>
                  <div class="col-lg-5 relative wow fadeInUp" data-wow-delay=".2s">
                     <div class="bg-white p-40 shadow-soft h-100 rounded-1">
                        <form id="footer-form" class="contact-form ajax-form">
                           <div class="row">
                              <div class="middle-title">Запись на прием</div>
                              <p>Администратор перезвонит вам в течение 30 сек</p>
                              <div class="form-border col-md-12">
                                 <input name="phone" type="text" required class="form-control" placeholder="+7(___)___-__-__">
                              </div>
                              <div>
                                 <p>Нажимая на кнопку "Отправить", я даю согласие на <a href="">обработку персональных данных</a> и принимаю условия <a href="">политики обработки персональных данных</a></p>
                              </div>
                              <div class="col-lg-12">
                                 <button name="submit" type="submit" value="Submit" class="btn-main btn-red w-100">Отправить</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  
               </div>
            </div>
         </section>
      <? } ?>
      
   </div>
<?php get_footer(); ?>