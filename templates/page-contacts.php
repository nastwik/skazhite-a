<?php

/*
Template Name: Контакты
*/

get_header();
?>     
   <div class="no-bottom no-top" id="content">

      <div id="top"></div>

      <section class="bg-blue section-dark pb-0 relative overflow-hidden">
         <div class="container relative z-1000">
            <div class="row g-3 align-items-center page-header">
               <div class="col-lg-6 page-header__text">
                  <div class="relative z-1000">
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
                        <div class="bg-white p-40 shadow-soft h-100 rounded-1 contact-form">
                        <div class="middle-title">Запись на прием</div>
                        <p>Администратор перезвонит вам в течение 30 сек</p>
                        <form name="contactForm" id="contact_form" class="form-border" method="post" action="contact.php">
                           <div class="row g-3">
                              <div class="col-12">
                                    <div class="field-set">
                                       <input type="text" id="phone1" name="phone" class="form-control" placeholder="+7(___)___--__--__" required>
                                    </div>
                              </div>
                              <div class="col-12 mb-3">
                                 <div id='submit' class="w-100">
                                    <input type='submit' id='send_message' value='Отправить' class="btn-main btn-red w-100">
                                 </div>
                              </div>
                           </div>
                           <p>Нажимая на кнопку "Отправить", я даю согласие на <a href="">обработку персональных данных</a> и принимаю условия <a href="">политики обработки персональных данных</a></p>
                           
                           <div id="success_message" class='success' style="display: none;">
                              Ваше сообщение было успешно отправлено!
                           </div>
                           <div id="error_message" class='error' style="display: none;">
                              Произошла ошибка! Пожалуйста, проверьте введенные данные.
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