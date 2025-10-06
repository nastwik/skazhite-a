<?php get_header(); ?>  

   <section class="bg-blue section-dark pb-0 relative overflow-hidden">
      <div class="container relative">
         <div class="row g-3 align-items-center page-header">
            <div class="col-lg-6 page-header__text">
               <div class="relative ">
                  <div class="header-title wow fadeInUp mb-2" data-wow-delay=".2s">Страница не найдена</div>
                     <ul class="floens-breadcrumb list-unstyled wow fadeInUp" data-wow-delay=".3s">
                        <li><a href="/">Главная</a></li>
                        <li><span>Страница не найдена</span></li>
                     </ul>
                  <div class="spacer-single"></div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="template-offer__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/misc/11.png" class="w-100" alt="">
               </div>
            </div>  
         </div>
      </div>
   </section>

	<section>
      <div class="container">
         <div class="row text-center">
            <div class="error-title">404</div>
            <div class="middle-title">Страница, которую вы искали, не найдена.</div>
            <p>Возможно, искомая страница была удалена, изменила свое название или временно недоступна.</p>
            <div class="team_butns justify-content-center">
               <a class="btn-main btn-red wow fadeInUp" data-wow-delay=".4s" href="/">На главную</a>
               <? if(carbon_get_theme_option( 'site_phone' )) { ?>
                  <a class="btn-main btn-blue wow fadeInUp" data-wow-delay=".4s" href="tel:<?php echo carbon_get_theme_option('site_phone_digits'); ?>"><?php echo carbon_get_theme_option('site_phone'); ?></a>
               <? } ?> 
            </div>
         </div>
		</div>
	</section>
		
<?php get_footer(); ?>