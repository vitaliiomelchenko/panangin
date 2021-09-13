<?php get_header(); ?>
<section class="single-post">
        <div class="container">
            <div class="single-post__image">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="single-post__contentWrapper">
                <p><strong> <?php the_title(); ?></strong></p>
                <p class="single-post__date"><?php echo get_the_date('n-j-Y'); ?></p>
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
        </div>
        <?php if(have_rows('flexible_content')):?>
	<?php  while(have_rows('flexible_content')): the_row(); ?>
      <?php get_template_part('/template-parts/acf-blocks/' . get_row_layout()); ?>
    <?php endwhile;
endif; ?>
<section class="blog">
    <div class="container">
        <div class="blog__heading">
            <h1>Корисні поради</h1>
        </div>
        <ul class="row blog__row">

                <?php 
                $args = array(
                    'posts_per_page' => 3,
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
                                        <a class="blog__itemButton" href="<?php echo get_the_permalink(); ?>">Читати далі <svg width="17" height="15"
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
        <div class="blog__buttonWrapper">
            <a href="#" class="button button__blue">Всі новини</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>