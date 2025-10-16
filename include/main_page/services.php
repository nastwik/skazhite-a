            <?php
                $service_id = get_the_ID();
                $terms = get_the_terms($service_id, 'service-categories');
            ?>
            
           <section class="relative overflow-hidden">
                <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-6 offset-lg-3 text-center">
                                <div class="subtitle wow fadeInUp mb-3">Услуги</div>
                                <div class="section-title wow fadeInUp" data-wow-delay=".2s">Помощь, которую оказываем</div>
                                <div class="spacer-single"></div>
                                <div class="spacer-half"></div>
                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <?php get_search_form(); ?>
                        </div>

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
                                    $term_image_url_webp = convertToWebpSrc($term_image_url);  
                                    $term_link = get_term_link($term);
                    ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="services-item">
                                <div class="relative shadow-soft">
                                    <a href="<?php echo ($term_link); ?>" class="d-block hover">
                                        <div class="relative overflow-hidden rounded-1 shadow-soft">
                                            <div class="absolute z-2 start-0 w-100 abs-middle fs-36 text-white text-center">
                                                <span class="btn-main hover-op-1">Узнать больше</span>
                                            </div>
                                            <div class="services__img"> 
                                                <img src="<?php echo $term_image_url_webp; ?>" class="img-fluid hover-scale-1-2" alt="">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="hover-op-0 abs p-3 px-4 bottom-0 text-center text-light w-100 overlay-black-1 bg-blur">
                                                <div class="item-title"><?php echo ($term->name); ?></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
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