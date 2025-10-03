<?php

/*
Template Name: Прайс
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
                     <div class="header-title wow fadeInUp mb-2" data-wow-delay=".2s">Прайс</div>
                        <ul class="floens-breadcrumb list-unstyled wow fadeInUp" data-wow-delay=".3s">
                           <li><a href="/">Главная</a></li>
                           <li><span>Прайс</span></li>
                        </ul>
                     <div class="spacer-single"></div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="template-offer__img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/misc/3.png" class="w-100" alt="" >
                  </div>
               </div>  
            </div>
         </div>
      </section>

      <section>
         <div class="container">
            <div class="row g-4">
               <div class="col-lg-6 offset-lg-3 text-center">
                  <div class="subtitle wow fadeInUp mb-3">39 решений для вашего здоровья</div>
                  <div class="section-title wow fadeInUp" data-wow-delay=".2s">Полный спектр лор-услуг</div>
                  <div class="spacer-single"></div>
               </div>
            </div>
            <div class="services-price wow fadeInUp">
               <div class="fl-table shadow-soft">
                  <table>
                     <thead>
                        <tr>
                           <th>№ п/п</th>
                           <th>Наименование услуги</th>
                           <th>Стоимость, руб.</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php
                        $args = array(
                           'post_type' => 'service',
                           'posts_per_page' => -1, 
                        );

                     $service_query = new WP_Query($args);
                     $counter = 1; 

                     if ($service_query->have_posts()) :
                        while ($service_query->have_posts()) : $service_query->the_post(); ?>

                        <tr>
                           <td><?php echo $counter++; ?></td>
                           <td><?php the_title(); ?></td>
                           <td><?php $price = carbon_get_post_meta(get_the_ID(), 'service_price'); echo ($price ? $price : 'Цена не указана');?></td>
                        </tr>
                        
                     <?php endwhile;
                        else : ?>
                         <tr>
                           <td colspan="3">Услуги не найдены.</td>
                        </tr>
                     <?php endif; ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </section>

   </div>

<?php get_footer(); ?>