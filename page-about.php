<?php

/*
Template Name: О компании
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
                     <div class="header-title wow fadeInUp mb-2" data-wow-delay=".2s">О центре</div>
                        <ul class="floens-breadcrumb list-unstyled wow fadeInUp" data-wow-delay=".3s">
                           <li><a href="/">Главная</a></li>
                           <li><span>О центре</span></li>
                        </ul>
                     <div class="spacer-single"></div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="template-offer__img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/misc/1.png" class="w-100" alt="">
                  </div>
               </div>  
            </div>
         </div>
      </section>

      <section>
         <div class="container relative">
            <div class="row g-4 gx-5 align-items-center">
               <div class="col-lg-6 relative">
                  <div class="relative z-1000">
                     <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Уютный кабинет, где лечат с заботой</div>
                     <div class="section-title">От стетоскопа до эндоскопа — оснащение на высшем уровне</div>
                     <p>Когда вы сталкиваетесь с проблемами уха, горла или носа, найти хорошего отоларинголога — задача трудная. Потому что мало информации о специалистах, долгое ожидание записи к конкретному врачу, длинные очереди в медучреждениях. Что уж говорить про страх перед медицинским вмешательством или постановкой диагноза…</p>
                     <p>Но есть клиники, в которых учли все эти сложности и готовы предложить действительно хороший сервис. Например, наш медицинский ЛОР центр «Скажите А». Обратившись сюда, вы можете быть уверены, что получите профессиональную помощь и поддержку до, во время и после.</p>
                     <p>Наши врачи — это опытные отоларингологи высшей квалификации, которые постоянно обучаются, чтобы предложить вам самые современные методы диагностики и лечения. В ЛОР центре «Скажите А» ценят каждого пациента, поэтому специалист уделяет много времени для детального обследования и общения с вами, чтобы выслушать ваши жалобы и понять переживания. Клиника оснащена новейшим медоборудованием, чтобы проводить точную диагностику и эффективное лечение.</p>
                     <p>Ещё мы знаем, как важно сэкономить время. Благодаря удобному расписанию, вас запишут на прием в наиболее подходящее время. Мы всегда предоставляем полную информацию о нашей клинике, услугах и процессе лечения. Вы можете задать любые вопросы нашим администраторам, которые с удовольствием помогут вам разобраться.</p>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="row g-4">
                     <div class="col-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/6.jpg" class="img-fluid rounded-1 mb-4 w-70 ms-30 wow scaleIn shadow-soft" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/8.png" class="img-fluid rounded-1 wow scaleIn shadow-soft" alt="">
                     </div>
                     <div class="col-6">
                        <div class="spacer-single sm-hide"></div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/7.jpg" class="img-fluid rounded-1 mb-4 wow scaleIn shadow-soft" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/4.jpeg" class="img-fluid rounded-1 w-70 wow scaleIn shadow-soft" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <? require_once 'include/main_page/gallery.php' ?>

   </div>
   
<?php get_footer(); ?>