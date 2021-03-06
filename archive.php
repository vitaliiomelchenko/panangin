
<?php get_header(); ?>
<div class="breadcrumbs">
    <div class="container">
        <?php echo do_shortcode('[wpseo_breadcrumb]') ?>
    </div>
</div>
<section>
    <div class="page__heading"><?php printf( _e('Корисні поради', 'Panangin'))?></div>
        <div class="container">
            <ul class="row blog__row">

                <?php 
                $args = array(
                    'posts_per_page' => 5,
                    'orderby' => 'comment_count'
                );    
                $query = new WP_Query( $args ); ?>
                    <?php if ( $query->have_posts() ) : ?>
	                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <li class=" blog__item col-lg-4 col-md-6 col-sm-6">
                                <div class="blog__itemInner">
                                    <div class="blog__itemImageWrapper">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    </div>
                                    <div class="blog__itemContent">
                                        <h5>
                                            <?php the_title(); ?>
                                        </h5>
                                        <a class="blog-button" href="<?php echo get_the_permalink(); ?>">Читати далі <svg width="17" height="15"
                                                viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.75 7.72559L0.75 7.72559" stroke="#58585B" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke="#58585B"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                <p><?php esc_html_e( 'Нет постов по вашим критериям.' ); ?></p>
            <?php endif; ?>                
        </ul>
    </div>
</section>
<?php get_footer(); ?>