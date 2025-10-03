<?php get_header(); ?>

<?php
    $content = get_the_content();
    $content = apply_filters( 'the_content', $content );
    $content = str_replace( ']]>', ']]>', $content );
    $content = mb_substr($content, 0,50).'...';
?>

   <div class="no-bottom no-top" id="content">

      <div id="top"></div>

        <section class="bg-blue section-dark pb-0 relative overflow-hidden">
            <div class="container relative">
                <div class="row g-3 align-items-center page-header">
                <div class="col-lg-6 page-header__text">
                    <div class="relative">
                        <div class="header-title wow fadeInUp mb-2" data-wow-delay=".2s">Поиск по сайту</div>
                            <ul class="floens-breadcrumb list-unstyled wow fadeInUp" data-wow-delay=".3s">
                            <li><a href="/">Главная</a></li>
                            <li><span>Поиск по сайту</span></li>
                            </ul>
                        <div class="spacer-single"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="template-offer__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/misc/10.png" class="w-100" alt="" >
                    </div>
                </div>  
                </div>
            </div>
        </section>

        <section class="search-area pt-100 pb-75 fl-search-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="section-title wow fadeInUp" data-wow-delay=".2s">Результаты поиска по: "<?php echo $_GET['s'];?>"</div>
                    <div class="fl-search-area__block">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <?php 
                            
                                $post_id = $post->ID ;
                                $post_type = get_post_type( $post_id );
                                $post_type_name;

                                if ($post_type == 'page') {
                                    $post_type_name = 'Одиночная страница';
                                }

                                if ($post_type == 'service') {
                                    $post_type_name = 'Раздел услуги';
                                }
                            
                            ?>
                        
                            <div class="fl-search-area__block-answer shadow-soft">
                                <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                <p><?=$post_type_name?></p>
                            </div>
                            <?php endwhile; else: ?>
                            <p>Поиск не дал результатов.</p>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </section>

    </div>
<?php get_footer(); ?>