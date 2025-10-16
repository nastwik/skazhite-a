<?php

/*
Template Name: О враче
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
                     <div class="header-title wow fadeInUp mb-2" data-wow-delay=".2s">Князева Ольга Александровна</div>
                        <ul class="floens-breadcrumb list-unstyled wow fadeInUp" data-wow-delay=".3s">
                           <li><a href="/">Главная</a></li>
                           <li><span>О враче</span></li>
                        </ul>
                     <div class="spacer-single"></div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="template-offer__img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/misc/8.webp" class="w-100" alt="" >
                  </div>
               </div>  
            </div>
         </div>
      </section>

      <section>
         <div class="container relative">
            <div class="row g-4 gx-5 align-items-center">
               <div class="col-lg-6">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/doctors/olga_black-bg.webp" class="w-100 rounded-1" alt="">
               </div>
               <div class="col-lg-6 relative">
                  <div class="relative">
                     <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Теплое отношение и прогрессивный подход</div>
                     <div class="section-title">За это клиенты доверяют мне свои уши, горло и нос</div>
                     <p>Более 10 лет оказываю высококвалифицированную медицинскую помощь пациентам с заболеваниями уха, горла и носа всех возрастных категорий (как взрослых, так и детей), используя самые современные технологии.</p>
                     <p>Кабинет оснащен необходимым оборудованием, которое позволяет проводить качественную диагностику заболеваний уха, горла и носа, что является ключевым фактором эффективного лечения и позволяет выявлять ЛОР-патологии на ранней стадии.</p>
                     <p>А еще, я счастливая мама двоих детей!</p>
                     <p>Ваш врач <span class="red">Князева О.А.</span></p>
                  </div>
                  <div class="about-author d-flex align-items-center">
                     <div class="author-ava cs_author-painting">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/doctors/author-painting.webp" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

   </div>

<?php get_footer(); ?>