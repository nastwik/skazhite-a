<?php get_header(); ?>    
   <div class="no-bottom no-top" id="content">

      <div id="top"></div>

      <section class="bg-blue section-dark pb-0 relative overflow-hidden">
         <div class="container relative z-1000">
            <div class="row g-3 align-items-center page-header">
               <div class="col-lg-6 page-header__text">
                  <div class="relative z-1000">
                     <div class="header-title wow fadeInUp mb-2" data-wow-delay=".2s">Наши услуги</div>
                        <ul class="floens-breadcrumb list-unstyled wow fadeInUp" data-wow-delay=".3s">
                           <li><a href="/">Главная</a></li>
                           <li><span>Услуги</span></li>
                        </ul>
                     <div class="spacer-single"></div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="template-offer__img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/misc/2.png" class="w-100" alt="">
                  </div>
               </div>  
            </div>
         </div>
      </section>

         <?php
               $service_id = get_the_ID();
               $terms = get_the_terms($service_id, 'service-categories');
         ?>
         
         <section class="relative overflow-hidden">
               <div class="container">
                  <!-- <div class="row g-4">
                     <div class="col-lg-6 offset-lg-3 text-center">
                           <div class="subtitle wow fadeInUp mb-3">Услуги</div>
                           <div class="section-title wow fadeInUp" data-wow-delay=".2s">Помощь, которую оказываем</div>
                           <div class="spacer-single"></div>
                           <div class="spacer-half"></div>
                     </div>
                  </div> -->

                  <div class="row g-4">

                    <?php
                        $terms = get_terms(array(
                            'taxonomy' => 'service-categories',
                            'hide_empty' => false,
                        ));

                        if (!empty($terms) && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                            $term_image_id = \Kama\WP_Term_Image::get_image_id($term);
                            $term_image_url = wp_get_attachment_image_url($term_image_id, 'full'); // Получаем URL изображения

                        // Проверяем, есть ли изображение
                        if ($term_image_url) {
                        $term_link = get_term_link($term);
                    ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="relative shadow-soft">
                                <a href="<?php echo ($term_link); ?>" class="d-block hover">
                                    <div class="relative overflow-hidden rounded-1 shadow-soft">
                                        <div class="absolute z-2 start-0 w-100 abs-middle fs-36 text-white text-center">
                                            <span class="btn-main hover-op-1">Узнать больше</span>
                                        </div>
                                        <div class="services__img"> 
                                            <img src="<?php echo $term_image_url; ?>" class="img-fluid hover-scale-1-2" alt="">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="hover-op-0 abs p-3 px-4 bottom-0 text-center text-light w-100 overlay-black-1 bg-blur">
                                            <div class="item-title"><?php echo ($term->name); ?></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php
                                }
                            }
                        } else {
                            echo '<p>Нет доступных категорий.</p>';
                        }
                    ?>

                  </div>
               </div>
         </section>


         <section class="relative overflow-hidden">
            <div class="container">
               <div class="row g-4">
                  <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="subtitle wow fadeInUp mb-3">«Тревожные звоночки», чтобы обратиться к ЛОРу</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Лечение за два визита</h2>
                        <p class="lead mb-0 wow fadeInUp">Горло першит, как после концерта рок-звезды? Значит, вы по адресу! <br> Ольга Александровна берется даже за сложные случаи.
                           <!-- <br>Гайморит, отит, тонзиллит, фарингит, ларингит, аденоиды, искривлённая перегородка, серные пробки, потеря слуха — для любой проблемы у доктора есть решение. --></p>
                        <div class="spacer-single"></div>
                        <div class="spacer-half"></div>
                  </div>
               </div>

               <div class="row g-4">
                  <div class="col-lg-4 col-sm-6">
                     <div class="bg-white p-40 shadow-soft h-100 rounded-1">
                        <div class="bells_icons text-center">
                           <img src="<?php echo get_template_directory_uri(); ?>/images/icons/white/ear.png" class="bg-color w-90px p-15 rounded-1 mb-3" alt="">
                        </div>           
                        <div class="relative wow fadeInUp">
                           <div class="item-title text-center">Ухо</div>
                           <div class="symptoms-block__ul">
                              <div class="symptoms-block__item">Боли в ухе (стреляющие, острые, тянущие и пр.)</div>
                              <div class="symptoms-block__item">Выделения из ушной раковины</div>
                              <div class="symptoms-block__item">Ощущение инородного тела</div>
                              <div class="symptoms-block__item">Снижение слуха</div>
                              <div class="symptoms-block__item">Чувство заложенности</div>
                              <div class="symptoms-block__item">Шум или звон в ушах</div>
                              <div class="symptoms-block__item">Чувство давленияв ушных раковинах</div>
                              <div class="symptoms-block__item">Травма уха и др.</div>
                              <div class="symptoms-block__item">Боли в горле</div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-sm-6">
                     <div class="bg-white p-40 shadow-soft h-100 rounded-1">
                        <div class="bells_icons text-center">
                           <img src="<?php echo get_template_directory_uri(); ?>/images/icons/white/throat.png" class="bg-color w-90px p-15 rounded-1 mb-3" alt="">
                        </div>                      
                        <div class="relative wow fadeInUp">
                           <div class="item-title text-center">Горло</div>
                           <div class="symptoms-block__ul">
                              <div class="symptoms-block__item">Боли в горле</div>
                              <div class="symptoms-block__item">Болезненное, затрудненное глотание</div>
                              <div class="symptoms-block__item">Покраснения в горле</div>
                              <div class="symptoms-block__item">Осиплость (охриплость), изменение тембра голоса</div>
                              <div class="symptoms-block__item">Чувство першения в горле, сопровождаемое кашлем</div>
                              <div class="symptoms-block__item">Увеличение лимфоузлов под челюстью</div>
                              <div class="symptoms-block__item">Травмы в области горла и пр.</div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-sm-6">
                     <div class="bg-white p-40 shadow-soft h-100 rounded-1">
                        <div class="bells_icons text-center">
                           <img src="<?php echo get_template_directory_uri(); ?>/images/icons/white/nose.png" class="bg-color w-90px p-15 rounded-1 mb-3" alt="">
                        </div>                      
                        <div class="relative wow fadeInUp">
                           <div class="item-title text-center">Нос</div>
                           <div class="symptoms-block__ul">
                              <div class="symptoms-block__item">Боли в области носовых пазух</div>
                              <div class="symptoms-block__item">Затрудненное носовое дыхание</div>
                              <div class="symptoms-block__item">Зуд в носу, частое чихание</div>
                              <div class="symptoms-block__item">Затянувшийся насморк или, наоборот, сухость слизистых</div>
                              <div class="symptoms-block__item">Частые носовые кровотечения</div>
                              <div class="symptoms-block__item">Снижение обоняния</div>
                              <div class="symptoms-block__item">Травмы носовых пазух и др.</div>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </section>

         <section class="relative bg-blue">
            <div class="container">
               <div class="row g-4">
                  <div class="col-lg-6 offset-lg-3 text-center">
                     <div class="subtitle wow fadeInUp mb-3">Подзаголовок</div>
                     <div class="section-title wow fadeInUp" data-wow-delay=".2s">Наша формула к быстрому выздоровлению</div>
                     <div class="spacer-single"></div>
                     <div class="spacer-half"></div>
                  </div>
               </div>

               <div class="row g-4 formula-area">
                  <div class="col-lg-4 col-md-6">
                        <div class="relative">
                           <img src="<?php echo get_template_directory_uri(); ?>/images/icons/white/individuality.png" class="abs bg-color-3 w-90px p-15 rounded-1 mb-3" alt="">
                           <div class="relative ps-100 ms-4 wow fadeInUp">
                              <div class="item-title">индивидуаль<wbr>ный подход к каждому</div>
                           </div>
                        </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                        <div class="relative">
                           <img src="<?php echo get_template_directory_uri(); ?>/images/icons/white/otoscope.png" class="abs bg-color-3 w-90px p-15 rounded-1 mb-3" alt="">
                           <div class="relative ps-100 ms-4 wow fadeInUp">
                              <div class="item-title">профессио<wbr>нальное оборудование</div>
                           </div>
                        </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                        <div class="relative">
                           <img src="<?php echo get_template_directory_uri(); ?>/images/icons/white/qualification.png" class="abs bg-color-3 w-90px p-15 rounded-1 mb-3" alt="">
                           <div class="relative ps-100 ms-4 wow fadeInUp contact__link">
                              <div class="item-title">квалифициро<wbr>ванная помощь</div>
                           </div>
                        </div>
                  </div>

               </div>
            </div>
         </section>

         <section class="bg-color-3 text-light pt-30 pb-0 appeal">
            <div class="container relative">
               <div class="row g-4 gx-5 align-items-center">
                  <div class="col-lg-8 relative wow fadeInLeft">
                     <div class="relative z-1000">
                        <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Обращение</div>
                        <div class="middle-title appeal__text">"Не ждите, пока само пройдет — приходите! Мы гарантируем профессиональный подход, современные методы и тёплый приём. Даже если случай кажется вам безнадежным — давайте разбираться! Ваше здоровье важнее скромных сомнений."</div>
                        <div class="fw-500">Ольга Князева</div>
                     </div>
                  </div>

                  <div class="col-lg-4 wow fadeInRight">
                     <div class="appeal__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/doctors/olga.png" class="w-100" alt="">
                     </div>
                  </div>

               </div>
            </div>
         </section>

      </div>

   <?php get_footer(); ?>