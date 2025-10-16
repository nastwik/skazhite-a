            <?php
                $test_gallery = carbon_get_theme_option('gallery');
                // Проверяем, есть ли изображения в галерее
                if (!empty($test_gallery)) : // Если галерея не пустая
            ?>
            
                <section class="bg-blue">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-6 offset-lg-3 text-center">
                                <div class="subtitle wow fadeInUp mb-3">Галерея</div>
                                <div class="section-title wow fadeInUp" data-wow-delay=".2s">Фото клиники</div>
                                <div class="spacer-single"></div>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach($test_gallery as $gallery_id) :
                                $img_src = wp_get_attachment_image_url($gallery_id, 'full');
                                $img_src_webp = convertToWebpSrc($img_src);

                                // Пропустим итерацию, если у изображения нет URL
                                if (!$img_src) continue;
                            ?>
                                <div class="col-lg-4 col-md-6 pb-4">
                                    <div class="imglist">
                                        <a href="<?php echo $img_src_webp; ?>" data-fancybox="gallery" class="shadow-soft">
                                            <img src="<?php echo $img_src_webp; ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>

            <?php endif; ?>