                  <?php 
                     $page_id = get_the_ID();
                     $button_text_2 = carbon_get_post_meta($page_id, 'top_second_btn_text');

                     $top_background_img_id = carbon_get_post_meta( $page_id, 'top_background_image');
                     $top_background_img_src = wp_get_attachment_image_url($top_background_img_id, 'full');
                     $top_img_src_webp = convertToWebpSrc($top_background_img_src);

                     $offer_right_img = carbon_get_post_meta( $page_id, 'top_right_image' );
                     $offer_right_img_src = wp_get_attachment_image_url($offer_right_img, 'full');
                     $offer_right_img_src_webp = convertToWebpSrc($offer_right_img_src);
                   ?>
                  
                  <section class="slider-area relative overflow-hidden pb-0" data-bgimage="url(<?php echo $top_img_src_webp; ?>) center">
                        <div class="container relative z-1000">
                           <div class="row g-4 align-items-center justify-content-between">
                              <div class="col-lg-6 offer_content">
                                    <div class="relative z-1000">
                                       <div class="header-title wow fadeInUp" data-wow-delay=".0s"><?php echo carbon_get_post_meta( $page_id, 'top_title'); ?></div>

                                       <p class="wow fadeInUp" data-wow-delay=".2s"><?php echo carbon_get_post_meta( $page_id, 'top_subtitle'); ?></p>

                                       <div class="spacer-10"></div>

                                       <div class="team_butns">
                                          <? if(carbon_get_theme_option( 'site_phone' )) { ?>
                                             <a href="tel:<?php echo carbon_get_theme_option('site_phone_digits'); ?>" class="btn-main btn-red wow fadeInUp" data-wow-delay=".4s"><?php echo carbon_get_theme_option('site_phone'); ?></a>
                                          <? } ?>
                                          <?php if ($button_text_2) : ?>
                                             <a href="" class="btn-main btn-blue wow fadeInUp" data-wow-delay=".4s" href="<?php echo carbon_get_post_meta( $page_id, 'top_second_btn_link'); ?>"><?php echo $button_text_2; ?></a>
                                          <?php endif; ?>
                                          </div>

                                       <div class=""></div>

                                       <div class="spacer-double"></div>
                                    </div>
                              </div>

                              <div class="col-lg-6">
                                    <img src="<?php echo $offer_right_img_src_webp; ?>" class="w-100" alt="">
                              </div>

                           </div>
                        </div>
                  </section>