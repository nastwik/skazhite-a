<?php get_header(); 
   
   $term = get_queried_object();
   if (!$term || is_wp_error($term)) {
      echo '<p>Ошибка при получении категории.</p>'; 
      return;
   }
?>

   <div class="no-bottom no-top" id="content">
      <div id="top"></div>

      <section class="bg-blue section-dark pb-0 relative overflow-hidden">
         <div class="container relative">
            <div class="row g-3 align-items-center page-header">
               <div class="col-lg-6 page-header__text">
                  <div class="relative">
                     <div class="header-title wow fadeInUp mb-2" data-wow-delay=".2s"><?php echo ($term->name); ?></div>
                        <ul class="floens-breadcrumb list-unstyled wow fadeInUp" data-wow-delay=".3s">
                           <li><a href="/">Главная</a></li>
                           <li><a href="<?php echo (home_url('/services')); ?>">Услуги</a></li>
                           <li><span><?php echo ($term->name); ?></span></li>
                        </ul>
                     <div class="spacer-single"></div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="template-offer__img">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/misc/7.png" class="w-100" alt="">
                  </div>
               </div>  
            </div>
         </div>
      </section>

      <?php if ( have_posts() ) : ?>
         <section>
            <div class="container">
               <div class="row g-4">
                  <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="subtitle wow fadeInUp mb-3">Устраняем лор-заболевания — от насморка до отита</div>
                        <div class="section-title wow fadeInUp" data-wow-delay=".2s">Быстро. Персонально. В любой стадии</div>
                        <div class="spacer-single"></div>
                  </div>
               </div>
               <div class="row g-4 justify-content-center">
               <?php
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                  $args = array(
                     'post_type' => 'service',
                     'paged' => $paged, 
                     'posts_per_page' => 12, // 12 услуг на страницу
                     'tax_query' => array(
                           array(
                              'taxonomy' => 'service-categories', 
                              'field'    => 'term_id',
                              'terms'    => $term->term_id,
                           ),
                     ),
                  );

               $service_query = new WP_Query($args);

               if ($service_query->have_posts()) :
                  while ($service_query->have_posts()) : $service_query->the_post(); ?>

                  <div class="col-lg-3 col-md-6">
                        <div class="bg-white text-center p-40 shadow-soft h-100 rounded-1">
                           <?php
                              $service_icon_id = carbon_get_post_meta(get_the_ID(), 'service_icon'); 
                              $service_icon_url = wp_get_attachment_image_url($service_icon_id, 'full');
                              if ($service_icon_url) :
                           ?>
                           <img src="<?php echo esc_url($service_icon_url); ?>" class="bg-color w-90px p-15 rounded-1 mb-3" alt="<?php echo esc_attr(get_the_title()); ?>">
                           <?php else : ?>
                              <img src="<?php echo get_template_directory_uri(); ?>/images/icons/white/protection.png" class="bg-color w-90px p-15 rounded-1 mb-3" alt="">
                           <?php endif; ?>

                           <div class="relative wow fadeInUp">
                              <div class="item-title"><?php the_title(); ?></div>
                              <div class="item-title price"><?php $price = carbon_get_post_meta(get_the_ID(), 'service_price'); echo ($price ? $price : 'Цена не указана');?>₽</div>
                           </div>
                        </div>
                  </div>

                  <?php endwhile;
                     else : ?>
                  <?php endif; ?>

                  <!-- pagination begin -->
                  <div class="col-lg-12 pt-4 text-center">
                     <div class="d-inline-block">
                        <nav aria-label="Page navigation example">
                           <ul class="pagination">
                              <?php
                                 $args = [
                                    'show_all'     => false,
                                    'end_size'     => 1,
                                    'mid_size'     => 1,
                                    'prev_next'    => true,
                                    'prev_text'    => '<i class="fa fa-chevron-left"></i>',
                                    'next_text'    => '<i class="fa fa-chevron-right"></i>',
                                    'add_args'     => false,
                                    'screen_reader_text' => __( 'Навигация по страницам' ),
                                    'class' => 'nav-links',
                                 ];

                                 echo paginate_links(array_merge($args, [
                                    'total' => $service_query->max_num_pages,
                                    'current' => $paged,
                                 ]));
                              ?>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <!-- pagination end -->
               </div>
               
            </div>
         </section>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>                  
      
   </div>
<?php get_footer(); ?>