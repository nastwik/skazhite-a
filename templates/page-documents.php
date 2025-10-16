<?php

/*
Template Name: Информация о юл
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
                     <div class="header-title wow fadeInUp mb-2" data-wow-delay=".2s">Информация о юридическом лице</div>
                        <ul class="floens-breadcrumb list-unstyled wow fadeInUp" data-wow-delay=".3s">
                           <li><a href="/">Главная</a></li>
                           <li><a href="#">Документы</a></li>
                           <li><span>Информация о юридическом лице</span></li>
                        </ul>
                     <div class="spacer-single"></div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="template-offer__img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/misc/5.webp" class="w-100" alt="" >
                  </div>
               </div>  
            </div>
         </div>
      </section>

      <section>
         <div class="container">
            <div class="row g-5">
               <div class="col-lg-6 wow fadeInLeft">
                  <div class="p-40 bg-light rounded-1 h-100">
                     <div class="middle-title" class="mb-4">Реквизиты</div>
                        <strong>ИП</strong> Князева О.А.<br>
                        <? if(carbon_get_theme_option( 'site_inn' )) { ?>
                           <strong>ИНН</strong> <?php echo carbon_get_theme_option('site_inn'); ?>
                        <? } ?><br>
                        <? if(carbon_get_theme_option( 'site_kpp' )) { ?>
                           <strong>КПП</strong> <?php echo carbon_get_theme_option('site_kpp'); ?>
                        <? } ?><br>
                        <? if(carbon_get_theme_option( 'site_ogrn' )) { ?>
                           <strong>ОГРН</strong> <?php echo carbon_get_theme_option('site_ogrn'); ?>
                        <? } ?><br>
                        <? if(carbon_get_theme_option( 'site_ogrnip' )) { ?>
                           <strong>ОГРНИП</strong> <?php echo carbon_get_theme_option('site_ogrnip'); ?>
                        <? } ?><br>
                        <? if(carbon_get_theme_option( 'site_ur_address' )) { ?>
                           <strong>Юридический адрес:</strong> <?php echo carbon_get_theme_option('site_ur_address'); ?>
                        <? } ?><br>
                        <? if(carbon_get_theme_option( 'site_fact_address' )) { ?>
                           <strong>Фактический адрес:</strong> <?php echo carbon_get_theme_option('site_fact_address'); ?>
                        <? } ?>
                  </div>
               </div>

               <div class="col-lg-6 wow fadeInRight">
                  <div class="p-40 bg-light rounded-1 h-100">
                     <div class="middle-title" class="mb-4">Контакты</div>
                     <? if(carbon_get_theme_option( 'site_phone' )) { ?>
                        <strong>Телефон</strong>: <a href="tel:<?php echo carbon_get_theme_option('site_phone_digits'); ?>" class="mb-0"><?php echo carbon_get_theme_option('site_phone'); ?></a>
                     <? } ?><br>
                     <?php if(carbon_get_theme_option('site_email')) { ?>
                        <strong>Почта</strong>: <a href="mailto:o-knyazeva89@bk.ru"><a href="mailto:<?php echo carbon_get_theme_option('site_email'); ?>"><?php echo carbon_get_theme_option('site_email'); ?></a></a>
                     <? } ?>
                     <div class="middle-title mt-4 mb-4">График работы</div>
                     <strong>ПН-ПТ</strong>: 9:00-17:00
                     <br><strong>СБ</strong>: 9:00 - 15:00
                     <br><strong>Воскресенье</strong>: выходной
                  </div>
               </div>                 
            </div>
         </div>
      </section>

      <?php 
         $page_id = get_the_ID();
         $certificates = carbon_get_post_meta($page_id, 'certificates');

      ?>

      <?php if ($certificates) : ?>
         <section class="no-top">
            <div class="container">
               <div class="row g-4">
                  <div class="col-lg-6 offset-lg-3 text-center">
                     <div class="subtitle wow fadeInUp mb-3">Гарантия качественного лечения</div>
                     <div class="section-title wow fadeInUp" data-wow-delay=".2s">Сертифицированный специалист с дипломом и большим опытом</div>
                     <div class="spacer-single"></div>
                  </div>
               </div>
               <div class="row g-4 grid-divider">
                  <?php foreach ($certificates as $data) { ?>
                     <div class="col-md-4 wow fadeInRight" data-wow-delay=".2s">
                        <div class="text-center">
                           <a href="<?=wp_get_attachment_url( $data['certificates_file'] )?>" data-fancybox="images">       
                              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/notes.webp" class="bg-color w-90px p-15 rounded-1 mb-3 wow scaleIn" alt="">
                              <div class="link-name"><?=$data['certificates_name']?></div>
                           </a> 
                        </div>
                     </div>
                  <? } ?>
               </div>
            </div>
         </section>
      <?php endif; ?>
      
   </div>
<?php get_footer(); ?>