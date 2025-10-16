<?php get_header(); ?> 

<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <section class="bg-blue section-dark pb-0 relative overflow-hidden">
        <div class="container relative h-100">
            <div class="row g-3 align-items-center page-header h-100">
                <div class="col">
                    <div class="relative">
                        <div class="header-title wow fadeInUp mb-2" data-wow-delay=".2s"><?php the_title(); ?></div>
                        <ul class="floens-breadcrumb list-unstyled wow fadeInUp" data-wow-delay=".3s">
                            <li><a href="/">Главная</a></li>
                            <li><a href="<?php echo esc_url(home_url('/services')); ?>">Услуги</a></li>
                            <li><span><?php the_title(); ?></span></li>
                        </ul>
                        <div class="spacer-single"></div>
                    </div>
                </div> 
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden">
         <div class="container">
            <div class="row g-4 grid-divider justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="bg-white text-center p-40 shadow-soft h-100 rounded-1">
                        <?php
                            $service_icon_id = carbon_get_post_meta(get_the_ID(), 'service_icon'); 
                            $service_icon_url = wp_get_attachment_image_url($service_icon_id, 'full');
                            if ($service_icon_url) :
                        ?>
                        <img src="<?php echo esc_url($service_icon_url); ?>" class="bg-color w-90px p-15 rounded-1 mb-3" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/icons/protection.webp'); ?>" class="bg-color w-90px p-15 rounded-1 mb-3" alt="">
                        <?php endif; ?>

                        <div class="relative wow fadeInUp">
                            <div class="item-title"><?php the_title(); ?></div>
                            <div class="item-title price"><?php $price = carbon_get_post_meta(get_the_ID(), 'service_price'); echo esc_html($price ? $price : 'Цена не указана');?>₽</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
