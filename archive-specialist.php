<?php
    /* Template Name: Specialist */
?>
<?php get_header(); ?>
<section class="professinals">
        <div class="container">
            <div class="page__heading">Статті для фахівців</div>
            <ul class="professionals-post__list">
                <?php
                   $query = new WP_Query('category_name=stati-dlya-spetsialistov');

                    // Цикл
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();?>
                            <li class="professionals-post row">
                                <div class="professionals-post__imageWrapper col-lg-4">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="professionals-post__contentWrapper col-lg-8">
                                    <strong> <?php the_title(); ?></strong>
                                    <div class="professionals-post__date"><?php echo get_the_date('n-j-Y'); ?></div>
                                    <div class="professionals-post__content"><?php the_excerpt(); ?></div>
                                    <a href="<?php echo get_the_permalink(); ?>" class="professionals-post__button">Читать больше </a>
                                </div>
                            </li>
                        <?php } 
                    } else {
                    }
                    wp_reset_postdata();
                ?>
            </ul>
        </div>
    </section>
<?php get_footer(); ?>                               
 